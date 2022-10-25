<!DOCTYPE html>
<html>

<head>
    <title>DAMP</title>
    <link rel='stylesheet' href='style.css'>
</head>

<body>

    <h1 class=hometitle>DAMP</h1>
    <h2 class=subtitle>Docker Apache MariaDB PHP Stack</h2>

    <div class=testlinks>
    <h2>Test Links</h2>
    <li><a href='phpinfo.php'>PHP info</a>
    <li><a href='testdb.php'>Test MariaDB connection</a>
    <li><a href='http://localhost:81/'>phpMyAdmin</a>
    </div>

    <?php
        $testfile = fopen("../test.txt", "r") or die("Unable to open file!");
        echo fread($testfile,filesize("../test.txt"));
    ?>

</body>

</html>