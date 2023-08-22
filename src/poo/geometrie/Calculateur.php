<?php



class Calculateur {

    private array $forms;

    public function Add(Geometrie $form) {
        $this->forms[] = $form;
    }

    public function CalculAire(): int
    {
        $response = 0;
        foreach ($this->forms as $item) {
            $response += $item->getAire();
        }

        return $response;

    }

    public function calculePerimetre(): int {
        $response = 0;

        foreach ($this->forms as $item) {
            $response += $item->getPerimetre();
        }
        return  $response;
    }






}