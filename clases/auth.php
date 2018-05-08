<?php
class Auth extends ControladorIndex
{
    public  static function estaLogueado()
    {
    	Session::init();
        if (!isset($_SESSION['usuario_logueado'])) {
            Session::destroy();
            self::redirect("usuario","invitado");
            exit();
        }
    }

    public  static function ingresar()
    {
    	Session::init();
        if (isset($_SESSION['usuario_logueado'])) {
            self::redirect("usuario","listado");
            exit();
        }
    }
}?>