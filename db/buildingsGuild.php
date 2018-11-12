<?php

##
if ($gforum == 1) { $gforumc = 100; $gmaxmn = 6;
} elseif ($gforum == 2) { $gforumc = 350; $gmaxmn = 9;
} elseif ($gforum == 3) { $gforumc = 800; $gmaxmn = 12;
} elseif ($gforum == 4) { $gforumc = 1750; $gmaxmn = 15;
} elseif ($gforum == 5) { $gforumc = 4600; $gmaxmn = 18;
} elseif ($gforum == 6) { $gforumc = 9905; $gmaxmn = 21;
} elseif ($gforum == 7) { $gforumc = 22370; $gmaxmn = 24;
} elseif ($gforum == 8) { $gforumc = 51335; $gmaxmn = 27;
} elseif ($gforum == 9) { $gforumc = 122205; $gmaxmn = 30;
} elseif ($gforum == 10) { $gforumc = 260300; $gmaxmn = 33;
} elseif ($gforum == 11) { $gforumc = 637500; $gmaxmn = 36;
} elseif ($gforum == 12) { $gforumc = 1340355; $gmaxmn = 39;
} elseif ($gforum == 13) { $gforumc = 2865830; $gmaxmn = 42;
} elseif ($gforum == 14) { $gforumc = 6000000; $gmaxmn = 45;
} elseif ($gforum >= 15) { $gforumc = 15000000; $gmaxmn = ($gforum+1)*3;
}

if ($gbank == 1) { $gbankc = 1000; $gcap = 4;
} elseif ($gbank == 2) { $gbankc = 3500; $gcap = 6;
} elseif ($gbank == 3) { $gbankc = 8000; $gcap = 8;
} elseif ($gbank == 4) { $gbankc = 17500; $gcap = 10;
} elseif ($gbank == 5) { $gbankc = 46000; $gcap = 12;
} elseif ($gbank == 6) { $gbankc = 99050; $gcap = 14;
} elseif ($gbank == 7) { $gbankc = 223700; $gcap = 16;
} elseif ($gbank == 8) { $gbankc = 513350; $gcap = 18;
} elseif ($gbank == 9) { $gbankc = 1222050; $gcap = 20;
} elseif ($gbank == 10) { $gbankc = 2603000; $gcap = 22;
} elseif ($gbank == 11) { $gbankc = 6375000; $gcap = 24;
} elseif ($gbank == 12) { $gbankc = 13403550; $gcap = 26;
} elseif ($gbank == 13) { $gbankc = 28658300; $gcap = 28;
} elseif ($gbank == 14) { $gbankc = 60000000; $gcap = 30;
} elseif ($gbank >= 15) { $gbankc = 150000000; $gcap = 32+(2*($gbank-15));
}

if ($gbath == 1) { $gbathc = 80; $gmaxl = 1.1;
} elseif ($gbath == 2) { $gbathc = 160; $gmaxl = 1.2;
} elseif ($gbath == 3) { $gbathc = 320; $gmaxl = 1.3;
} elseif ($gbath == 4) { $gbathc = 640; $gmaxl = 1.4;
} elseif ($gbath == 5) { $gbathc = 1280; $gmaxl = 1.5;
} elseif ($gbath == 6) { $gbathc = 2560; $gmaxl = 1.6;
} elseif ($gbath == 7) { $gbathc = 5120; $gmaxl = 1.7;
} elseif ($gbath == 8) { $gbathc = 10240; $gmaxl = 1.8;
} elseif ($gbath == 9) { $gbathc = 20480; $gmaxl = 1.9;
} elseif ($gbath == 10) { $gbathc = 40960; $gmaxl = 2.0;
} elseif ($gbath == 11) { $gbathc = 81920; $gmaxl = 2.1;
} elseif ($gbath == 12) { $gbathc = 163840; $gmaxl = 2.2;
} elseif ($gbath == 13) { $gbathc = 327680; $gmaxl = 2.3;
} elseif ($gbath == 14) { $gbathc = 655360; $gmaxl = 2.4;
} elseif ($gbath >= 15) { $gbathc = 1310720; $gmaxl = 2.5+(($gbath-15)*0.1);
}

if ($gbibly == 1) { $gbiblyc = 10000; $gmaxu = 4;
} elseif ($gbibly == 2) { $gbiblyc = 10000; $gmaxu = 6;
} elseif ($gbibly == 3) { $gbiblyc = 10000; $gmaxu = 8;
} elseif ($gbibly == 4) { $gbiblyc = 10000; $gmaxu = 10;
} elseif ($gbibly == 5) { $gbiblyc = 10000; $gmaxu = 12;
} elseif ($gbibly == 6) { $gbiblyc = 10000; $gmaxu = 14;
} elseif ($gbibly == 7) { $gbiblyc = 10000; $gmaxu = 16;
} elseif ($gbibly == 8) { $gbiblyc = 10000; $gmaxu = 18;
} elseif ($gbibly == 9) { $gbiblyc = 10000; $gmaxu = 20;
} elseif ($gbibly == 10) { $gbiblyc = 10000; $gmaxu = 22;
} elseif ($gbibly == 11) { $gbiblyc = 10000; $gmaxu = 24;
} elseif ($gbibly == 12) { $gbiblyc = 10000; $gmaxu = 26;
} elseif ($gbibly == 13) { $gbiblyc = 10000; $gmaxu = 28;
} elseif ($gbibly == 14) { $gbiblyc = 10000; $gmaxu = 30;
} elseif ($gbibly >= 15) { $gbiblyc = 10000; $gmaxu = 32+(2*($gbibly-15));
}

if ($gcamp == 0) { $gcampc = 1; $gtcr = 2;
} elseif ($gcamp == 1) { $gcampc = 300; $gtcr = 4;
} elseif ($gcamp == 2) { $gcampc = 750; $gtcr = 6;
} elseif ($gcamp == 3) { $gcampc = 1875; $gtcr = 8;
} elseif ($gcamp == 4) { $gcampc = 4688; $gtcr = 10;
} elseif ($gcamp == 5) { $gcampc = 11719; $gtcr = 12;
} elseif ($gcamp == 6) { $gcampc = 29297; $gtcr = 14;
} elseif ($gcamp == 7) { $gcampc = 73242; $gtcr = 16;
} elseif ($gcamp == 8) { $gcampc = 183105; $gtcr = 18;
} elseif ($gcamp == 9) { $gcampc = 457764; $gtcr = 20;
} elseif ($gcamp == 10) { $gcampc = 1144409; $gtcr = 22;
} elseif ($gcamp == 11) { $gcampc = 2861023; $gtcr = 24;
} elseif ($gcamp == 12) { $gcampc = 7152557; $gtcr = 26;
} elseif ($gcamp == 13) { $gcampc = 17881393; $gtcr = 28;
} elseif ($gcamp == 14) { $gcampc = 44703484; $gtcr = 30;
} elseif ($gcamp >= 15) { $gcampc = 111758709; $gtcr = 32+(2*($gcamp-15));
}

if ($gdepos == 0) { $gdeposc = 1; $gmaxd = 1;
} elseif ($gdepos == 1) { $gdeposc = 2500; $gmaxd = 2;
} elseif ($gdepos == 2) { $gdeposc = 5625; $gmaxd = 3;
} elseif ($gdepos == 3) { $gdeposc = 12656; $gmaxd = 4;
} elseif ($gdepos == 4) { $gdeposc = 28476; $gmaxd = 5;
} elseif ($gdepos == 5) { $gdeposc = 64072; $gmaxd = 6;
} elseif ($gdepos == 6) { $gdeposc = 144162; $gmaxd = 7;
} elseif ($gdepos == 7) { $gdeposc = 324365; $gmaxd = 8;
} elseif ($gdepos == 8) { $gdeposc = 729823; $gmaxd = 9;
} elseif ($gdepos == 9) { $gdeposc = 1642102; $gmaxd = 10;
} elseif ($gdepos == 10) { $gdeposc = 3694729; $gmaxd = 11;
} elseif ($gdepos == 11) { $gdeposc = 8313141; $gmaxd = 12;
} elseif ($gdepos == 12) { $gdeposc = 18704569; $gmaxd = 13;
} elseif ($gdepos == 13) { $gdeposc = 42085280; $gmaxd = 14;
} elseif ($gdepos == 14) { $gdeposc = 94691881; $gmaxd = 15;
} elseif ($gdepos >= 15) { $gdeposc = 213056732; $gmaxd = 16+(2*($gdepos-15));
}

if ($ghall == 0) { $ghallc = 1; $ggoldb = 2; $ggoldad = 1;
} elseif ($ghall == 1) { $ghallc = 100; $ggoldb = 4; $ggoldad = 2;
} elseif ($ghall == 2) { $ghallc = 300; $ggoldb = 6; $ggoldad = 3;
} elseif ($ghall == 3) { $ghallc = 900; $ggoldb = 8; $ggoldad = 4;
} elseif ($ghall == 4) { $ghallc = 2700; $ggoldb = 10; $ggoldad = 5;
} elseif ($ghall == 5) { $ghallc = 8100; $ggoldb = 12; $ggoldad = 6;
} elseif ($ghall == 6) { $ghallc = 24300; $ggoldb = 14; $ggoldad = 7;
} elseif ($ghall == 7) { $ghallc = 72900; $ggoldb = 16; $ggoldad = 8;
} elseif ($ghall == 8) { $ghallc = 218700; $ggoldb = 18; $ggoldad = 9;
} elseif ($ghall == 9) { $ghallc = 656100; $ggoldb = 20; $ggoldad = 10;
} elseif ($ghall == 10) { $ghallc = 1968300; $ggoldb = 22; $ggoldad = 11;
} elseif ($ghall == 11) { $ghallc = 5904900; $ggoldb = 24; $ggoldad = 12;
} elseif ($ghall == 12) { $ghallc = 17714700; $ggoldb = 26; $ggoldad = 13;
} elseif ($ghall == 13) { $ghallc = 53144100; $ggoldb = 28; $ggoldad = 14;
} elseif ($ghall == 14) { $ghallc = 159432300; $ggoldb = 30; $ggoldad = 15;
} elseif ($ghall >= 15) { $ghallc = 478296900; $ggoldb = 32+(2*($ghall-15)); $ggoldad = 16+($ghall-15);
}

if ($gmarket == 0) { $gmarketc = 1; $gnmarket = 'Mercader de Comida';
} elseif ($gmarket == 1) { $gmarketc = 3333; $gnmarket = 'Mercader de Genios';
} elseif ($gmarket == 2) { $gmarketc = 3333; $gnmarket = 'Mercader de Materias';
} elseif ($gmarket == 3) { $gmarketc = 3333; $gnmarket = 'Mercader de Construccion';
} elseif ($gmarket == 4) { $gmarketc = 3333; $gnmarket = 'Mercader de Abasto';
} elseif ($gmarket == 5) { $gmarketc = 3333; $gnmarket = 'Mercader de Lujos';
} elseif ($gmarket == 6) { $gmarketc = 3333; $gnmarket = 'Mercader de Dioses';
} elseif ($gmarket == 7) { $gmarketc = 3333; $gnmarket = 'Mercader de Mascotas';
} elseif ($gmarket == 8) { $gmarketc = 3333; $gnmarket = 'Mercader de Bienes';
} elseif ($gmarket == 9) { $gmarketc = 3333; $gnmarket = 'Mercader de Trabajo';
} elseif ($gmarket == 10) { $gmarketc = 3333; $gnmarket = 'Mercader de Mercenarios';
} elseif ($gmarket == 11) { $gmarketc = 3333; $gnmarket = 'Mercader de Ayudantes';
} elseif ($gmarket == 12) { $gmarketc = 3333; $gnmarket = 'Mercader de Plata';
} elseif ($gmarket == 13) { $gmarketc = 3333; $gnmarket = 'Mercader de Misterios';
} elseif ($gmarket == 14) { $gmarketc = 3333; $gnmarket = 'Mercader de Mar';
} elseif ($gmarket == 15) { $gmarketc = 3333; $gnmarket = 'Mercader de Flores';
} elseif ($gmarket == 16) { $gmarketc = 3333; $gnmarket = 'Mercader de Oro';
} elseif ($gmarket == 17) { $gmarketc = 3333; $gnmarket = 'Mercader de Flotas';
} elseif ($gmarket == 18) { $gmarketc = 3333; $gnmarket = 'Mercader de Emperador';
} elseif ($gmarket == 19) { $gmarketc = 3333; $gnmarket = 'Mercader de Leyenda';
} elseif ($gmarket >= 20) { $gmarketc = 3333; $gnmarket = 'Hasta ahora no hay mas mercaderes';
}

if ($gnx == 0) { $gnxc = 1; $gmaxp = 2;
} elseif ($gnx == 1) { $gnxc = 825; $gmaxp = 4;
} elseif ($gnx == 2) { $gnxc = 2063; $gmaxp = 6;
} elseif ($gnx == 3) { $gnxc = 5156; $gmaxp = 8;
} elseif ($gnx == 4) { $gnxc = 12891; $gmaxp = 10;
} elseif ($gnx == 5) { $gnxc = 32227; $gmaxp = 12;
} elseif ($gnx == 6) { $gnxc = 80566; $gmaxp = 14;
} elseif ($gnx == 7) { $gnxc = 201416; $gmaxp = 16;
} elseif ($gnx == 8) { $gnxc = 503540; $gmaxp = 18;
} elseif ($gnx == 9) { $gnxc = 1258850; $gmaxp = 20;
} elseif ($gnx == 10) { $gnxc = 3147125; $gmaxp = 22;
} elseif ($gnx == 11) { $gnxc = 7867813; $gmaxp = 24;
} elseif ($gnx == 12) { $gnxc = 19669533; $gmaxp = 26;
} elseif ($gnx == 13) { $gnxc = 49173832; $gmaxp = 28;
} elseif ($gnx == 14) { $gnxc = 122934580; $gmaxp = 30;
} elseif ($gnx >= 15) { $gnxc = 307336450; $gmaxp = 32+(2*($gnx-15));
}

if ($gtemplum == 0) { $gtemplumc = 1; $ggodb = 0.2;
} elseif ($gtemplum == 1) { $gtemplumc = 10; $ggodb = 0.4;
} elseif ($gtemplum == 2) { $gtemplumc = 50; $ggodb = 0.6;
} elseif ($gtemplum == 3) { $gtemplumc = 120; $ggodb = 0.8;
} elseif ($gtemplum == 4) { $gtemplumc = 280; $ggodb = 1.0;
} elseif ($gtemplum == 5) { $gtemplumc = 730; $ggodb = 1.2;
} elseif ($gtemplum == 6) { $gtemplumc = 170; $ggodb = 1.4;
} elseif ($gtemplum == 7) { $gtemplumc = 410; $ggodb = 1.6;
} elseif ($gtemplum == 8) { $gtemplumc = 990; $ggodb = 1.8;
} elseif ($gtemplum == 9) { $gtemplumc = 2300; $ggodb = 2.0;
} elseif ($gtemplum == 10) { $gtemplumc = 5500; $ggodb = 2.2;
} elseif ($gtemplum == 11) { $gtemplumc = 13000; $ggodb = 2.4;
} elseif ($gtemplum == 12) { $gtemplumc = 28000; $ggodb = 2.6;
} elseif ($gtemplum == 13) { $gtemplumc = 72000; $ggodb = 2.8;
} elseif ($gtemplum == 14) { $gtemplumc = 160000; $ggodb = 3.0;
} elseif ($gtemplum >= 15) { $gtemplumc = 350000; $ggodb = 3.2+(0.2*($gtemplum-15));
}

if ($gmedici == 0) { $gmedicic = 823; $gheal = 5;
} elseif ($gmedici == 1) { $gmedicic = 1235; $gheal = 10;
} elseif ($gmedici == 2) { $gmedicic = 1852; $gheal = 15;
} elseif ($gmedici == 3) { $gmedicic = 2778; $gheal = 20;
} elseif ($gmedici == 4) { $gmedicic = 4166; $gheal = 25;
} elseif ($gmedici == 5) { $gmedicic = 6250; $gheal = 30;
} elseif ($gmedici == 6) { $gmedicic = 9374; $gheal = 35;
} elseif ($gmedici == 7) { $gmedicic = 14062; $gheal = 40;
} elseif ($gmedici == 8) { $gmedicic = 21093; $gheal = 45;
} elseif ($gmedici == 9) { $gmedicic = 31639; $gheal = 50;
} elseif ($gmedici == 10) { $gmedicic = 47458; $gheal = 55;
} elseif ($gmedici == 11) { $gmedicic = 71187; $gheal = 60;
} elseif ($gmedici == 12) { $gmedicic = 106781; $gheal = 65;
} elseif ($gmedici == 13) { $gmedicic = 160172; $gheal = 70;
} elseif ($gmedici == 14) { $gmedicic = 240258; $gheal = 75;
} elseif ($gmedici >= 15) { $gmedicic = 360387; $gheal = 80+(5*($gmedici-15));
}

$gforumc1 = number_format($gforumc, 0, ",", ".");
$gbankc1 = number_format($gbankc, 0, ",", ".");
$gbathc1 = number_format($gbathc, 0, ",", ".");
$gbiblyc1 = number_format($gbiblyc, 0, ",", ".");
$gcampc1 = number_format($gcampc, 0, ",", ".");
$gdeposc1 = number_format($gdeposc, 0, ",", ".");
$ghallc1 = number_format($ghallc, 0, ",", ".");
$gmarketc1 = number_format($gmarketc, 0, ",", ".");
$gnxc1 = number_format($gnxc, 0, ",", ".");
$gtemplumc1 = number_format($gtemplumc, 0, ",", ".");
$gmedicic1 = number_format($gmedicic, 0, ",", ".");

?>