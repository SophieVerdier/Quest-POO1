<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockCapacity;
    private int $load = 0;
    private string $energy; 

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }

    public function getStock(): int
    {
        return $this->stockCapacity;
    }

    public function setStock(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load)
    {
        $this->load = $load;
    }
    
    public function getFilling(): string
    {
        if ($this->load < $this->stockCapacity) {
            return 'in filling';
        } elseif ($this->load == $this->stockCapacity) {
            return 'full';
        } else {
            return 'load too large';
        }
    }
    

}
