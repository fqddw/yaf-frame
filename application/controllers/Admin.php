<?php
	class AdminController extends Yaf_Controller_Abstract {
		private function setHeader() {
			$header = array(
				array('title'=>'Home','url'=>'/admin/'),
				array('title'=>'Article','url'=>'/admin/article'),
				array('title'=>'Category','url'=>'/admin/category')
			);
			$this->getView()->assign('header',$header);
		}
		public function indexAction() {
			$this->setHeader();
		}
		public function articleAction() {
			$this->setHeader();
		}
		public function categoryAction() {
			$this->setHeader();
			$categories = array(json_decode(json_encode(array('id'=>1,'name'=>'Stock'))));
			$this->getView()->assign('categories',$categories);
		}
		public function loginAction() {
			if($this->getRequest()->isPost()) {
				$this->redirect('/admin/index');
			}
		}
	}