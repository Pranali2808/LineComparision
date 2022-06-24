<?php
/*UC2:Calculate the length of two lines by co-ordinates using distance formula.
check that two lines are equal or not
*/
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
     //function to check the equality of two lines
     public function LineEquality($length1,$length2){//passing two parameter
        if($length1 == $length2){
            echo "Two lines are equal";
        }
        else{
            echo "Two lines are not equal";
        }
    } 
}  
     $CalculateLength = new LineComparison();//create object
     $CalculateLength->UserInput();
     $length1 = $CalculateLength->LengthOfLine();
     echo "Length of line1 is : " . $length1 . "\n";

     $CalculateLength->UserInput();
     $length2 = $CalculateLength->LengthOfLine();
     echo "Length of line2 is : " . $length2 . "\n";
     $CalculateLength->LineEquality($length1,$length2);

     ?>