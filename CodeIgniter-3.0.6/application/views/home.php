<html>

<head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw=" crossorigin="anonymous"></script>
    <!-- <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js'></script> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link href="<?php echo base_url(); ?>assets/style.css" type="text/css" rel="stylesheet" / >
    <TITLE>codeEg</TITLE>
</head>


<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
       codeIgniter
      </a>


    </div>

    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>/welcome/logout">LOGOUT</a></li>
       
      </ul>

  </div>
</nav>

  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <a href="<?php echo base_url(); ?>userController/insert"><button type="button" class="btn btn-primary btn-lg">INSERT </button></a>
        </div>
        <div class="col-xs-12 col-md-3">
            <a href="<?php echo base_url(); ?>userController/view"><button type="button" class="btn btn-primary btn-lg">VIEW</button></a>
        </div>
        <div class="col-xs-12 col-md-3">
            <a href=""><button type="button" class="btn btn-primary btn-lg">dummy</button></a>
        </div>
        <div class="col-xs-12 col-md-3">
            <a href=""><button type="button" class="btn btn-primary btn-lg">dummy</button></a>
        </div>
    </div>
</div>
</body>
