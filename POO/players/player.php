<?php
class Player
{
    protected $name;
    protected $birthday;
    protected $country;
    protected $dorsal;
    protected $goals;
    protected $matches;
    protected $minutes;
    protected $yellowCard;
    protected $redCard;

    public function __construct($name, $birthday, $country, int $dorsal, int $goals, int $matches, int $minutes, int $yellowCard, int $redCard)
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }
    public function Age()
    {
        $hoy = new DateTime();
        $fechaNacimiento = DateTime::createFromFormat('d/m/Y', $this->birthday);
        return $hoy->diff($fechaNacimiento)->y; //Calculamos la diferencia entre dos fechas
    }
    public function Score()
    {
        $resultado = $this->goals++;
        return $resultado;
    }

    public function addCard(int $Colour)
    {
        if ($Colour == 1) {
            $this->yellowCard++;
        }
        if ($Colour == 2) {
            $this->redCard++;
        }
    }

    public function PlayMinutes() {}



    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            return $this->$name = $value;
        }
    }
}
