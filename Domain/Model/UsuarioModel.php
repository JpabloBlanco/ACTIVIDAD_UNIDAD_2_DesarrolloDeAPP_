<?php

class UsuarioModel
{
    // Atributos de la clase
    private $numeroIdentificacion;
    private $tipoIdentificacion;
    private $contrasena;
    private $repetirContrasena;
    private $preguntaRecordarContrasena;
    private $respuestaRecuperarContrasena;
    private $primerNombre;
    private $segundoNombre;
    private $primerApellido;
    private $segundoApellido;
    private $genero;
    private $email;
    private $numeroTelefono;
    private $foto;
    private $rol;
    private $pais;
    private $ciudad;

    // Constructor
    public function __construct(
        $numeroIdentificacion,
        $tipoIdentificacion,
        $contrasena,
        $repetirContrasena,
        $preguntaRecordarContrasena,
        $respuestaRecuperarContrasena,
        $primerNombre,
        $segundoNombre,
        $primerApellido,
        $segundoApellido,
        $genero,
        $email,
        $numeroTelefono,
        $foto,
        $rol,
        $pais,
        $ciudad
    ) {
        $this->numeroIdentificacion = $numeroIdentificacion;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->contrasena = $contrasena;
        $this->repetirContrasena = $repetirContrasena;
        $this->preguntaRecordarContrasena = $preguntaRecordarContrasena;
        $this->respuestaRecuperarContrasena = $respuestaRecuperarContrasena;
        $this->primerNombre = $primerNombre;
        $this->segundoNombre = $segundoNombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->genero = $genero;
        $this->email = $email;
        $this->numeroTelefono = $numeroTelefono;
        $this->foto = $foto;
        $this->rol = $rol;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
    }

    // Métodos Getters y Setters
    public function getNumeroIdentificacion()
    {
        return $this->numeroIdentificacion;
    }
    public function setNumeroIdentificacion($numeroIdentificacion)
    {
        $this->numeroIdentificacion = $numeroIdentificacion;
    }

    public function getTipoIdentificacion()
    {
        return $this->tipoIdentificacion;
    }
    public function setTipoIdentificacion($tipoIdentificacion)
    {
        $this->tipoIdentificacion = $tipoIdentificacion;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function getRepetirContrasena()
    {
        return $this->repetirContrasena;
    }
    public function setRepetirContrasena($repetirContrasena)
    {
        $this->repetirContrasena = $repetirContrasena;
    }

    public function getPreguntaRecordarContrasena()
    {
        return $this->preguntaRecordarContrasena;
    }
    public function setPreguntaRecordarContrasena($preguntaRecordarContrasena)
    {
        $this->preguntaRecordarContrasena = $preguntaRecordarContrasena;
    }

    public function getRespuestaRecuperarContrasena()
    {
        return $this->respuestaRecuperarContrasena;
    }
    public function setRespuestaRecuperarContrasena($respuestaRecuperarContrasena)
    {
        $this->respuestaRecuperarContrasena = $respuestaRecuperarContrasena;
    }

    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;
    }

    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;
    }

    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;
    }

    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;
    }

    public function getGenero()
    {
        return $this->genero;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }
    public function setNumeroTelefono($numeroTelefono)
    {
        $this->numeroTelefono = $numeroTelefono;
    }

    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getPais()
    {
        return $this->pais;
    }
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
}
?>