<?php
//UC1:Calculate the length of line using given co-ordinates
class LineComparison{
    //Declare variables as a public
    public $x1;
    public $y1;
    public $x2;
    public $y2;

    public function UserInput(){ //create function for user input
        $this->x1 = readline("Enter x1 :");
        $this->x2 = readline("Enter x2 :");
        $this->y1 = readline("Enter y1 :");
        $this->y2 = readline("Enter y2 :");
    }

    // function for  calculating length using distance formula
    public function CalculateLength(){
        $distance = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2)); 
        return round($distance, 2);      
    }  
}   
     $Line= new LineComparison();//create object of the class
     $Line->UserInput();//calling the function
     echo $Line->CalculateLength();
?>