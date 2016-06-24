<?php

App::uses('AppController', 'Controller');

class CaketranslateController extends AppController {
	
	public $uses = array();
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function setlang($lang = NULL) {
		
		if ($lang!==NULL) {
		
			(string)$language = trim(strip_tags($lang));
			
			Configure::write('Config.language', $language);
			$this->Session->write('Config.language', $language);
			CakeSession::write('Config.language', $language);
			
			$this->redirect('http://your_site/' .$language);
		
		}
		
    }
	
	
	
}
?>
