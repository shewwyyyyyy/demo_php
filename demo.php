<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <?php  
        if(isset($_GET["tama"])){
    ?>
    <p style="background-color: blueviolet;color:bisque"><?php echo $_GET["tama"]?></p>
    <?php 
        }
    ?>

    <?php  
        if(isset($_GET["mali"])){
    ?>
    <p style="background-color: red;color:aquamarine"><?php echo $_GET["mali"] ?></p>
    <?php 
        }
    ?>


    <form action="output.php"  method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password">
        </div>
            <input type="submit" value="submit">

        
    </form>
</body>
</html>