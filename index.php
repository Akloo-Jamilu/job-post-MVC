<?php
include_once 'config/init.php'; ?>
<?php
include_once 'config/config.php'; ?>

<?php
$job = new job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){

    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In ' . $job->getCategory($category)->name;

}else{
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->categories();

echo $template; 