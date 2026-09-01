<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../syousai.css">
    <link rel="stylesheet" href="./sizen.css">
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
    <?php include '../../../../common/include/db.php'; ?>
    <?php include '../../../../common/include/analytics.php'; ?>
    <?php include '../../../../common/include/css-js.php'; ?>
    <meta name="keywords" content="キーワード">
    <title>自然科学系図書館 - 神戸大学 図書館・ラーコモ紹介</title>
  </head>
  <body>
    <?php include '../../../../common/include/gn.php' ?>
    <div id="wrapper">
        <a href="../">
            <img src="../../common/syousai/roku2.svg" alt="roku2" id="campusName">
        </a>
        <img src="./taitoru.svg" alt="sizen" id="title">
   
        <div class="flex">
            <!-- 左のボタン -->
            <img src="../../common/syousai/sannkaku.svg" alt="prev" id="prev" class="prev">
            <!-- スライドの外枠 -->
            <div class="slide-wrapper">
                <!-- スライド（コンテンツ） -->
                <div id="slide" class="slide">
                    <div>
                        <img src="./1.jpeg" alt="1" class="photo">
                    </div>
                    <div>
                        <img src="./2.jpeg" alt="2" class="photo">
                    </div>
                    <div>
                        <img src="./3.jpeg" alt="3" class="photo">
                    </div>
                </div>
            </div>
            <!-- 右のボタン -->
            <img src="../../common/syousai/sannkaku.svg" alt="next" id="next" class="next">
        </div>
        <!-- インジケーター -->
        <ul class="indicator" id="indicator">
            <li class="list"></li>
            <li class="list"></li>
            <li class="list"></li>
        </ul>    

        <div class="star_div">
            <img src="../../common/syousai/hosi_insyoku.svg" alt="insyoku" class="star_drink">
            <img src="../../common/syousai/sigo.svg" alt="sigogenkin" class="noTalking">
            <img src="../../common/syousai/nasi.svg" alt="nasi" class="noBoard">

            <img src="./tosyokanhosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./tosyokanhitokoto.svg" alt="hitokoto" class="comment">


        <div class="flexx"> 
            <!-- 左のボタン -->
            <img src="../../common/syousai/sannkaku.svg" alt="prev" id="prevv" class="prevv">
            <!-- スライドの外枠 -->
            <div class="slide-wrapperr">
                <!-- スライド（コンテンツ） -->
                <div id="slidee" class="slidee">
                    <div>
                        <img src="./4.jpeg" alt="4" class="photo">
                    </div>
                    <div>
                        <img src="./5.jpeg" alt="5" class="photo">
                    </div>
                    <div>
                        <img src="./6.jpeg" alt="6" class="photo">
                    </div>
                    <div>
                        <img src="./7.jpeg" alt="7" class="photo">
                    </div>
                    <div>
                        <img src="./8.jpeg" alt="8" class="photo">
                    </div>
                    <div>
                        <img src="./9.jpeg" alt="9" class="photo">
                    </div>
                    <div>
                        <img src="./10.jpeg" alt="10" class="photo">
                    </div>
                    <div>
                        <img src="./11.jpeg" alt="11" class="photo">
                    </div>
                    <div>
                        <img src="./12.jpeg" alt="12" class="photo">
                    </div>
                    <div>
                        <img src="./13.jpeg" alt="13" class="photo">
                    </div>
                    <div>
                        <img src="./14.jpeg" alt="14" class="photo">
                    </div>
                    <div>
                        <img src="./15.jpeg" alt="15" class="photo">
                    </div>
                    <div>
                        <img src="./16.jpeg" alt="16" class="photo">
                    </div>
                </div>
            </div>
            <!-- 右のボタン -->
            <img src="../../common/syousai/sannkaku.svg" alt="next" id="nextt" class="nextt">
        </div>
        <!-- インジケーター -->
        <ul class="indicatorr" id="indicatorr">
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
            <li class="listt"></li>
        </ul>
        
        <!--ラーコモ-->
        <img src="./rakomo.svg" alt="rakomo" class="subtitle" id="rakomo">
        <div class="star_div">
            <img src="../../common/syousai/hosi_insyoku.svg" alt="insyoku" class="star_drink">

            <img src="./rakomohosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./rakomohitokoto.svg" alt="hitokoto" class="comment">

        <!--サイレントスペース-->
        <img src="./silentspace.svg" alt="silent" class="subtitle" id="silent">
        <div class="star_div">
            <img src="../../common/syousai/hosi_insyoku.svg" alt="insyoku" class="star_drink">
            <img src="../../common/syousai/sigo.svg" alt="sigogenkin" class="noTalking">
            <img src="../../common/syousai/nasi.svg" alt="nasi" class="noBoard">

            <img src="./silenthosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./silenthitokoto.svg" alt="hitokoto" class="comment">

        <!--オンラインポッド-->
        <img src="./onlinepod.svg" alt="online" class="subtitle" id="online">
        <img src="./onlinehitokoto.svg" alt="hitokoto" class="comment">

        <!--イノベーションスタジオ-->
        <img src="./innovationstadio.svg" alt="innovation" class="subtitle" id="innovation">
        <div class="star_div">
            <img src="../../common/syousai/hosi_insyoku.svg" alt="insyoku" class="star_drink">
            <img src="../../common/syousai/nasi.svg" alt="nasi" class="noBoard">

            <img src="./innovhosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./innovhitokoto.svg" alt="hitokoto" class="comment">

        <!--コラボレーションルーム-->
        <img src="./collabroom.svg" alt="collaboration" class="subtitle" id="collaboration">
        <img src="./collabhitokoto.svg" alt="hitokoto" class="comment">

        <!--ホワイエ-->
        <img src="./howaie.svg" alt="howaie" class="subtitle" id="howaie">
        <div class="star_div">
            <img src="../../common/syousai/hosi_insyoku.svg" alt="insyoku" class="star_drink">
            <img src="../../common/syousai/nasi.svg" alt="nasi" class="noBoard">

            <img src="./howaiehosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./howaiehitokoto.svg" alt="hitokoto" class="comment">


        <img src="../../common/syousai/tensen.svg" alt="tensen" class="brokenLine">
        <img src="../../common/syousai/kaikanjikan.svg" alt="kaikan" class="businessHours_title">
        <div class="information">
            <img src="./eigyoujikan.svg" alt="eigyoujikan" class="businessHours">
            <a href="https://lib.kobe-u.ac.jp/libraries/list/shizen/">
                <img src="./kousikisaito.svg" alt="kousikisaito" class="officialSite">
            </a>
            <a href="https://lib.kobe-u.ac.jp/libraries/list/shizen/floormap/">
                <img src="./furoamap.svg" alt="furoamappu" class="floorMap">
            </a>
        </div>
    </div>
    <?php include '../../../../common/include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
    <script src="../../syousai.js"></script>
  </body>
</html>