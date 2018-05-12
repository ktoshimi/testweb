<?php
//POSTリクエストの場合のみ受付
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //アクセストークン
    $access_token = "195935951.6cda97c.fd05fcab3a284895a578691440f0dbe7"; //取得したアクセストークンを設置
    //JSONデータを取得して出力
    echo @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token={$access_token}");
    //終了
    exit;
}
?>

