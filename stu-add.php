<?php

    session_start();

    if(isset($_SESSION['auth']))
    {
        ?>

<html>
        <head>
            <title>Home</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </head>
        <body>
        <?php 
            include('nav.php');
        ?>
        <section class="container pt-5">
            <p class="display-4 text-primary"> Add New Student  ! </p>

            <form class="com-md-4 offset-4 mt-5" action="stu-add_action.php" method="POST">
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                
            </div>
            <button type="submit" class="btn btn-primary float-right"> Add </button>
        
        </form>

        <a href="home.php" class="btn btn-success"> Back </a>
        </section>
    </body>
</html>

<?php
    }
    else 
    {
        $_SESSION['msg'] = "You need to log in first !";
        header('location:log_in.php');
    }

?>