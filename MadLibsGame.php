<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- php -S localhost:4000 <- start the php server where your file is located in cmd -->
        <h1>Mad Libs Game</h1>
        <hr>
        <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        A Flower(plural): <input type="text" name="noun"> <br>
        Verb: <input type="text" name="verb"> <br>
        <input type="submit">
        </form>

        <br><br>
        <?php 
            $color = $_GET["color"];//retrieves the color from the form
            $noun = $_GET["noun"];
            $verb = $_GET["verb"];
            echo "Roses are ${color} </br>";
            echo "${noun} aren't blue </br>";
            echo "I can't ${verb} </br>";
            echo "This is something new :()</br>";
        ?>
</body>
</html>