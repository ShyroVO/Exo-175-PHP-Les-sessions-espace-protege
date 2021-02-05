<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="online.php" method="get">
        <label>
            <input type="text" placeholder="Login" name="login" required>
            <input type="password" placeholder="Password" name="password" required>
        </label>
        <input type="submit" value="Submit">
    </form>
    <div>
        <?php if (isset($_GET['error'])){
            echo $_GET['error'];
        } ?>
    </div>
</body>

</html>

