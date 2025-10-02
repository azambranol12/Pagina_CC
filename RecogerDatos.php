<?php

//Text
//Verifica que los datos que se hayan introducido no este vacios o se hayan puesto solo espacios
if(isset($_POST["nombre"]) || trim($_POST["nombre"]) === ''){
    echo '<p>El nombre es : '.$_POST["nombre"].'</p>';
}else{
    echo '<p>No se ha introducido nombre</p>';
}

if(isset($_POST["apellido"]) || trim($_POST["apellido"]) === ''){
    echo '<p>El apellido es : '.$_POST["apellido"].'</p>';
}else{
    echo '<p>No se ha introducido apellido</p>';
}

if(isset($_POST["contrasenia"]) || trim($_POST["contrasenia"]) === ''){
    echo '<p>El contraseña es : '.$_POST["contrasenia"].'</p>';
}else{
    echo '<p>No se ha introducido contraseña</p>';
}


/////////////Radio 
if(isset($_POST["accion"]))
{
    $datos = $_POST["accion"];
    echo '<p>La actividad elegida es : '.$datos.'</p>';
}elseif(empty($_POST["accion"]))
{
    echo'<p>No has elegido actividad</p>';
}

///////////////Check boxes
if (isset($_POST['contacto']) && is_array($_POST['contacto'])) {
    echo '<p>Formas de contacto seleccionadas: ';
    foreach ($_POST['contacto'] as $formaContacto) {
        echo $formaContacto . ', ';
    }
    echo '</p>';
} else {
    echo '<p>No has seleccionado ninguna forma de contacto.</p>';
}

///////Horario
echo '<p> El horario disponible es '.$_POST["eleccion"].' </p>';

//////Comentario textarea
if(isset($_POST["comentario"]) && trim($_POST["comentario"]) !== ''){

    $comentario = $_POST["comentario"];
    echo '<p>Comentario: '.$comentario.' </p>';
}else{
    echo '<p>No se ha añadido ningún comentario</p>';
}

//////////Terminos
if(isset($_POST["condiciones"])) {
    echo'<p>Se aceptaron los términos</p>';
} else {
    echo '<p>Debes aceptar los términos para continuar.</p>';
}

?>
