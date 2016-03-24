  <html>
  <head>
  	<title>Quick Exchange</title>
  	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-default">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><font color="red">QuickExchange</font></a>
          </div>

          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
              <li><a href="<?php echo ROOT_URL; ?>posts">Textbook Exchange</a></li>
              <li><a href="<?php echo ROOT_URL; ?>socialevents">Social Events</a></li>
              <li><a href="<?php echo ROOT_URL; ?>questionsandanswers">Questions & Answers</a></li>
              <li><a href="<?php echo ROOT_URL; ?>findroommates">Find Roommates</a></li>
              <li><a href="<?php echo ROOT_URL; ?>findtutors">Find Tutors</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
               <li><a href="<?php echo ROOT_URL;?>">Welcome <?php echo $_SESSION['user_data']['firstname']; ?></a></li>
                <li><a href="<?php echo ROOT_URL;?>users/logout">Logout</a></li>

            <?php else :  ?>
              <li><a href="<?php echo ROOT_URL;?>users/login">Login</a></li>
                <li><a href="<?php echo ROOT_URL;?>users/register">Register</a></li>
            <?php endif;?>
            </ul>
          </div><!--/.nav-collapse -->

  

        </div><!-- end nav class container-->
<div class="col-lg-12">
    <i class="icon-search"></i>
    <input type="search" class="form-control" placeholder="Search"  name = "search"/>
</div>

      </nav>





<br>
      <div class="container">

       <div class="row">
         <?php Messages::display(); ?>
       	<?php require($view); ?>
       </div>

      </div><!-- /.container -->
  </body>
  </html>