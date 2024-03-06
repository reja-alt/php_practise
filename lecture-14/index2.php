<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $score = 56; ?> 
    <?php if($score > 80): ?>
        <strong>A+</strong>
    <?php elseif($score > 70): ?>
        <strong>A</strong>
    <?php elseif($score > 60): ?>
        <strong>B+</strong>
    <?php elseif($score > 50): ?>
        <strong style="color: red">C+</strong>
    <?php elseif($score > 40): ?>
        <strong>D</strong>
    <?php else: ?>
        <strong>F</strong>
        <?php endif ?>
</body>
</html>