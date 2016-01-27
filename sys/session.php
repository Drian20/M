<?php 

class session {
static public function sesion_start()
{
session_start();
//echo 'Session ID: '.session_id().'<br>';
}

static public function set_session_variable($nombre, $valor) {

$_SESSION [$nombre] = $valor;

}

static public function get_session_variable($nombre) {

if (isset ( $_SESSION [$nombre] )) {
//return $_SESSION [$nombre];
} else {
return false;
}
}
static public function borrar_variable($nombre) {
unset ( $_SESSION [$nombre] );
//echo 'Borramos la variable<br>';
}
static public function borrarsesion() {
$_SESSION = array();
session_destroy ();
//echo 'Borramos la sesion<br>';
}
}
?>