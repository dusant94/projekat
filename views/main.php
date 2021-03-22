<!DOCTYPE html>
<head>
	<title>Shareboard!</title>
	 <meta charset="utf-8">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
<body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
	 <div class="container"> 
		 <div class="navbar-header">
  <a class="navbar-brand" href="#">Shareboard</a>
   
</div>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
      </li>
       
    </ul>
     <ul class="navbar-nav nav nav-right">
		 <?php 
		 if(isset($_SESSION['is_loged_in'])):?>
			< li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?> ">Welcome <?php echo $_SESSION['user_data']['name']; ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
      </li>
		 <?php else :?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
      </li>
       <?php endif ; ?>
    </ul>
  </div>
	 </div>
</nav>

<div class="container">
 <div class="row>">
	 <?php messages::display(); ?>
	<?php require($view);?>
	</div>

</div><!-- /.container -->
	 
	</body>
</html>
