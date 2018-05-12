<?php
    $user_id = 'ktoshimi'; //ユーザーID
    $access_token = '195935951.6cda97c.fd05fcab3a284895a578691440f0dbe7'; //自分のアクセストークン
    $count = '6'; //表示したい数
    $url = 'https://api.instagram.com/v1/users/'.$user_id.'/media/recent/?access_token='.$access_token.'&count='.$count;
    $array = json_decode(file_get_contents($url), true);
    //echo var_dump($array);

    foreach($array['data'] as $data){
        $img = $data['images']['thumbnail'];
    ?>
    <li>
        <a href="<?php echo $data['link'] ?>" target="_blank">
            <img src="<?php echo $img['url']; ?>" alt="">
        </a>
    </li>
    <?php
    }
    ?>