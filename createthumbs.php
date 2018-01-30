
<?php

    
    function createThumbnails($fullsize_dir, $thumbnails_dir)

    {
        $fullsizepics  = scandir($fullsize_dir);
        $thumbnails_cache = scandir($thumbnails_dir);

        $missingthumbs = array_diff($fullsizepics,$thumbnails_cache);

        /*print_r($fullsizepics);
        echo "<br>";
        print_r($thumbnails_cache);
        echo "<br>";
        print_r($missingthumbs);
        echo "<br>";*/


        foreach ($missingthumbs as $pic)
            {

            $img="{$fullsize_dir}{$pic}";

            list ($width_orig, $height_orig) = getimagesize($img);

            $ratio = $width_orig / $height_orig;

            if ($height_orig > $width_orig) //If para detectar si la imagen es vertical.
            {
                $dst_height = 560;
                $dst_width = $dst_height * $ratio;

            }
            else
            {
                $dst_width = 850;
                $dst_height = $dst_width / $ratio;
            }


            $im = imagecreatetruecolor($dst_width,$dst_height);
            $image = imagecreatefromjpeg($img);

            imagecopyresampled($im, $image, 0, 0, 0, 0, $dst_width, $dst_height, $width_orig, $height_orig);

            imagejpeg($im,$thumbnails_dir . $pic);

            imagedestroy($im);

            }
    }

?>