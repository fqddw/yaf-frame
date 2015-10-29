<?php

	class Category {
		public static $_inst = null;
		public static function getInstance() {
			if(!(self::$_inst instanceof Category)) {
				self::$_inst = new Category();
			}
			return self::$_inst;
		}
		
		protected function __construct() {
			
		}
		
		public function getList() {
		}
	}