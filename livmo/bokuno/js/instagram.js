        $(document).ready(function() {
        var userFeed = new Instafeed({
            target: 'instafeed',
            get: 'user', //ユーザーから取得
            userId: '195935951', //ユーザーID(先ほど確認した'user_id')
            sortBy: 'most-recent',//最新記事から順に取得
            links: true , //画像リンク取得
            limit: 10, //取得する画像数を設定
            resolution: 'low_resolution', //画像サイズを設定
            template: '<li><span><a href="{{link}}" target="_blank"><img src="{{image}}"></a></span></li>',
            accessToken: '195935951.6cda97c.fd05fcab3a284895a578691440f0dbe7' //アクセストークン
        });
            userFeed.run();
        });
