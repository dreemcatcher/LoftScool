<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<center>
<h1>Домашние работы LoftSchool</h1>

<?php for($i=1; $i<11; $i++){?>
    <a href="apps\views\homeworks\<?php echo $i?>\index.php"><?php echo $i?></a><br>
    <?php } ?>

</center>
</body>
</html>