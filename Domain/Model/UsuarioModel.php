<?php

class UsuarioModel
{
    // Atributos de la clase
    private int $numeroIdentificacion;
    private string $tipoIdentificacion;
    private string $contrasena;
    private string $repetirContrasena;
    private string $preguntaRecordarContrasena;
    private string $respuestaRecuperarContrasena;
    private string $primerNombre;
    private ?string $segundoNombre;
    private string $primerApellido;
    private ?string $segundoApellido;
    private ?string $genero;
    private string $email;
    private ?int $numeroTelefono;
    private ?string $foto;
    private string $rol;
    private string $pais;
    private string $ciudad;

    // Constructor
    public function __construct(
        int $numeroIdentificacion,
        string $tipoIdentificacion,
        string $contrasena,
        string $repetirContrasena,
        string $preguntaRecordarContrasena,
        string $respuestaRecuperarContrasena,
        string $primerNombre,
        ?string $segundoNombre,
        string $primerApellido,
        ?string $segundoApellido,
        ?string $genero,
        string $email,
        ?int $numeroTelefono,
        ?string $foto,
        string $rol,
        string $pais,
        string $ciudad
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
    public function getNumeroIdentificacion(): int
    {
        return $this->numeroIdentificacion;
    }
    public function setNumeroIdentificacion(int $numeroIdentificacion): void
    {
        $this->numeroIdentificacion = $numeroIdentificacion;
    }

    public function getTipoIdentificacion(): string
    {
        return $this->tipoIdentificacion;
    }
    public function setTipoIdentificacion(string $tipoIdentificacion): void
    {
        $this->tipoIdentificacion = $tipoIdentificacion;
    }

    public function getContrasena(): string
    {
        return $this->contrasena;
    }
    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    public function getRepetirContrasena(): string
    {
        return $this->repetirContrasena;
    }
    public function setRepetirContrasena(string $repetirContrasena): void
    {
        $this->repetirContrasena = $repetirContrasena;
    }

    public function getPreguntaRecordarContrasena(): string
    {
        return $this->preguntaRecordarContrasena;
    }
    public function setPreguntaRecordarContrasena(string $preguntaRecordarContrasena): void
    {
        $this->preguntaRecordarContrasena = $preguntaRecordarContrasena;
    }

    public function getRespuestaRecuperarContrasena(): string
    {
        return $this->respuestaRecuperarContrasena;
    }
    public function setRespuestaRecuperarContrasena(string $respuestaRecuperarContrasena): void
    {
        $this->respuestaRecuperarContrasena = $respuestaRecuperarContrasena;
    }

    public function getPrimerNombre(): string
    {
        return $this->primerNombre;
    }
    public function setPrimerNombre(string $primerNombre): void
    {
        $this->primerNombre = $primerNombre;
    }

    public function getSegundoNombre(): ?string
    {
        return $this->segundoNombre;
    }
    public function setSegundoNombre(?string $segundoNombre): void
    {
        $this->segundoNombre = $segundoNombre;
    }

    public function getPrimerApellido(): string
    {
        return $this->primerApellido;
    }
    public function setPrimerApellido(string $primerApellido): void
    {
        $this->primerApellido = $primerApellido;
    }

    public function getSegundoApellido(): ?string
    {
        return $this->segundoApellido;
    }
    public function setSegundoApellido(?string $segundoApellido): void
    {
        $this->segundoApellido = $segundoApellido;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }
    public function setGenero(?string $genero): void
    {
        $this->genero = $genero;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getNumeroTelefono(): ?int
    {
        return $this->numeroTelefono;
    }
    public function setNumeroTelefono(?int $numeroTelefono): void
    {
        $this->numeroTelefono = $numeroTelefono;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }
    public function setFoto(?string $foto): void
    {
        $this->foto = $foto;
    }

    public function getRol(): string
    {
        return $this->rol;
    }
    public function setRol(string $rol): void
    {
        $this->rol = $rol;
    }

    public function getPais(): string
    {
        return $this->pais;
    }
    public function setPais(string $pais): void
    {
        $this->pais = $pais;
    }

    public function getCiudad(): string
    {
        return $this->ciudad;
    }
    public function setCiudad(string $ciudad): void
    {
        $this->ciudad = $ciudad;
    }
}
?>