<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="index.php" method="">
    <p>Your number : <input type="text" name="number">  </p>
    </form>
    <?php 
        $numb = (int)$_POST['number'];
        echo $numb;
    ?>
</body>
</html>

