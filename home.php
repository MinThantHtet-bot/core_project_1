<?php

    session_start();

    if(isset($_SESSION['auth']))
    {
        include('conf.php');

        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn,$sql);


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
            <p class="display-4 text-primary"> Student List ! </p>

            <?php  if(isset($_SESSION['msg']))
            {
            ?>

            <div class="alert alert-info" role="alert">
                <?php  echo $_SESSION['msg'] ?>
            </div>         
            
            <?php 
            
            }
            ?>
            <div class="row mt-5">
            <?php 
                while($row = $result->fetch_assoc())
                {
            ?>
            <div class="card mr-4 mb-3" style="width: 18rem;">
                <img src="images/<?php echo $row['img'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-5">
                        <?php echo $row['name'] ?>
                    </h5>
                    <a href="std-edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="stu-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger float-right">Delete</a>
                </div>
            </div>
            <?php 
                }
            ?>
            </div>

            <a href="stu-add.php"class="btn btn-success float-right mt-4"> Add New</a>

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
