<?php

    session_start();

?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <section class="container pt-5">
        <p class="display-3 text-primary">Log In </p>

        <?php  if(isset($_SESSION['msg']))
        {
        ?>

        <div class="alert alert-info" role="alert">
             <?php  echo $_SESSION['msg'] ?>
        </div>         
        
        <?php 
        
            session_destroy();
         }
        ?>

        <?php  
        if(isset($_SESSION['error']))
        {
        ?>

        <div class="alert alert-danger" role="alert">
               <?php  echo $_SESSION['error'] ?>
        </div>         
        
        <?php 
        
            session_destroy();
         }
        ?>

    <form class="com-md-4 offset-4 mt-5" action="login_check.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
     
        <button type="submit" class="btn btn-primary float-right">Log In</button>
        <a href="register.php" class="btn btn-primary">Register</a>
        </form>
    </section>
        
    </body>
</html>