<?php

$res =0;
if(!isset($_GET['r']))
{
echo "<script language=\"JavaScript\">
<!--
document.location=\"$PHP_SELF?r=1&width=\"+screen.width+\"&Height=\"+screen.height;
//-->
</script>";
}
else {
// Code to be displayed if resolutoin is detected
     if(isset($_GET['width']) && isset($_GET['Height'])) {
        if($_GET['width']>= 1440){
            $res= "desktop";
        } else if($res= $_GET['width'] < 1440 && $res= $_GET['width'] >=768){
            $res= "tablet";
        } else if($res= $_GET['width'] < 768){
            $res= "mobile";
        }
        
     }
     else {
               // Resolution not detected
     }
}
?>