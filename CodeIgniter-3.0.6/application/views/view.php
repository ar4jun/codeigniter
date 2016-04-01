
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
        <li><a href="<?php echo base_url(); ?>/UserController/home">BACK</a></li>
       
      </ul>

  </div>
</nav>



<div class="container">
<div class="panel panel-primary">
 <div class="panel-heading">USER DETAILS</div>

<table class="table table-hover">
<tr><th>ID</th><th>User Name</th><th>Password</th><th>Action</th></tr>
<?php $i=1; foreach($users as $user): ?>
<tr><td><?= $i; ?></td><td><?= $user->username; ?></td>
<td><?= $user->password; ?></td>
<td>
<a href="<?php echo base_url(); ?>userController/update/<?=$user->id;?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="<?php echo base_url(); ?>userController/delete/<?=$user->id;?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
</td>
</tr>

<?php $i++; endforeach;?>

  
</table>
</div>
</div>


 <div class="row">
        <div class="col-xs-12 col-md-8">
        </div>
        <div class="col-xs-12 col-md-4">
        
<!-- For Displaying Alerts & Notifications -->
<?php if( $this->session->flashdata('check') == TRUE ): ?>
<div class="alert alert-success floating-message fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> User Details Updated!</strong>
</div>
<?php endif; ?>
<?php if( $this->session->flashdata('delete') == TRUE ): ?>
<div class="alert alert-danger floating-message fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> User Details Deleted!</strong>
</div>
<?php endif; ?>
</div>
