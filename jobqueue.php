<?php
//date_default_timezone_set('Europe/Milan');

$queue = new ZendJobQueue();

$start= date('Y-m-d H:i:s', strtotime('+1 minute'));;

$options= array (
	'schedule_time' => $start
);
$queue->createHttpJob('/demo/job.php',$_POST,$options);

echo "Job schedule to be executed at ".$start;