@php

$star = 10;
for ($a=1; $a <= $star ; $a++) { 
   for ($b=$star; $b >= $a ; $b-=1) { 
    echo "&nbsp";
   }
   for ($c=1; $c <= $a ; $c++) { 
   echo "*";
   }
   echo "<br>";
}

for ($a=1; $a <= $star ; $a++) { 
    for ($b=1; $b <= $a ; $b++) { 
        echo "&nbsp";
    }
    for ($c=$star; $c >= $a ; $c-=1) { 
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($a=$star; $a > 0 ; $a--) { 
    for ($b=1; $b <= $a ; $b++) { 
        echo "&nbsp";
    }

    for ($b=$star; $b >= $a ; $b--) { 
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

$string = "MAS HAMMAS";
$balik = strrev($string);
echo $balik;
echo "<br>";

$num = 12345678;
$revnum = 0;
while ($num != 0) {
   $revnum = $revnum * 10 + $num %10;
   $num = (int)($num/10);
}

echo "Reverse : $revnum"

@endphp