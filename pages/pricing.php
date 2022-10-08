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

<div class="containerOffer">
    <div class="ContainerPricingSwitch">

        <div class="form-check form-switch d-flex ">
            <label class="form-check-label active" for="flexSwitchCheckDefault" id="monthly">Monthly</label>
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault" id="yearly">Yearly</label>
        </div>

    </div>

    <div class="containerPricing">
        <h1>Basic</h1>
        <p>Includes basic usage of our platform. Recommended for new and aspiring photographers.</p>
        <h2 id="priceBasic"></h2>
        <h5 class="time"></h5>
        <a href="#">Pick Plan</a>
    </div>
    <div class="containerPricing">
        <div class="accent"></div>
        <h1>Basic</h1>
        <p>More advanced features available. Recommended for photography veterans and professionals.</p>
        <h2 id="pricePro"></h2>
        <h5 class="time"></h5>
        <a href="#">Pick Plan</a>
    </div>
    <div class="containerPricing">
        <h1>Basic</h1>
        <p>Additional features available such as more detailed metrics. Recommended for business owners.</p>
        <h2 id="priceBusiness"></h2>
        <h5 class="time"></h5>
        <a href="#">Pick Plan</a>
    </div>
</div>

<h1>Tabelle</h1>


<?php require "../inc/beta.php"; ?>
<?php require_once "../inc/footer.php" ?>