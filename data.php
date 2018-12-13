<?php

    include "header.php";

    if(isset($_POST['submit'])){
        $dir = "images/";
        $file = $dir . basename($_FILES["img"]['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $file);
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['nation']) && !empty($_POST['phone']) && !empty($_POST['prof']) && !empty($_POST['exp'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $date = $_POST['date'];
            $email = $_POST['email'];
            $nation = $_POST['nation'];
            $phone = $_POST['phone'];
            $prof = $_POST['prof'];
            $exp = $_POST['exp'];

        }else{
            echo "<div class='alert alert-danger'> All fields required!</div>";
            exit;
        }
    }

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
<body style="background-color: aqua">

    <div class="container mx-auto text-center" style="width: 40%; margin-top: 5%; margin-bottom: 5%; background-color: rgba(0,0,255,0.3); padding: 20px; border-radius: 5px">
        <img style="width:150px; height:150px;border-radius: 50%;" src="<?=$file?>" alt="img">
        <p>Your First Name: <?= $fname ?></p>
        <p>Your Last Name: <?= $lname ?></p>
        <p>Your Birth Day: <?= $date ?></p>
        <p>Your Nationality: <?= $nation ?></p>
        <p>Your Email: <?= $email ?></p>
        <p>Your Phone number: <?= $phone ?></p>
        <p>Your Profession: <?= $prof ?></p>
        <p>Your Work experience: <?= $exp ?></p>



    </div>

</body>
</html>

<?php 
    include "footer.php";
?>