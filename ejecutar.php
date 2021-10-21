<?php
$lados = null;
$apotema = null;
$area = null;

if(isset($_POST['btn'])&& $_POST['btn']== 'calcular'){
    $lados = $_POST['lados'];
    $apotema = $_POST['apotema'];
    
    if(!empty($lados) && !empty($apotema)){
        $area = (($lados*8)*$apotema)/2;
    
        echo "<h2 align='center'>calculo del area de un octagono</h2>";

        echo "<br><p align= 'center'>el area del octagono es: ".$area ."cm²</p>";
        
        echo "<br/><br/>";

        echo "<p align= 'center'><a  href='index.html'>regresar</a></p>";
    }else{
        echo "<h2 align='center'>Debes completar toda la informacion vuelve a intentarlo</h2>";
        echo "<p align= 'center'><a  href='index.html'>regresar</a></p>";
    }
}

?>