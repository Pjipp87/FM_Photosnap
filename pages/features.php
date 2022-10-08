<?php 
$pageTitle = "Features";
$page = "features";
require "../src/data.php";
require_once "../inc/Header.php" ?>

<div class="container-fluid w-100 p-0 m-0">
    <img class="img-fluid w-100" src="../assets/features/mobile/hero.jpg" alt="">
    <div class="featureTopContainer">
        <div class="accent"></div>
        <h1>Features</h1>
        <p>We make sure all of our features are designed to be loved by every aspiring and even
            professional photograpers who wanted to share their stories.</p>
    </div>
</div>


<div class="featureContainer">
    <?php foreach($featuresData as $element): ?>
    <div class="container d-flex flex-column align-items-center featureContainerDetails">
        <?php echo $element[0]; ?>
        <h3><?php echo $element[1]; ?></h3>
        <p><?php echo $element[2]; ?></p>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once "../inc/beta.php" ?>



<?php require_once "../inc/footer.php" ?>