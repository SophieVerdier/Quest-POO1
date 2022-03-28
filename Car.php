<?php

class Car
{
    private int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;


public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

public function start(): string
{
    $this->currentSpeed = 0;
    return "Start !";
}

public function forward(): string
{
    $this->currentSpeed = 15;
    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;

}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function getNumberWheels(): int
{
    return $this->nbWheels;
}

public function getColor(): int
{
    return $this->color;
}

public function getNumberSeats(): int
{
    return $this->nbSeats;
}

public function getEnergy(): int
{
    return $this->energy;
}

public function getEnergyLevel(): int
{
    return $this->energyLevel;
}
}

?>
