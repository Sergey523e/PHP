<?php

namespace Controllers;
	use \Core\Controller;
    use \Models\Page; // подключаем модель
    
class NewsController  extends Controller{

    private $pages;

  public function newsall() {
			$page = new Page; // создаем объект модели
			$data = $page->getAll(); // записи 
       $this->title = 'новости';                
	   return $this->render('page/news', [
            	'header' => 'новости',
				'data'  => $data ,
			]);   
		}
}
?>