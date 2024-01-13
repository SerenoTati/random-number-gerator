<?php
/**
 * Description
 * @author Sereno Tati (serenopla@hotmail.com)
 * @date    2024-01-10 20:41:47
 * @version 1.0.0
 */
interface RandomNumberI{
    function getRandomNumber():int;
}
class RandomNumberUsecase implements RandomNumberI{
    

    function getRandomNumber():int{
        return rand(1,6);
    }
}