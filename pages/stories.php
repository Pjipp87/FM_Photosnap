<?php 
$pageTitle = "Stories";
$page = "stories";
require "../src/data.php";
require_once "../inc/Header.php" ?>
<div class="container p-0 m-0">
    <img class="img-fluid w-100" src="../assets/stories/mobile/moon-of-appalacia.jpg" alt="">
    <div class="storiesTextContainer">
        <h3>Last month's featured story</h3>
        <h2>Hazy full moon of Appalachia</h2>
        <h5><span>March 2nd 2020</span>by John Appleseed</h5>


        <p>The dissected plateau area, while not actually made up of geological mountains,
            is popularly called "mountains," especially in eastern Kentucky and West Virginia,
            and while the ridges are not high, the terrain is extremely rugged.</p>
        <a class="arrow_button text-white">READ THE STORY<img class="white_arrow"
                src="../assets/shared/desktop/arrow.svg"></a>
    </div>
</div>

<?php foreach($storiesData as $element): ?>



<div class="container-fluid storyContainer"
    style="background-image: url(<?php echo ".".$element[0] ?>) ; background-size:cover; background-position: bottom;">
    <h3><?php echo $element[3] ?></h3>
    <h1><?php echo $element[1] ?></h1>
    <h3><?php echo $element[2] ?></h3>
    <hr>
    <a class="arrow_button white_arrow">VIEW THE STORIES<img src="../assets/shared/desktop/arrow.svg"></a>
</div>

<?php endforeach; ?>
<?php require_once "../inc/footer.php" ?>