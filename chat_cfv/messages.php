<?php

require_once 'config.php';

abstract class Messages_Engine {

    /**
     * Pone un mensaje en alguna parte
     * @param string $message
     * @param string $user
     * @param float $date
     * @return false si pasa algo, true si estuvo todo ok
     */
    abstract public function put($message, $user, $date);

    /**
     * Traer todos los mensajes en un intervalo determinado
     * @param float $before 
     * @param float $after 
     * @return array
     */
    abstract public function get($before, $after);
}

class Messages_XML_Engine extends Messages_Engine {

    /**
     * @var DOMDocument
     */
    private $_doc = null;

    /**
     * @var DOMElement
     */
    private $_dom = null;

    public function __construct() {
        $this->_doc = new DOMDocument('1.0');
        $this->_doc->loadXML(file_get_contents(XML_FILE));
        $this->_dom = $this->_doc->getElementsByTagName('chat')->item(0);
    }

    public function put($msg, $usr, $date) {
        $doc= $this->_doc;
        $date = microtime(true);
        $new_line = $doc->createElement('message');
        $new_line->setAttribute("date", $date);
        $new_line->setAttribute("user", $usr);
        $new_line->appendChild(new DOMText($msg));
        $chat = $this->_dom;
        $chat->appendChild($new_line);
        $this->_reloadDom();
    }

    public function get($before, $after) {
        $xpath = new DOMXPath($this->_doc);
        $xpath_expr = sprintf('//message[@date > "' . $after . '"]');
        $results = $xpath->query($xpath_expr);
        $buf = array();
        foreach ($results as $result) {
            $buf[] = array(
                'text' => $result->textContent,
                'user' => $result->getAttribute('user'),
                'date' => $result->getAttribute('date'),
            );
        }
        return $buf;
    }

    private function _reloadDom() {
        file_put_contents(XML_FILE, $this->_doc->saveXML());
        $this->_doc->loadXML(file_get_contents(XML_FILE));
        $this->_dom = $this->_doc->getElementsByTagName('chat')->item(0);
    }

}

class Messages {

    /**
     * @var Messages
     */
    private static $instance = null;

    /**
     *
     * @var string
     */
    private static $engine_class = 'Messages_XML_Engine';

    /**
     * @var Messages_Engine
     */
    private static $engine = null;

    /**
     * @return Messages
     */
    public static function instance() {
        if (null === self::$instance) {
            self::$instance = new Messages;
        }
        return self::$instance;
    }

    private function __construct() {
        $engine = $this->getEngine();
        if (!($engine instanceof Messages_Engine)) {
            die("EL MOTOR TIENE QUE HEREDAR DE Messages_Engine");
        }
    }

    public static function get($before, $after) {

        return self::instance()->getEngine()->get($before, $after);
    }

    public static function put($message, $user, $date) {
        return self::instance()->getEngine()->put($message, $user, $date);
    }

    public static function setEngine($class) {
        self::$engine = new $class;
    }

    public function getEngine() {
        if (null === self::$engine) {
            $engine_class = self::$engine_class; //because fuck you, that's why
            self::$engine = new $engine_class;
        }
        return self::$engine;
    }

    public function __clone() {
        die("No se puede clonar Messages");
    }

}
