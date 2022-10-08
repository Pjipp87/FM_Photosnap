<?php 
$pageTitle = "Features";
$page = "features";
require "../src/data.php";
require_once "../inc/Header.php" ?>


<?php foreach($featuresData as $element): ?>

<div class="container d-flex flex-column align-items-center">
    <?php echo $element[0]; ?>
    <h3><?php echo $element[1]; ?></h3>
    <p><?php echo $element[2]; ?></p>
</div>
<?php endforeach; ?>


<?php require_once "../inc/footer.php" ?>