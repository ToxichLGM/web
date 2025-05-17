<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class TestController extends Controller
	{
		public function act1() {
			$this->title = 'Act 1';
			return $this->render('test/act1', [
				'message' => 'Act 1 выполняется'
			]);
		}
		
		public function act2() {
			$this->title = 'Act 2';
			return $this->render('test/act2', [
				'message' => 'Act 2 выполняется'
			]);
		}
		
		public function act3() {
			$this->title = 'Act 3';
			return $this->render('test/act3', [
				'message' => 'Act 3 выполняется'
			]);
		}
	} 
