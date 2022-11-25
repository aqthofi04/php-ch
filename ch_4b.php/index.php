<?php

$siswa = [
    ["joni susanto", "XII TKR 2", "Pemalang"],
    ["intan ayu", "XII TB 1", "Brebes"],
    ["salma karima", "XI RPL 3", "Batang"]
];

$n = 1;
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <table border= 1 cellspacing="0" cellpadding="10">


        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
        </tr>

       <?php foreach($siswa as $sw) : ?>
        <tr>
            <td><?= $n++; ?></td>
            <td><?= $sw[0] ?></td>
            <td><?= $sw[1] ?></td>
            <td><?= $sw[2] ?></td>
        </tr>
       <?php endforeach; ?>
    </table>
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>