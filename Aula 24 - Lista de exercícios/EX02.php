<?php
$veiculos = array("moto", "carro", "caminhão", "bicicleta");
if (in_array("carro", $veiculos)) {
    echo "true";
} else {
    echo "null";
}
?>
<br>
<?php
$veiculos = array("moto", "carro", "caminhão", "bicicleta");
if (array_search("vv", $veiculos)) {
    echo "true";
} else {
    echo "null";
}
?>