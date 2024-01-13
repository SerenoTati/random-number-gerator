<?php
/**
 * Description
 * @author Sereno Tati (serenopla@hotmail.com)
 * @date    2024-01-12 23:39:43
 * @version 1.0.0
 */

class DiceModuleController {
    
    function __construct(private DiceRollUsecaseI $diceRollUsecase){
        
    }
    public function rollDice():String{
        // $diceNumber = $_REQUEST['dice-number'];
        $dice = $_REQUEST['dice'];
        return $this->diceRollUsecase->rollDice($dice);

    
    }
}