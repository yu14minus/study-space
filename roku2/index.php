<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../campus.css">
    <link rel="stylesheet" href="./roku2.css">
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
    <?php include '../../../common/include/db.php'; ?>
    <?php include '../../../common/include/analytics.php'; ?>
    <?php include '../../../common/include/css-js.php'; ?>
    <meta name="keywords" content="キーワード">
    <title>六甲台第2キャンパス - 神戸大学 図書館・ラーコモ紹介</title>
  </head>
  <body>
    <?php include '../../../common/include/gn.php' ?>
    <div id="wrapper">
        
    <img src="./roku2.svg" alt="roku2" id="campusname">
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

        <img src="../common/map/pin1.svg" alt="pin1" class="pin" id="jouhou_pin" onclick="showBalloon_jouhou()">
        <div class="fukidasi" id="jouhou_fukidasi">
            <img src="./jouhou.svg" alt="jouhou" class="fukidasi_haikei">
            <img src="./jouhou/1.jpeg" alt="jouhou" class="fukidasi_image" id="jouhou_image">
            <a href="./jouhou/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai" id="jouhou_syousai">
            </a>
        </div>

        <img src="../common/map/pin3.svg" alt="pin3" class="pin" id="sizen_pin" onclick="showBalloon_sizen()">
        <div class="fukidasi" id="sizen_fukidasi">
            <img src="./sizen.svg" alt="sizen" class="fukidasi_haikei">
            <img src="./sizen/1.jpeg" alt="sizen" class="fukidasi_image" id="sizen_image1">
            <img src="./sizen/4.jpeg" alt="sizen" class="fukidasi_image" id="sizen_image2">
            <a href="./sizen/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai syousai2" id="sizen_syousai">
            </a>
        </div>

        <img src="../common/map/pin1.svg" alt="pin1" class="pin" id="rigaku_pin" onclick="showBalloon_rigaku()">
        <div class="fukidasi" id="rigaku_fukidasi">
            <img src="./rigaku.svg" alt="rigaku" class="fukidasi_haikei">
            <img src="./rigaku/1.jpeg" alt="rigaku" class="fukidasi_image" id="rigaku_image">
            <a href="./rigaku/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai" id="rigaku_syousai">
            </a>
        </div>

        <img src="../common/map/pin3.svg" alt="pin3" class="pin" id="jinbun_pin" onclick="showBalloon_jinbun()">
        <div class="fukidasi" id="jinbun_fukidasi">
            <img src="./jinbun.svg" alt="jinbun" class="fukidasi_haikei">
            <img src="./jinbun/1.jpeg" alt="jinbun" class="fukidasi_image">
            <img src="./jinbun/4.jpeg" alt="jinbun" class="fukidasi_image" id="jinbun_image2">
            <a href="./jinbun/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai syousai2" id="jinbun_syousai">
            </a>
        </div>

        <img src="../common/map/pin1.svg" alt="pin1" class="pin" id="nougaku_pin" onclick="showBalloon_nougaku()">
        <div class="fukidasi" id="nougaku_fukidasi">
            <img src="./nougaku.svg" alt="nougaku" class="fukidasi_haikei">
            <img src="./nougaku/1.jpeg" alt="nougaku" class="fukidasi_image">
            <a href="./nougaku/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai">
            </a>
        </div>

        <img src="../common/map/pin1.svg" alt="pin1" class="pin" id="kougaku_pin" onclick="showBalloon_kougaku()">
        <div class="fukidasi" id="kougaku_fukidasi">
            <img src="./kougaku.svg" alt="kougaku" class="fukidasi_haikei">
            <img src="./kougaku/1.jpg" alt="kougaku" class="fukidasi_image" id="kougaku_image">
            <a href="./kougaku/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai" id="kougaku_syousai">
            </a>
        </div>

        <img src="../common/map/pin1.svg" alt="pin1" class="pin" id="global_pin" onclick="showBalloon_global()">
        <div class="fukidasi" id="global_fukidasi">
            <img src="./global.svg" alt="global" class="fukidasi_haikei">
            <img src="./global/1.jpeg" alt="global" class="fukidasi_image" id="global_image">
            <a href="./global/">
                <img src="../common/map/syousaikochira.svg" alt="syousai" class="fukidasi_syousai" id="global_syousai">
            </a>
        </div>

    </div>
    <?php include '../../../common/include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
    <script src="./roku2.js"></script>
  </body>
</html>