<?php 

include "header.php";
?>



<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #FFFF00">
    <div class="container mx-auto" style="width: 40%; margin-top: 5%; margin-bottom: 5%; background-color: rgba(0,128,0,0.3);padding: 20px;border-radius: 5px ">
        <form action="data.php" method="post" enctype="multipart/form-data">
            <input class="form-control" type="text" name="fname" placeholder="First Name"><br>
            <input class="form-control" type="text" name="lname" placeholder="Last Name"><br>
            <input class="form-control" type="date" name="date"><br>
            <input class="form-control" type="text" name="nation" placeholder="Nationality"><br>
            <input class="form-control" type="email" name="email" placeholder="Email"><br>
            <input class="form-control" type="text" name="phone" placeholder="Phone"><br>
            <input class="form-control" type="text" name="prof" placeholder="Profession"><br>
            <input class="form-control" type="text" name="exp" placeholder="Experience"><br>
            <input type="file" name="img" id="img"><br><br>
            <input type="submit" name="submit" value="Submit" class="btn btn-success" style="width: 100%">
        </form>
    </div>
</body>
</html>

<?php 
include "footer.php";
?>