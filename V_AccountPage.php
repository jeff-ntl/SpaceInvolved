<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
    <title>SpaceInvolved</title>
  </head>
  <body>
    <div class="container">
      <div class="text-center">
        <h1 id="titleText">Space Involved</h1>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center">
            <?php 
            echo "Welcome ";
            echo ($_SESSION['username']);
            ?>
          </h3>
          <h4>Chapters</h4>
          <br>
          <ul>
            <li><a href="<?php echo site_url('Home/page/3') ?>">Space robots</a></li>
            <li><a href="">Planets/Exoplanets</a></li>
            <li><a href="">Space habitats</a></li>
            <li><a href="">Successful people in aerospace</a></li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="text-center">
            <button onclick="location.href='<?php echo base_url('/Home/destroySession')?>'" type="submit" class="btn btn-primary">Log out</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>