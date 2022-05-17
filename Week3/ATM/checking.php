<?php
 
 	include_once ("./account.php");
 
    class CheckingAccount extends Account 
    {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) 
        {
            // write code here. Return true if withdrawal goes through; false otherwise
            if($amount == ""){
                
                echo "<p style='color:red;'>ERROR: Please! Enter the amount.</p>";
            }
            else if(($this->balance - $amount) >= self::OVERDRAW_LIMIT){

                //This function is making sure that the limit amount did not exceeded.
                $this->balance = $this->balance - $amount;
                return true;
    
            }
            else{
                echo "<p style='color:red;'>Error: This entry exceeded the limit amount.</p>";
                return false;

            }

        } // end withdrawal

        //freebie. I am giving you this code.
        public function getAccountDetails() 
        {
            $str = "<h2>Checking Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }


    // The code below runs everytime this class loads and 
    // should be commented out after testing.
    
    // $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    // $checking->withdrawal(200);
    // $checking->deposit(500);
    
    // echo $checking->getAccountDetails();
    // echo $checking->getStartDate();
    
?>
