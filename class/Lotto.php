<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lotto
 * 
 * This is the lotto class
 * It has a play_lotto function where you can  set your lotto numbers
 *
 * @author Masande
 */

class Lotto{

public function play_lotto($min, $max, $quantity )
{
    
    $numbers = range($min, $max);//Draw the set of numbers e.g (1, 10)
    shuffle($numbers); //Shuffle will mix the numbers 
    return array_slice($numbers, 0, $quantity);//array_slice() function returns selected parts of an array

}
	
}



