<?php 
// STruktur perulangan (looping)
// 1. Counted loop; 2. Uncounted loop;


//for
for ($i = 6; $i>= 1; $i--){
    echo "<h$i>Heading $i<h$i>";
}
echo "<hr>";
// while
$x = 1;
while ($x <= 3){
    echo "While".$x. "<br>";
    $x++;
  
}

// do while
$y = 1;
do {
    echo "Do While".$y. "<br>";
    $y++;
}while ($y <= 3);

echo "<hr>";

// do while