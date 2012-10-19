<?php
    class DB_Gateway_DB{
        /**
         * @var mysqli
         */
        private $mysql = null;
        public static function parseDSN($dsn){
            $required = array('host', 'user','path');            
            $url = parse_url($dsn);
            if(!$url){
                throw new BadMethodCallException("DSN inválido. Gil.");
            }
            foreach($required as $r){
                if(!isset($url[$r])){
                    throw new BadMethodCallException("DSN inválido. Gil. Falta: $r");
                }
            }
            $url['path'] = trim($url['path'],'/ ');
            if(!isset($url['pass'])){
                $url['pass'] = null;
            }
            return $url;
        }
        public function __construct($dsn){
            $this->mysql = $this->connect(self::parseDSN($dsn));
        }
        /**
         * Conectar a la DB
         * @param array $data (Claves requeridas: host, user, pass, path - la DB- )
         */
        public function connect(array $data){
            $mysql = null;
            extract($data, EXTR_PREFIX_ALL, 'dsn');
            try{
                $mysql = new mysqli($dsn_host, $dsn_user, $dsn_pass, $dsn_path);
            }
            catch(Exception $e){
                throw new BadMethodCallException("DSN inválido. Gil.");
            }
            return $mysql;
        }
        /**
         * Desconectar de la DB
         */
        public function disconnect(){
            $this->mysql->close();
            $this->mysql = null;
        }
        /**
         * Devolver el objeto mysqli
         * @return mysqli
         */
        public function getRawConnection(){
            return $this->mysql;
        }
        
    }
