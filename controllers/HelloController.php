<?php
	namespace Controllers;
	use \Core\Controller;
    use \Models\Hello;
	
	class HelloController extends Controller
	{
		public function index() {
			$this->title = 'myframework';			
			$hello = new Hello; // тестовая модель для проверки базы			
			return $this->render('hello/index');
		}
	}
?>
