<?php
// $show = true;
$show = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <style>
        .bloc {
            text-align: center;
        }
        #bloc {
            background-color: green;
            border-radius: 5rem;
        }
    </style>
</head>
<body>
<div class="bloc">
    <?php if ($show): ?>
        <div id="bloc">
            <p>bloc visible</p>
        </div>
    <?php else: ?>
        <p>bloc non visible</p>
    <?php endif; ?>
</div>
</body>
</html>
