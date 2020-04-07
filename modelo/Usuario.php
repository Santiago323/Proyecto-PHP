<?php

    class Usuario {
        var $usuario;
        var $contrasena;
        var $perfil;

        function __construct($usuario, $contrasena, $perfil){
            $this->usuario = $usuario;
            $this->contrasena = $contrasena;
            $this->perfil = $perfil;
        }

        function getUsuario(){
            return $this->usuario;
        }

        function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        function getContrasena(){
            return $this->contrasena;
        }

        function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }

        function getPerfil(){
            return $this->perfil;
        }

        function setPerfil($perfil){
            $this->perfil = $perfil;
        }
    }
?>