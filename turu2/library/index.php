<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../syousai.css">
    <link rel="stylesheet" href="./library.css">
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
    <?php include '../../../../common/include/db.php'; ?>
    <?php include '../../../../common/include/analytics.php'; ?>
    <?php include '../../../../common/include/css-js.php'; ?>
    <meta name="keywords" content="キーワード">
    <title>人間科学図書館 - 神戸大学 図書館・ラーコモ紹介</title>
  </head>
  <body>
    <?php include '../../../../common/include/gn.php' ?>
    <div id="wrapper">
        <a href="../">
            <img src="../../common/syousai/turu2.svg" alt="turu2" id="campusName">
        </a>
        <img src="./taitoru.svg" alt="library" id="title">
   
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
            <img src="../../common/syousai/insyoku.svg" alt="insyokukinsi" class="noFood">
            <img src="../../common/syousai/sigo.svg" alt="sigogenkin" class="noTalking">
            <img src="../../common/syousai/nasi.svg" alt="nasi" class="noBoard">
            <img src="./hosi.svg" alt="hosi" class="star">
        </div>
        <img src="../../common/syousai/konsento.svg" alt="attention" class="attention">
        <img src="./hitokoto.svg" alt="hitokoto" class="comment">
        <img src="../../common/syousai/tensen.svg" alt="tensen" class="brokenLine">
        <img src="../../common/syousai/kaikanjikan.svg" alt="kaikan" class="businessHours_title">
        <div class="information">
            <img src="./eigyoujikan.svg" alt="eigyoujikan" class="businessHours">
            <a href="https://lib.kobe-u.ac.jp/libraries/list/ningen/">
                <img src="./kousikisaito" alt="kousikisaito" class="officialSite">
            </a>
            <a href="https://lib.kobe-u.ac.jp/libraries/list/ningen/floormap/">
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