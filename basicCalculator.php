<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
//php -S localhost:4000
        <h1>Basic Calculator</h1>
        <hr>
        <form action="site.php" method="get">
        Number1: <input type="number" name="n1">
        <br>
        Number2: <input type="number" name="n2">
        <input type="submit">
        </form>
        <br>
        Answer: <?php echo $_GET["n1"] + $_GET["n2"]  ?>
</body>
</html>