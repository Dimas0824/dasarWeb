<?php
function tampilkanHaloDunia(){
    echo"Halo Dunia <br>";
    tampilkanHaloDunia();
}

tampilkanHaloDunia();

?>

<?php
for ($i = 1; $i <= 25; $i++){
    echo"Perulangan ke-{$i} <br>";
}