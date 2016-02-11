<?php

$config = array();

$config['topic_last_days_count'] = 5;  	// За какой период выводить топики?
$config['topic_count'] = 6;  			// Сколько записей показывать в блоке?
$config['topic_from_blogs'] = [1,2,3,4]; 	// id блогов из которых выводить топики


// Настройки вывода блока

Config::Set('block.rule_blocktop', array(
		'action' => array(
				'index', 'blog' => array('{topics}','{topic}','{blog}')
		),
		'blocks' => array(
				'right' => array(
						'top' => array('params' => array('plugin' => 'blockrnd'), 'priority' => 10),
				)
		),
		'clear' => false,
));

return $config;
?>