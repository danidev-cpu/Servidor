<?php
require_once "Persona.php";
class Estudiante extends Persona
{
    public string $numExpediente;

    public function __construct(string $DNI, string $nombre, string $email, string $numExpediente)
    {
        parent::__construct($DNI, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }

    public function mostrar()
    {
        echo "</br>";
        $texto = 'DNI: ' . $this->DNI . '</br>';
        $texto .= 'Nombre: ' . $this->nombre . '</br>';
        $texto .= 'Gmail: ' . $this->email . '</br>';
        $texto .= 'Expediente: ' . $this->numExpediente . '</br>';

        return $texto;
    }
}
