<?php

  $json = @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=195935951.6cda97c.fd05fcab3a284895a578691440f0dbe7&count=9");
  if ($json) {
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $arr = json_decode($json, true);
    $arr = $arr['data'];
     if (count($arr)) {
      //dataの数があるだけループ
      echo "<ul class='instagram'>\n";
      foreach($arr as $v) {
        $Link = $v['link'];
        $imgSrc = $v['images']['standard_resolution']['url'];
        echo "<li><a href='{$Link}' target='_blank' ><img src='{$imgSrc}' /></a></li>";
      }
      echo "</ul>\n";
    }
  }
?>
