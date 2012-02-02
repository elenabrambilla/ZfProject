<?php
function job1(){
	date_default_timezone_set('GMT');
	require_once 'Zend/Db.php';
	sleep(3);
	$db = Zend_Db::factory('Pdo_Mysql', array(
	    'host'     => 'localhost',
	    'username' => 'root',
	    'password' => 'root',
	    'dbname'   => 'test'
	));
	
	
	$data= array (
			'token' => md5(rand()),
			'data_esecuzione' => date('Y-m-d H:i:s')
		   );
	
	$result = $db->insert('exec',$data);
	}
