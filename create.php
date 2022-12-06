<?php
include_once 'config/init.php'; ?>
<?php
include_once 'config/config.php'; ?>

<?php
$job = new job;

$template = new Template('templates/job-create.php');

 


$template->categories = $job->categories();

echo $template; 