<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sample1";

    $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if ($con)
            echo 'connected successfuly';
    $sql = "insert into students (student_name,course,card_no) values ('pogi','BSIT',2342)";
    $query=mysqli_query($con,$sql);
    if ($query)
        echo' good';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<script>
    //scroll effect
</script>
<body>
    <div class="container">
        <section class="one">
            <h1>Hello Friend</h1>
        </section>
        <section class="twwo">
            <h1>Hi Friend</h1>
        </section>
        <section class="three">
            <h1>My friend</h1>
        </section>
    </div>
</body>
</html>