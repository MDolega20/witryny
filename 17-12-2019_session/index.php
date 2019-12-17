<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    <main>
        <?php var_dump($_SESSION); ?>
    </main>
</body>
</html>