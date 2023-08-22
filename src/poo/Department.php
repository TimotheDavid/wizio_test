<?php

class Department {

    private int $population;
    private int $zipcode;
    private string $name;

    public function __construct()
    {
        $this->population = 0;
        $this->zipcode = 0;
        $this->name = "";
    }

    public function getPopulation(): int {
        return $this->population;
}

    public function setPopulation(int $population): void {
        $this->population = $population;
}

    public function getZipCode(): int {
        return  $this->zipcode;
    }

    public function setZipCode(int $zipCode): void {
        $this->zipcode = $zipCode;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getNextDepartment(int $zipcode): Department {
        return new Department();
    }

}