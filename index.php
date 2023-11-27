<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css"/>
    <title>php</title>
</head>
<body>
<?php
$nom = "lucas";
$edad = 21;
echo"<p>me llamo $nom y tengo $edad años</p><br>";

//CODICIONAL:
if($edad >= 18){
echo"<p>soy mayor de edad.</p>";
}else{
    echo"<p>soy menor de edad.</p>";
}

for($f = 0; $f <= 5; $f++){
    echo"<br>este es mi parrafo $f.</p>";
}


//indice de masa corporal.
$peso = 80;
$estatura = 180;
$respuesta = $peso / ($estatura*2);
echo"el indice de masa corporal es de: $respuesta"; 

//calculo de distacia.
$velocidad = 70;
$horas = 3;
$resultado = $velocidad * $horas;
echo"<br>la distancia recorrida es de: $resultado Km<br><br><br><br><br><br>";
?>


<form action="index.php" method="post">
<p>articulo: <input type="text" name="articulo" ></p>
<p>cantidad: <input type="text" name="cantidad" ></p>
<p>valor_U: <input type="text" name="valor_U" ></p>
<p><input type="submit" value="calcular" ></p>
</form>

<?php
//calculo descuento del 20%.
if($_POST){
    $art = $_POST["articulo"];
    $cant = $_POST["cantidad"];
    $valu = $_POST["valor_U"];

    $total= $cant * $valu;
    if($total > 100){
        $resul = $total-(($total*20)/100);
        print "su compra es mayor a 100 por lo tanto se le hara un descuento del 20%, y su total es de: $resul Milpesos";

    }else{
        $res = $cant * $valu;
        print "su total es de: $res Milpesos<br><br><br><br>";
    }
}
//tablas de multiplicar.

$tablainicial = 1;
$tablafinal = 6;
for($tabla = $tablainicial; $tabla < $tablafinal; $tabla++){
    for($t = 1; $t < 11; $t++){
        $tot = $t * $tabla;
        print  $tabla. " * " . $t . " = " . $tot . "<br>";
        }
        print"<br>"; 
}
?>
<h1>Suma</h1>
<form action="index.php" method="GET">
<p>Num1: <input type="text" name="Num1" ></p>
<p>Num2: <input type="text" name="Num2" ></p>
<p><input type="submit" value="calcular" ></p>
</form>

<?php
//suma de dos numeros.
if($_GET){
    $Nu1 = $_GET["Num1"];
    $Nu2 = $_GET["Num2"];
    
    $totales= $Nu1 + $Nu2;
    print "resultado: $totales";
    

}

?>
<br>
<br>
<h1>Multiplicacion</h1>
<form action="index.php" method="POST">
<p>Nume1: <input type="text" name="N3" ></p>
<p>Nume2: <input type="text" name="N4" ></p>
<p><input type="submit" value="calcular" ></p>
</form>


<?php
if($_POST){
    $M1 = $_POST["N3"];
    $M2 = $_POST["N4"];
    
    $totaless= $M1 * $M2;
    print "resultado: $totaless"; 
}
?>
<form action="index.php" method="GET">
<p>Radio: <input type="text" name="Radio" ></p>
<p><input type="submit" value="calcular" ></p>
</form>

<?php
if($_GET){
    $R = $_GET["Radio"];

    $respues = 3.1416 * ($R*$R);
    print "El area es de: $respues";
}
?>
<br>
<br>
<h1>formulario</h1>
<section class="formulario">
<form action="index.php" method="post">
<p>NOMBRE: <input type="text" name="nombre" ></p>
<p>EDAD: <input type="text" name="edad" ></p>
<p>SEXO: <input type="text" name="sexo" ></p>
<p>BARRIO: <input type="text" name="barrio" ></p>
<p>DIRECCION: <input type="text" name="direccion" ></p>
<p>TEL: <input type="text" name="tel" ></p>
<p><input type="submit" enviar="Registrar" ></p>
</form>
</section>
</body>
</html>













