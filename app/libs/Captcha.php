<?php
namespace Libs\Captcha;

class Captcha {

    public function dumpCaptcha($uniqid)
    {   
        $img = imagecreatefrompng("images/logoDemo.png");
        $white = imagecolorallocate($img, 255, 255, 255);

        $size = 24; $x = 5; $y = 30; $angle = 0; $quality = 100;
        $color = imagecolorallocate($img, 255, 255, 255);
        $font = "C:\Windows\Fonts\Arial.ttf"; // ! CHANGE THIS TO YOUR OWN !
        // imagettftext($img, 24, 5, 5, 55, $white, $font, $uniqid);
        $txt = "#".$uniqid."ps";
        $font_size = 35;
        $font_angle = 0;
        $width = 300;
        $height = 150;
        $text_size = imagettfbbox($font_size, $font_angle, $font, $txt);
        $text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
        $text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);

        $centerX = CEIL(($width - $text_width) / 2);
        $centerX = $centerX<0 ? 0 : $centerX;
        $centerY = CEIL(($height - $text_height) / 2);
        $centerY = $centerY<0 ? 0 : $centerY;
        imagettftext($img, $font_size, $font_angle, $centerX, $centerY, $white, $font, $txt);
        imagepng($img, "images/applicationImages/UniqueCode_".$txt.".png");
        // if(imagepng($img, "images/applicationImages/UniqueCode_".$txt.".png")){
        // // if(imagettftext($img, $font_size, $font_angle, $centerX, $centerY, $white, $font, $txt)){
        //     echo "image created";
        // }
        // else {
        //     echo "not created";
        // }

        // exit;
        imagedestroy($img); // OPTIONAL
        return "UniqueCode_".$txt.".png";
    }

}
?>