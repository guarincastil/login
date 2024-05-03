<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost", "id5197627_c0debra1n", "12345", "id5197627_iniciarsesion");

$consulta="SELECT * FROM login WHERE usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:WASP1.html");
    }
else {
    echo "¡¡¡ERROR¡¡¡ =VUELVA A INGRESAR SUS DATOS= ";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
