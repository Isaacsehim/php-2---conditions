<?php
$dark_mode = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode</title>
    <style>
        .dark {
            color: white;
            background-color: black;
            border: 1px solid black;
        }

        .light {
            color: black;
            background-color: lightgrey;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="checkbox" id="dark_mode" name="dark_mode" <?php echo $dark_mode ? 'checked' : ''; ?>>
        <label for="dark_mode">Dark Mode</label>
        <div id="myElement" class="<?php echo $dark_mode ? "dark" : "light"; ?>">
            <p>On test ça vite vite !</p>
        </div>
    </form>
</body>
</html>