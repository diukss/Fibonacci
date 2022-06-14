<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Fibonacci</title>
</head>
<body>
    <header>
            <div class="logo">
                <img class="impulso" src="unnamed-removebg-preview.png" alt="">
            <img class="fibonacci" src="Título.png" alt="">


        </div>
        <nav>
        <a href="index.php" class="nav-links">Limite</a>
            <a href="oro.php" class="nav-links">Cociente</a>
            <a href="posicion.php" class="nav-links">Posición</a>


        </nav>
</header>
<div class="centrar-div">
<h1> Calculadora de fibonacci segun número limite </h1><br>
    <p class="p-centrado">Para esta sección pondremos un numero limite hasta el cual queremos mostrar la secuencia de Fibonacci</p>
    <br>
   
    <form class="form-centrado" method="POST" action="index.php">
        <p class="pedir">Ingrese numero limite: <input class="cajatxt" type="text" name="numeros"></p>

        <input class="boton" name="Enviar" type="submit" value="Ingresar">


    </form>
    <?php  
if(isset($_POST['Enviar'])){
    $n1 = 1;  
    $n2 = 1;  
    $n3 = $n2 + $n1; 
    echo "Num puesto:" . $_POST['numeros'] ;
    echo "<br>";
    echo "<br>";  
    echo $n1.' '.$n2.' ';  
    $tope=$_POST['numeros'];
    while ($n3 <= $tope ){  
        echo "<p class='pedir>". $n3.' , ';  
        $n1 = $n2;  
        $n2 = $n3;  
        $n3 = $n2 + $n1; 
        //$num = $num + 1;  
    }
}
?> 
</div>


</body>
</html>