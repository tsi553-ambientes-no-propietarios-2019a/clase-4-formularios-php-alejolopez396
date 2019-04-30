<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
* El arreglo debe tener el formato
 *[
  *  'juan' => 'contrasena_segura'
 *]
 *Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 *Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 *Si los datos no son correctos imprimir un mensaje de error.
 *Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */
function datos($ususario, $contrasena){
    $arreglo = array(
        'Alejo' => '12345', 
        'Sebastian' => '12345', 
        'Eduardo' => '12345'
    ); 
    if(!empty($ususario) and !empty($contrasena)){
    
        if(array_key_exists($ususario, $arreglo)){
            if($arreglo[$ususario]== $contrasena){
                echo 'Bienvenido: ' . strtoupper($ususario);
            }else {
                echo 'Usuario o contraseña incorrectos.. '; 
            }
        }else {
            echo 'error';
        }
    
 }else{
    echo 'Ingrese los campos..'; 
    }   
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ususario = trim($_POST['User']);
    $contrasena = $_POST['Pass'];
}else{
    echo 'Debe ser tipo post';
}
echo '<br>'; 
echo '<br>'; 
datos($ususario, $contrasena) ;
echo '<br>'; 
echo '<br>'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <form method = "POST">
        <div>
        USER: <input type= "text" name = "User">
        </div>
        <div>
        PASSWORD: <input type= "password" name = "Pass">
        </div>
        <div>
        <input type="submit" name = "BtnSend" value= "Ingresar">
        </div>
    </form>

  </body>
</html>





