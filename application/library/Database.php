<?php
	class Database {
		public static $_inst = null;
		private $_pdo;
		public static function getInstance() {
			if(!(self::$_inst instanceof Database)) {
				self::$_inst = new Database();
			}
			return self::$_inst;
		}
		public function __construct() {
			$db = Yaf_Application::app()->getConfig()->get('db');
			$this->_pdo = new PDO($db->dsn,$db->username,$db->password);
		}
		
		public function execute($sql) {
			
		}
	}