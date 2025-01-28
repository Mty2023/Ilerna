*/ determinar el descuento: en una tienda se aplica el 10% de descuento */
*/ si el importe supera los 50€ */
*/ Calcular el precio final */

<?php
$importe=60;
$descuento=0;
if ($importe>50) {
    $descuento=$importe*0.1;
}
$importe=$importe-$descuento;
echo "el precio final es $importe";
?>
