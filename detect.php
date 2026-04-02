<?php

function detectVideo($url){

if(strpos($url,"youtube") !== false || strpos($url,"youtu.be") !== false){

preg_match("/(youtu.be\/|v=)([^&]+)/",$url,$matches);

return "https://www.youtube.com/embed/".$matches[2];

}

if(strpos($url,"vimeo") !== false){

preg_match("/vimeo\.com\/(\d+)/",$url,$matches);

return "https://player.vimeo.com/video/".$matches[1];

}

return $url;

}

?>
