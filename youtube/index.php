<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
 $output = exec("youtube-dl  -g  https://www.youtube.com/watch?v=Rbhfxq6iHKo ");
 
 $youtubeId = json_decode($output);
 echo $output;

 













