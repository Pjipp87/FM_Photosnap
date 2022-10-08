<!DOCTYPE html>
<html lang="DE-de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link rel="stylesheet" href="../style/navigation.css">
    <link rel="stylesheet" href="../style/beta.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../src/font/DM_sans.css">

    <script src="../src/jQuery/jquery-3.6.1.js"></script>
    <script src="../src/bootstrap-5.2.2/dist/js/bootstrap.js"></script>
    <script src="../js/navigation.js"></script>

    <?php if($page === 'pricing'): ?>
    <script src="../js/pricing.js"></script>

    <?php endif; ?>

    <link rel="stylesheet" href="../style/<?php echo $page ?>.css">

    <title>Photosnap | <?php echo $pageTitle ?> </title>
</head>

<body>
    <?php require_once "Navigation.php" ?>
    <main>