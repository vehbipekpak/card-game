<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Game</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/util.css">
    <link rel="stylesheet" href="assets/css/cardGame.css">
</head>
<body>
    
    <div class="containerCustom">
        <h1 class="fs-25 m-b-20 text-bold">İkizini Bul</h1>
        <ul class="gameField">
            <div class="completed bg-success text-white text-bold text-center" style="padding:15px 35px;border-radius:3px;align-self:center;"> 
                <span class="dis-block fs-20">OYUN TAMAMLANDI</span>
                <span class="dis-block fs-12">SÜRE: 14 DAKİKA</span>
            </div>
            <?php

            $gridCount = 3;
            $gridCount = $gridCount*2;
            $sonSayi = $gridCount*$gridCount;

            $percent = floor((100/($gridCount))-1.5); // 4
            $sayilar = [];

            while ( count($sayilar) < $sonSayi ) {
                $randomInt = rand(0,100);
                if (!in_array($randomInt, $sayilar)) {
                    array_push($sayilar, $randomInt);
                    array_push($sayilar, $randomInt);
                } else {
                    continue;
                }
            }

            shuffle($sayilar);

            ?>

            <?php for ($i=0; $i < count($sayilar); $i++): ?>
            <li class="cardd" number="<?php echo $sayilar[$i]; ?>" style="width:<?php echo $percent; ?>%">
                <div class="inner">
                    <div class="front"></div>
                    <div class="back">
                        <span><?php echo $sayilar[$i]; ?></span>
                    </div>
                </div>
            </li>
            <?php endfor ?>
        </ul>
    </div>

    <script src="assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/cardGame.js"></script>
</body>
</html>