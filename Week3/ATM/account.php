<?php
	// This is the base class for checking and savings accounts
	// It is declared **abstract** so that it can not be instantiated
	// Child classes must be derived that 
	// implement the withdrawal and getAccountDetails methods
	
	/* Note:
		You should implement all other methods in the class
	*/
	
    abstract class Account 
    {
        protected $accountId;
        protected $balance;
        protected $startDate;
        
        public function __construct ($id, $bal, $startDt) 
        {
           // write code here
           $this ->accountId = $id;
           $this ->balance = $bal;
           $this ->startDate = $startDt;

        } // end constructor
        
        // This funtion is making sure to let the users know that the entry is not empty or invalid
        public function deposit($amount) 
        {
            // write code here
            if($amount == ""){

                echo "<p style='color:red;'> ERROR: Please! Enter the amount.</p>";
                return false;
            }
            else if(($this->balance + $amount) >= 0){

                $this->balance = $this->balance + $amount;
                return true;

            }
            
        } // end deposit

        abstract public function withdrawal($amount);
        // This is an abstract method. 
        // This method must be defined in all classes
        // that inherit from this class

        public function getStartDate() 
        {
            // write code here
            return $this->startDate;

        } // end getStartDate

        public function getBalance() 
        {
            // write code here
            return $this->balance;

        } // end getBalance

        public function getAccountId() 
        {
            // write code here
            return $this->accountId;

        } // end getAccountId

        // Display AccountID, Balance and StartDate in a nice format
        protected function getAccountDetails()
        {
            // write code here
            return "<li>Account ID: " .$this->accountId . "</li><li>Balance: $" .$this->balance . "</li><li>Opening Date: " .$this->startDate . "</li>"; 
        } // end getAccountDetails
        
    } // end account

?>
