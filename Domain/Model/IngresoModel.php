<?php

class IngresoModel
{
    // Atributos de la clase
    private int $idConsecutivo;
    private DateTime $fechaRecepcion;
    private string $nombreIngreso;
    private float $valorIngreso;
    private string $fuenteIngreso;
    private ?string $descripcionIngreso;

    // Constructor
    public function __construct(
        int $idConsecutivo,
        string $nombreIngreso,
        float $valorIngreso,
        string $fuenteIngreso,
        ?string $descripcionIngreso = null
    ) {
        $this->idConsecutivo = $idConsecutivo;
        $this->fechaRecepcion = new DateTime(); // Fecha actual por defecto
        $this->nombreIngreso = $nombreIngreso;
        $this->valorIngreso = $valorIngreso;
        $this->fuenteIngreso = $fuenteIngreso;
        $this->descripcionIngreso = $descripcionIngreso;
    }

    // Métodos Getters y Setters
    public function getIdConsecutivo(): int
    {
        return $this->idConsecutivo;
    }
    public function setIdConsecutivo(int $idConsecutivo): void
    {
        $this->idConsecutivo = $idConsecutivo;
    }

    public function getFechaRecepcion(): DateTime
    {
        return $this->fechaRecepcion;
    }
    public function setFechaRecepcion(DateTime $fechaRecepcion): void
    {
        $this->fechaRecepcion = $fechaRecepcion;
    }

    public function getNombreIngreso(): string
    {
        return $this->nombreIngreso;
    }
    public function setNombreIngreso(string $nombreIngreso): void
    {
        $this->nombreIngreso = $nombreIngreso;
    }

    public function getValorIngreso(): float
    {
        return $this->valorIngreso;
    }
    public function setValorIngreso(float $valorIngreso): void
    {
        if ($valorIngreso <= 0) {
            throw new InvalidArgumentException("El valor del ingreso debe ser mayor a 0.");
        }
        $this->valorIngreso = $valorIngreso;
    }

    public function getFuenteIngreso(): string
    {
        return $this->fuenteIngreso;
    }
    public function setFuenteIngreso(string $fuenteIngreso): void
    {
        $this->fuenteIngreso = $fuenteIngreso;
    }

    public function getDescripcionIngreso(): ?string
    {
        return $this->descripcionIngreso;
    }
    public function setDescripcionIngreso(?string $descripcionIngreso): void
    {
        $this->descripcionIngreso = $descripcionIngreso;
    }

    // Método para agregar una nueva fuente de ingreso
    public static function agregarFuente(string $nuevaFuente): void
    {
        // Aquí se agregarían operaciones para guardar la nueva fuente en la BD
        // Ejemplo:
        // BaseDatos::guardarNuevaFuente($nuevaFuente);
        echo "Nueva fuente de ingreso '{$nuevaFuente}' agregada correctamente.";
    }
}

?>