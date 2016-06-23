<?php

App::uses('AppHelper', 'View/Helper');

class CaketranslateHelper extends AppHelper {
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function translate($text = NULL) {
		
		$strings = array(
			'it' => array(
				'Chi siamo' => 'Chi siamo'
			),
			'en' => array(
				'Chi siamo' => 'About'
			)
		);
		
		return $strings[$this->Session->read('Config.language')][$text];
		
	}

	
	
	
}

?>
