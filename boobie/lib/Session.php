<?php

class Session {

    private static $instance = null;

    public static function instance() {
        if (null === self::$instance) {
            self::$instance = new Session;
        }
        return self::$instance;
    }

    private function __construct() {
        $this->startSession();
    }

    public static function get($key) {
        return self::instance()->getValue($key);
    }

    public static function set($key, $value) {
        return self::instance()->setValue($key, $value);
    }

    public function getValue($key) {
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];            
        }
        return false;
    }

    public function setValue($key, $value) {
        return $_SESSION[$key] = $value;
    }

    public function __clone() {
        die("NO NO PIBE NO");
    }

    private function startSession() {
        if (session_id() == '') {
            session_start();
        }
    }

}