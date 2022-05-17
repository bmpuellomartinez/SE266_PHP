
<?php
    //Here are all the fields, savings, checking, and account
    include_once "checking.php";
    include_once "savings.php";
    require_once "account.php";
    
    
    $newcheckings_update = 1000;
    $newsavings_update = 5000;

    if(isset($_POST['checkingBalance'])){
        $newcheckings_update = $_POST["checkingBalance"];
    }

    if(isset($_POST["savingsBalance"])){
        $newsavings_update = $_POST['savingsBalance'];
    }

    $SavingsBalance = new SavingsAccount('S123', $newsavings_update, '03-20-2020');
    $CheckingBalance = new CheckingAccount('C123', $newcheckings_update, '12-20-2020');

    if (isset ($_POST['withdrawChecking'])) 
    {
        $CheckingBalance->withdrawal(filter_input(INPUT_POST, 'checkingWithdrawAmount'));
        $newcheckings_update = $CheckingBalance->getBalance();
    } 
    else if (isset ($_POST['depositChecking'])) 
    {
        $CheckingBalance->deposit(filter_input(INPUT_POST, 'checkingDepositAmount'));
        $newcheckings_update = $CheckingBalance->getBalance();
    } 
    else if (isset ($_POST['withdrawSavings'])) 
    {
        $SavingsBalance->withdrawal(filter_input(INPUT_POST, 'savingsWithdrawAmount'));
        $newsavings_update = $SavingsBalance->getBalance();
    } 
    else if (isset ($_POST['depositSavings'])) 
    {
        $SavingsBalance->deposit(filter_input(INPUT_POST, 'savingsDepositAmount'));
        $newsavings_update = $SavingsBalance->getBalance();
    } 
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM-BMP</title>
    <style type="text/css">
        body {
            margin-left: 120px;
            margin-top: 50px;
        }
       .wrapper {
            display: grid;
            grid-template-columns: 300px 300px;
        }
        .account {
            border: 1px solid black;
            padding: 10px;
        }
        .label {
            text-align: right;
            padding-right: 10px;
            margin-bottom: 5px;
        }
        label {
           font-weight: bold;
        }
        input[type=text] {width: 80px;}
        .error {color: red;}
        .accountInner {
            margin-left:10px;margin-top:10px;
        }
        .p{
            style="color:red;
        }
       
    </style>
</head>
<body>
    <!--Berta M. Puello-Martinez -->
    <!--Instructor: Timothy Henry, PhD, PMP -->
    <!--Course: PHP -->
<form method="post">
    <!-- Header -->
    <h1>ATM</h1>
        <!-- Wrapper div -->
        <div class="wrapper">
            
            <div class="account">
                <!-- This is for the checking acount and all the fields -->
                <?php
                    echo $CheckingBalance->getAccountDetails();
                    echo "<br>";
                ?>
                <h2>Checking Account</h2>                    
                    <input type="hidden" name="checkingAccountId" value="C123" />
                    <input type="hidden" name="checkingDate" value="12-20-2019" />
                    <input type="hidden" name="checkingBalance" value="<?=$newcheckings_update?>" />
                    
                    <div class="accountInner">
                        <input type="text" name="checkingWithdrawAmount" value="" />
                        <input type="submit" name="withdrawChecking" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="checkingDepositAmount" value="" />
                        <input type="submit" name="depositChecking" value="Deposit" /><br />
                    </div>
            
            </div>

            <div class="account">
                <!-- This is for the savings account and all the fields! -->
                <?php
                    echo $SavingsBalance->getAccountDetails();
                    echo "<br>";
                ?>
                <h2>Savings Account</h2>
                    <input type="hidden" name="savingsAccountId" value="S123" />
                    <input type="hidden" name="savingsDate" value="03-20-2020" />
                    <input type="hidden" name="savingsBalance" value="<?=$newsavings_update?>" />
                    
                    <div class="accountInner">
                        <input type="text" name="savingsWithdrawAmount" value="" />
                        <input type="submit" name="withdrawSavings" value="Withdraw" />
                    </div>
                    <div class="accountInner">
                        <input type="text" name="savingsDepositAmount" value="" />
                        <input type="submit" name="depositSavings" value="Deposit" /><br />
                    </div>
            
            </div>
            
        </div>
        <!-- Footer -->
        <?php include __DIR__ . '/../footer.php'; ?>
    </form>

</body>
</html>
