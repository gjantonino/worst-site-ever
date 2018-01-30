<?php

$files = glob('bw_thumbs/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
  {
      unlink($file);
      echo nl2br("{$file} delete success");
  }
    
}

$files = glob('color_thumbs/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
  {
      unlink($file);
      echo nl2br("{$file} delete success");
  }
}
    echo "<a href='index.php'> Back to main </a>";
?>
