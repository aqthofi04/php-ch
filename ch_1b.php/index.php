<html>
    <head>
        <title>PHP test<title>
</head>
<body>
    <?php

    $nilai=84;

    if ($nilai > 89) {
        $ket ="Sangat Baik";
    } else if ($nilai > 79) {
        $ket ="Baik";
    } else if ($nilai > 69) {
        $ket ="Cukup";
    } else {
        $ket ="Kurang";
    }

echo ("Nilai anda" .$nilai. "Keterangan" .$ket);

?>

 <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
</body>
</html>