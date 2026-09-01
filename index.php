<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./top.css">
    <?php include '../../common/include/db.php'; ?>
    <?php include '../../common/include/analytics.php'; ?>
    <?php include '../../common/include/css-js.php'; ?>
    <meta name="keywords" content="キーワード">
    <title>神戸大学 図書館・ラーコモ紹介</title>
  </head>
  <body>
    <?php include '../../common/include/gn.php' ?>
    <div id="wrapper">
    <img src="./top/taitoru.svg" alt="title" id="title">
    <p id="setumei">空きコマに勉強や友達と
        <br>集まる場所でお困りの神大生の
        <br>皆さんに、図書館・ラーコモを
        <br>紹介します！
    </p>
    <p id="kome">※授業に使われていない空き教室も
        <br>あるので探してみてね。
    </p>

    <div id="allButton">
        <div class="flex">
            <a href="./roku1/">
                <img src="./top/roku1.svg" alt="roku1" class="button">
            </a>
            <a href="./roku2/">
                <img src="./top/roku2.svg" alt="roku2" class="button">
            </a>
        </div>
        <div class="flex">
            <a href="./turu1/">
                <img src="./top/turu1.svg" alt="turu1" class="button">
            </a>
            <a href="./turu2/">
                <img src="./top/turu2.svg" alt="turu2" class="button">
            </a>
        </div>
        <div class="flex">
            <a href="./kusunoki/">
                <img src="./top/kusunoki.svg" alt="kusunoki" class="button">
            </a>
            <a href="./myoudani/">
                <img src="./top/myoudani.svg" alt="myoudani" class="button">
            </a>
        </div>
        <div class="flex">
            <a href="./fukae/">
                <img src="./top/fukae.svg" alt="fukae" class="button">
            </a>
        </div>
    </div>
    <p id="attention">※2023年度現在の情報です。</p>
    </div>
    <?php include '../../common/include/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
  </body>
</html>