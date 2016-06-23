<?php

Router::connect(
	'/setlang/:lang',
	array('plugin'=>'Caketranslate', 'controller' => 'Caketranslate', 'action' => 'setlang'),
	array(
		'pass' => array('lang')
	)
);

?>
