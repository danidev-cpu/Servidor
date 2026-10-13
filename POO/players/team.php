<?php
class Team
{
    protected $name;

    protected $players;

    protected $matches;

    protected $won;

    protected $lost;

    protected $tie;

    protected $scoreGoals;

    protected $concededGoals;

    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoreGoals, $concededGoals)
    {
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }

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
