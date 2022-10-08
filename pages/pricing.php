<?php 
$pageTitle = "Pricing";
$page = "pricing";
require_once "../inc/Header.php" ?>

<div class="container-fluid p-0 m-0">
    <img class="img-fluid w-100" src="../assets/pricing/mobile/hero.jpg" alt="">
    <div class="containerPricingTop">
        <div class="accent"></div>
        <h1>Pricing</h1>
        <p>Create a your stories, Photosnap is a platform for photographers and visual storytellers.
            It’s the simple way to create and share your photos.</p>
    </div>
</div>

<div class="ContainerPricingSwitch">

    <div class="form-check form-switch d-flex ">
        <label class="form-check-label active" for="flexSwitchCheckDefault" id="monthly">Monthly</label>
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault" id="yearly">Yearly</label>
    </div>

</div>

<?php require_once "../inc/footer.php" ?>