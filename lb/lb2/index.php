<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
    <p>Your number : <input type="text" name="text">  </p>
    </form>
    <?php 
         $numb = (string)$_POST['text'];
         echo strtoupper ($numb);
    ?>
</body>
</html>

