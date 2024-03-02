<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo 'paragraph' ?>
        <?= 'shorhand' ?>
    </h1>
    <?php
        $x = 10;
        $y = 5;

        echo '<p>' . $x . $y . '</p>';
    ?>
</body>
</html>