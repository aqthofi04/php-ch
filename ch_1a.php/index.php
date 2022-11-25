<html>
    <head>
        <title>PHP test</title>
</head>
<body>
    <?php

    $mrek_motor ="Honda Supra 125 2015";

    if ($mrek_motor =="Yamaha mio 2019") {
        $harga =16000000;
    } else if ($mrek_motor =="Yamaha Jupiter MX 2014") {
        $harga =11000000;
    } else if ($mrek_motor =="Honda Vario125cc 2020") {
        $harga =18000000;
    } else if ($mrek_motor =="Honda Supra 125 2015") {
        $harga =10000000;
    } else if ($mrek_motor =="Honda PCX 150cc 2018") {
        $harga =23000000;
    } else {
        $harga= "kosong";
    }

    echo ("harga motor". $mrek_motor. "adalah" .$harga);

    ?>

    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>
</html>