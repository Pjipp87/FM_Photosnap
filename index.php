<?php 
$pageTitle = "Home";
$page = "home";
require "./src/data.php";
require_once "./inc/Header.php" ?>

<div class="container-fluid p-0">
    <img class="img-fluid" src="./assets/home/mobile/create-and-share.jpg"></img>

    <div class="bg-black text-white container-fluid text-container_first">
        <div class="accent"></div>
        <h1 class="heading-home">Create and share your photo Stories.</h1>
        <p class="text-home_first">
            Photosnap is a platform for photographers and visual storytellers. We make it
            easy to share photos, tell stories and connect with others.
        </p>

        <a class="arrow_button text-white">GET AN INVITE<img class="white_arrow"
                src="./assets/shared/desktop/arrow.svg"></a>


    </div>
</div>

<div class="container-fluid p-0">
    <img class="img-fluid" src="./assets/home/mobile/beautiful-stories.jpg"></img>

    <div class="bg-white text-black container-fluid text-container">

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
    <img class="img-fluid" src="./assets/home/mobile/designed-for-everyone.jpg"></img>

    <div class="bg-white text-black container-fluid text-container">

        <h1 class="heading-home">Designed for everyone</h1>
        <p class="text-home">
            Photosnap can help you create stories that resonate with your audience. Our
            tool is designed for photographers of all levels, brands, businesses you name it.
        </p>
        <a class="arrow_button"><span>READ STORY</span><img src="./assets/shared/desktop/arrow.svg"></a>

    </div>
</div>


<?php foreach($storiesData as $element): ?>

<div class="container-fluid img_Container" style="background-image: url(<?php echo $element[0] ?>) ;">
    <h1><?php echo $element[1] ?></h1>
    <p><?php echo $element[2] ?></p>
    <hr>
    <a class="arrow_button white_arrow">VIEW THE STORIES<img src="./assets/shared/desktop/arrow.svg"></a>
</div>

<?php endforeach; ?>


<?php require_once "./inc/footer.php" ?>