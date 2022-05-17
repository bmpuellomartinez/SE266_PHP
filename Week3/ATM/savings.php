<?php

include_once ("./account.php");
 
    class SavingsAccount extends Account 
    {
        
        //This function is making sure that the correct amount is being entered.   
        public function withdrawal($amount) 
        {
            // write code here. Return true if withdrawal goes through; false otherwise
            if($amount == ""){
                
                echo "<p style='color:red;'>ERROR: Please! Enter the amount .</p>";
                
            }
            else if(($this->balance - $amount) >= -200){

                //This function is making sure that the limit amount did not exceeded.
                $this->balance = $this->balance - $amount;
                return true;
    
            }
            else{
                echo "<p style='color:red;'>Error: This entry exceeded the limit amount.</p>";
                

            }
            

        } //end withdrawal

        public function getAccountDetails() 
        {
           // look at how it's defined in other class. You should be able to figure this out ...
            $str = "<h2>Savings Account</h2>";
            $str .= parent::getAccountDetails();

            return $str;
        } //end getAccountDetails
        
    } // end Savings

// The code below runs everytime this class loads and 
// should be commented out after testing.

    // $savings = new SavingsAccount('S123', 5000, '03-20-2020');
    
    // echo $savings->getAccountDetails();
    
?>
