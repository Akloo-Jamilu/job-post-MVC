<?php include 'inc/header.php'; ?>

<div class="p-5 mb-4 bg-light rounded-3 " style="font-family:  'Montserrat', sans-serif ;">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"> Find a Job</h1>
       <form method="GET" action="index.php">
            <select name="category" class="form-control" id="">
                <option value="0">Choose category</option>
                <?php foreach($categories as $category) : ?>
                  <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?> </option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn  btn-success" value="FIND ">
       </form>
      </div>
    </div>

    <h3 style="font-family:  'Montserrat', sans-serif ;"><?php echo $title; ?></h3>

    <?php foreach($jobs as $job)   : ?>
    <div class="row align-items-md-stretch" style="font-family:  'Montserrat', sans-serif ;">
      <div class="container">
        <div class="h-100 p-5 text-dark  rounded-3">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
          <a class="btn btn-outline-dark" href="job.php?id=<?php echo $job->id; ?>" >Views</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

        


<?php include 'inc/footer.php'; ?>