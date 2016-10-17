<?php

$height = ['johh'=>178,'rebert'=>189,'joly'=>186];
print_r($height);
echo '<hr>';
//echo $height['johh'];

foreach ($height as $key => $value) {
    echo $key.' : '.$value.'<br>';
}
