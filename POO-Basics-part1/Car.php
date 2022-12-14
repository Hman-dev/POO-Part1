<?php


Class Car
 {
    private int $nbWheels = 5;

    private int $currentSpeed;

    private string $energy;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats , string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }  

   

    public function forward(): string
    {
        $this->currentSpeed = 50;

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

    public function start(): string
    {   
        $engineStart = "";
        $this->energyLevel = 100;

        if($this->energyLevel >= 0)
        {
            $engineStart = "Démarrage du moteur ! ";
        }

        return $engineStart;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;   
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;

    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    




}