<?php
class Persona
{
    protected $DNI;

    protected $nombre;

    protected $email;

    public function __construct($DNI, $nombre, $email)
    {
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->name = $value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }
    }

    public function __toString()
    {
        $texto = 'DNI: ' . $this->DNI . '</br>';
        $texto .= 'Nombre: ' . $this->name . '</br>';
        $texto .= 'Gmail: ' . $this->email . '</br>';
    }
}
