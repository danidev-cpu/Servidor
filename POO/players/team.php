<?php
require_once "player.php";
class Team
{
    protected $name;

    protected $players = [];

    protected $matches;

    protected $won;

    protected $lost;

    protected $tie;

    protected $scoreGoals;

    protected $concededGoals;

    public function __construct($name)
    {
        $this->name = $name;
        $this->players = [];
        $this->matches = 0;
        $this->won = 0;
        $this->lost = 0;
        $this->tie = 0;
        $this->scoreGoals = 0;
        $this->concededGoals = 0;
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
    public function SignPlayer(Player $player)
    {
        $this->players[] = $player;
        $this->scoreGoals += $player->Score();
        $this->concededGoals += $player->Score();
        $this->concededGoals += $player->Score();
    }

    public function Render()
    {

        return "
                <td>Name: $this->players[0]->name</td>
                <td>Birthday: $this->players[0]->birthday</td>    
                <td>Country: $this->players[0]->country</td>
                <td>Dorsal: $this->players[0]->dorsal</td>
                <td>Position: $this->players[0]->position</td>
                <td>Goals: $this->players[0]->goals</td>
                <td>Matches: $this->players[0]->matches</td>
                <td>Minutes: $this->players[0]->minutes</td>
                <td>Yellow Card: $this->players[0]->yellowCard</td>
                <td>Red Card: $this->players[0]->redCard</td>
        ";
    }
}
