<?php
/**
 * Description
 * @authors Your Name (you@example.org)
 * @date    2024-01-12 23:33:04
 * @version 1.0.0
 */
interface DiceRollUsecaseI{
    function rollDice(String $dice):String;
}

class DiceRollUsecase implements DiceRollUsecaseI {
    // private RandomNumberI $randomNumberI;
    
    function __construct(private RandomNumberI $randomNumberI){

    }
    function rollDice(string $dice):String{
        return $dice . ' rolled to '.$this->randomNumberI->getRandomNumber();
    }
}