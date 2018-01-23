<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$nameError = $creditLError = $creditPError = $mobError = $success="";

include_once 'db.php';
if (isset($_POST['cCode'])&& isset($_POST['name'])&& isset($_POST['address'])&& isset($_POST['creditL'])&&isset($_POST['creditP'])
       && isset($_POST['note']) && isset($_POST['tele'])&& isset($_POST['mob']) && isset($_POST['fax']) && isset($_POST['email'])) {
if (!empty($_POST['name']) &&!empty($_POST['creditL']) &&!empty($_POST['creditP']) &&!empty($_POST['mob'])) {
$code = $_POST['cCode'];
$name = $_POST['name'];
$address = $_POST['address'];
$creditL = $_POST['creditL'];
$creditP = $_POST['creditP'];
$note = $_POST['note'];
$tele = $_POST['tele'];
$mob = $_POST['mob'];
$fax = $_POST['fax'];
$email = $_POST['email'];

$sql = "INSERT INTO customer VALUES('$code','$name','$address','$creditL','$creditP','$note','$tele','$mob','$fax','$email')";
if (mysql_query($sql)) {
$success = 'Success';
$name = $address = $creditL = $creditP = $note = $tele = $mob = $fax = $email = "";
} else {
echo 'Failed' . mysql_error();
}
} else {
    if(empty($_POST['name'])){
        $nameError = 'Name is Required';
    }if (empty($_POST['creditL'])){
        $creditLError = 'Credit Limit is Required';
    }if (empty($_POST['creditP'])){
        $creditPError = 'Credit Period is Required';
    }if(empty($_POST['mob'])){
        $mobError = 'Mobile is Required';
    }
}
}
?>
<html> 

    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>

        <div id="div1">
            <div id="div2">
                <div id="nav_wrapper">
                    <head><h1>Colour Bank</h1></head>
                    <ul>
                        <li><a href="#">Home</a>
                            <ul>
                                <li><a href="#">Customer</a>
                                    <ul>
                                        <li><a href="customerReg.php" class="active">Customer Registration</a></li>
                                        <li><a href="#">Credit Enhancement</a></li>
                                        <li><a href="#">Edit Customer</a></li>
                                        <li><a href="#">Block Customer</a></li> 
                                    </ul>
                                </li><li><a href="#">Supplier</a>
                                    <ul>
                                        <li><a href="#">Supplier Registration</a></li>
                                        <li><a href="#">Edit Supplier</a></li>
                                        <li><a href="#">Block Supplier</a></li>
                                    </ul>
                                </li><li><a href="#">Stock</a>
                                   
                                    <ul>
                                        <li><a href="addItem.php">Add Item</a></li>
                                        
                                    </ul>
                                </li><li><a href="#">Representative</a>
                                </li><li><a href="#">User</a>
                                    <ul>
                                        <li><a href="#">User Registration</a></li>
                                        <li><a href="#">User Allocation</a></li>
                                        <li><a href="#">Block User</a></li>
                                        <li><a href="#">Edit User</a></li>
                                    </ul>
                                </li>
                            </ul> 
                        </li>



                    </ul>
                </div>
            </div>
            <div id="div3">
                <h1>Customer Registration</h1>
            </div>
            <form id="custForm"action="customerReg.php" method="POST">
                <div id="div4">

                    <div>
                        <label>Code</label><input type="text" name="cCode" id="cCode" size="30">
                    </div>
                    <div>
                        <label>Name <font color="red" size="4">*</font></label><input type="text" name="name" id="name" size="60"
                         value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>"><br><span class="error"><?php echo $nameError; ?></span>

                    </div>
                    <div>
                        <label>Address </label><textarea name="address" id="address" rows="4" cols="30" 
                        placeholder="<?php if(!empty($_POST['address'])){echo $_POST['address'];}?>"></textarea>
                    </div>
                    <div>
                        <label>Credit Limit<font color="red" size="4">*</font> </label><input type="text" name="creditL" id="creditL" size="40" 
                        value="<?php if(!empty($_POST['creditL'])){echo $_POST['creditL'];}?>"><br><span class="error"><?php echo $creditLError; ?></span>
                    </div>
                    <div>
                        <label>Credit Period <font color="red" size="4">*</font></label><input type="text" name="creditP" id="creditP" size="40" 
                        value="<?php if(!empty($_POST['creditP'])){echo $_POST['creditP'];}?>" ><br><span class="error"><?php echo $creditPError; ?></span>
                    </div>
                    <div>
                        <label>Note</label><textarea name="note" id="note" rows="4" cols="30"
                        placeholder="<?php if(!empty($_POST['note'])){echo $_POST['note'];}?>"></textarea>
                    </div>
                    <div>
                        <label>Contact </label>
                    </div>
                    <div id="div5">
                        <div>
                            <label>Telephone </label><input type="text" name="tele" id="tele" size="30" value="<?php if(!empty($_POST['tele'])){echo $_POST['tele'];}?>">
                        </div>
                        <div>
                            <label>Mobile<font color="red" size="4">*</font> </label><input type="text" name="mob" id="mob" size="30" 
                        value="<?php if(!empty($_POST['mob'])){echo $_POST['mob'];}?>"><span class="error"><br><?php echo $mobError; ?></span>
                        </div>
                        <div>
                            <label>Fax </label><input type="text" name="fax" id="fax" size="30" value="<?php if(!empty($_POST['fax'])){echo $_POST['fax'];}?>">
                        </div>
                        <div>
                            <label>Email </label><input type="text" name="email" id="email" size="40" value="<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>">
                        </div>
                        <div id="tab">
                    <table id="tbid">
                        <tr>
                            <td>Code</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Tele</td>
                            <td>Mobile</td>
                            <td>Fax</td>
                            <td>Email</td>
                        </tr>
                    </table>
                </div>
                        
                    </div>
                    <div id="button">
                        <input type="submit" name="add" value="Add" id="add">
                        <input type="submit" name="reset" value="Reset" id="reset">
                    </div>
                   
                    <div><span class="success"><?php echo $success;?></span></div>
                  

                </div>
            </form>

        </div>
    </body>
</html>
                    
     