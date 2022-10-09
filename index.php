<?php 
$pageTitle = "Home";
$page = "home";
require "./src/data.php";
require_once "./inc/Header.php";
require_once "./inc/res.php" ?>

<div class="container-fluid containerMain p-0">


    <div class="bg-black text-white container text-container_first">
        <div class="accent"></div>
        <h1 class="heading-home">Create and share your photo Stories.</h1>
        <p class="text-home_first">
            Photosnap is a platform for photographers and visual storytellers. We make it
            easy to share photos, tell stories and connect with others.
        </p>

        <a class="arrow_button text-white">GET AN INVITE<img class="white_arrow"
                src="./assets/shared/desktop/arrow.svg"></a>
    </div>
    <img class="img img-fluid w-100" src="./assets/home/mobile/create-and-share.jpg"></img>
</div>

<div class="container-fluid p-0">
    <img class="img-fluid w-100" src="./assets/home/mobile/beautiful-stories.jpg"></img>

    <div class="bg-white text-black container text-container">

        <h1 class="heading-home">Beautiful stories<br>every time</h1>
        <p class="text-home">
            We provide design templates to ensure your stories look terrific. Easily add
            photos, text, embed maps and media from other networks. Then share your story
            with everyone.
        </p>

        <a class="arrow_button">VIEW THE STORIES<img src="./assets/shared/desktop/arrow.svg"></a>


    </div>
</div>
<div class="container-fluid p-0">
    <img class="img-fluid w-100" src="./assets/home/mobile/designed-for-everyone.jpg"></img>

    <div class="bg-white text-black container-fluid text-container">

        <h1 class="heading-home">Designed for everyone</h1>
        <p class="text-home">
            Photosnap can help you create stories that resonate with your audience. Our
            tool is designed for photographers of all levels, brands, businesses you name it.
        </p>
        <a class="arrow_button"><span>READ STORY</span><img src="./assets/shared/desktop/arrow.svg"></a>

    </div>
</div>


<?php for($i=0; $i<3; $i++): ?>

<div class="container img_Container"
    style="background-image: url(<?php echo $storiesData[$i][0] ?>) ; background-size:cover; background-position: bottom;">
    <h1><?php echo $storiesData[$i][1] ?></h1>
    <p><?php echo $storiesData[$i][2] ?></p>
    <hr>
    <a class="arrow_button white_arrow">VIEW THE STORIES<img src="./assets/shared/desktop/arrow.svg"></a>
</div>

<?php endfor; ?>

<div class="container details_home">
    <div class="d-flex flex-column align-items-center">
        <img src="./assets/features/desktop/responsive.svg" width="72px" height="72px" alt="">
        <div>
            <h1>100% Responsive</h1>
            <p>No matter which the device you’re on, our site is fully responsive and stories
                look beautiful on any screen.</p>
        </div>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="./assets/features/desktop/no-limit.svg" width="72px" height="36px" alt="">
        <div>
            <h1>No Photo Upload Limit</h1>
            <p>Our tool has no limits on uploads or bandwidth. Freely upload in bulk and
                share all of your stories in one go.</p>
        </div>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="./assets/features/desktop/embed.svg" width="71px" height="72px" alt="">
        <div>
            <h1>Available to Embed</h1>
            <p>Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube videos,
                Google Maps, and more.</p>
        </div>
    </div>
</div>


<?php require_once "./inc/footer.php" ?>