<?php
/*
 * *********************************************** 
 * =============================================== 
 *   Exercise: At the crossroads - Knapsack Light
 * =============================================== 
 *   Exercise link: https://app.codesignal.com/arcade/code-arcade/at-the-crossroads/r9azLYp2BDZPyzaG2
 *   My objective: To use OOP PHP concepts to solve the exercise.
 *   PHP Version: 8.0.27
 * *********************************************** 
 */

// creates item class 
class Item {
    private $weight; 
    private $value;
    
    public function __construct($w, $v) {
        $this->weight = $w;
        $this->value = $v;
    } 
    
    public function getValue(): int {
        return $this->value;
    }
    
    public function getWeight(): int {
        return $this->weight;
    }
} // end of class Item
 
// creates inventory class 
class Inventory {
    private $maxWeight; 
    private $curWeight = 0;
    private $curValue = 0;
    
    public function __construct($maxWeight) {
        $this->maxWeight = $maxWeight;
    }
    
    public function getValue(): int {
        return $this->curValue;
    }   
     
    public function receiveItem($item): void {
        if($this->curWeight + $item->getWeight() <= $this->maxWeight){
            $this->curValue += $item->GetValue(); 
            $this->curWeight += $item->getWeight();
        }
    } 

} // end of class Inventory

// main function
function solution($value1, $weight1, $value2, $weight2, $maxW): int {
    $itemOne = new Item($weight1, $value1);
    $itemTwo = new Item($weight2, $value2);
    
    $inventory = new Inventory($maxW);
    
    if($itemOne->getValue() > $itemTwo->getValue()) {
        $inventory->receiveItem($itemOne);
        $inventory->receiveItem($itemTwo);
        return $inventory->getValue();
    }
    
    $inventory->receiveItem($itemTwo);
    $inventory->receiveItem($itemOne);
    return $inventory->getValue();
      
} // end of function solution
