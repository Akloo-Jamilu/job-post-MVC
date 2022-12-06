<?php include_once './config/init.php';
 include_once './config/config.php';

$job = new job;

$template = new Template('templates/job-single.php');


$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;  


