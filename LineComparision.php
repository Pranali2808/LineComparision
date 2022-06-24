<?php
//UC3:Calculate the length of two lines using co-ordinates and compare lines 
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
    public function LengthOfLine(){
        $distance = sqrt(pow(($this->x2 - $this->x1), 2) + pow(($this->y2 - $this->y1), 2)); 
        return round($distance, 2);      
    } 
     //function for comparision of two lines
     public function LineEquality($length1,$length2){
        if($length1 == $length2){
            echo "Two lines are equal";
        }
        elseif($length1 > $length2)
        {
            echo "Line1 is greater than Line2";
        }
        else{
            echo " Line2 is grater tha Line1";
        }
    } 
}  
     $CalculateLength = new LineComparison();
     $CalculateLength->UserInput();
     $length1 = $CalculateLength->LengthOfLine();
     echo "Length1 of line is : " . $length1 . "\n";

     $CalculateLength->UserInput();
     $length2 = $CalculateLength->LengthOfLine();
     echo "Length2 of line is : " . $length2 . "\n";
     $CalculateLength->LineEquality($length1,$length2);

     ?>