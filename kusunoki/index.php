<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../campus.css">
    <link rel="stylesheet" href="./kusunoki.css">
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
    <?php include '../../../common/include/db.php'; ?>
    <?php include '../../../common/include/analytics.php'; ?>
    <?php include '../../../common/include/css-js.php'; ?>
    <meta name="keywords" content="キーワード">
    <title>楠キャンパス - 神戸大学 図書館・ラーコモ紹介</title>
  </head>
  <body>
    <?php include '../../../common/include/gn.php' ?>
    <div id="wrapper">
    <img src="./kusunoki.svg" alt="" id="campusname">
    <a href="../">
        <img src="../common/map/modoru.svg" alt="return" id="return">
    </a>
    <div id="compassAndHanrei">
        <img src="../common/map/houi.svg" alt="compass" id="compass">
        <div id="hanrei">
            <p id="hanrei_title">凡例</p>
            <div class="pinAndSetumei">
                <img src="../common/map/pin1.svg" alt="pin1" class="hanrei_pin">
                <p class="hanrei_setumei">：ラーニングコモンズ</p>
            </div>
            <div class="pinAndSetumei">
                <img src="../common/map/pin2.svg" alt="pin2" class="hanrei_pin">
                <p class="hanrei_setumei">：図書館</p>
            </div>
            <div class="pinAndSetumei">
                <img src="../common/map/pin3.svg" alt="pin3" class="hanrei_pin">
                <p class="hanrei_setumei">：図書館・ラーニングコモンズ 併設</p>
            </div>
            <p class="hanrei_setumei" id="hanrei_tukaikata">ピンにカーソルを合わせるか、ピンをタップしてみよう！</p>
        </div>
    </div>
    <div id="mapAndPin">
        <img src="./map.svg" alt="map" id="map">

        <img src="../common/map/pin2.svg" alt="pin2" class="pin" id="tosyokan_pin" onclick="showBalloon_tosyokan()">
        <div class="fukidasi" id="tosyokan_fukidasi">
            <img src="./tosyokan.svg" alt="tosyokan" class="fukidasi_haikei">
            <img src="./tosyokan/1.jpeg" alt="tosyokan" class="fukidasi_image">
            <a href="./tosyokan/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai">
            </a>
        </div>

    </div>
    <?php include '../../../common/include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
    <script src="./kusunoki.js"></script>
  </body>
</html>