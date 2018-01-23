<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <div id="div4">
                <div>
                    <label>Code </label><input type="text" name="cCode" id="cCode" size="30" >
                </div>
                <div>
                    <label>Name </label><input type="text" name="name" id="name" size="60">
                </div>
                <div>
                    <label>Address </label><textarea name="address" id="address" rows="4" cols="30"></textarea>
                </div>
                <div>
                        <label>Credit Limit </label><input type="text" name="creditL" id="creditL" size="40" >
                    </div>
                    <div>
                        <label>Credit Period </label><input type="text" name="creditP" id="creditP" size="40" >
                    </div>
                    <div>
                        <label>Note</label><textarea name="note" id="note" rows="4" cols="30"></textarea>
                    </div>
                <div>
                    <label>Contact </label>
                </div>
                <div id="div5">
                    <div>
                        <label>Telephone </label><input type="text" name="tele" id="tele" size="30" >
                    </div>
                    <div>
                        <label>Mobile </label><input type="text" name="mob" id="mob" size="30" >
                    </div>
                    <div>
                        <label>Fax </label><input type="text" name="fax" id="fax" size="30" >
                    </div>
                    <div>
                        <label>Email </label><input type="text" name="email" id="email" size="40" >
                    </div>

            </div>
                <div id="button">
                    <input type="submit" name="add" value="Add" id="add">
                    <input type="submit" name="reset" value="Reset" id="reset">
                </div>
        </div>
            </div>



        <?php
        // put your code here
        ?>
    </body>
</html>