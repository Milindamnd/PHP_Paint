<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'db.php';
$res=  mysql_query('select * from item');

//while($row=mysql_fetch_array($res)){$itemName=$row['iName'];}
  //  $unitPrice=$row['unitP'];
    

echo '</select>';
?>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <div id="div1">
            <div id="div2">
                <div id="nav_wrapper">
                    <head><h1>Colour Bank</h1></head>
                    <ul>
                        <li><a href="#" class="active">Home</a>
                            <ul>
                                <li><a href="#">Customer</a>
                                    <ul>
                                       <li><a href="customerReg.php">Customer Registration</a></li>
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
                <h1>Purchase Order</h1>
            </div>
            <div id="div4">
                  <div>
                      <label>PO Number </label><input type="text" name="num" id="num" size="30" >
                </div>
                <div>
                    <label>Date </label><input type="text" name="date" id="date" size="30" >
                </div>
                <div>
                    <label>Ref ID </label><input type="text" name="ref" id="ref" size="30">
                </div>
                <div>
                    <label>Credit Terms </label><input type="text" name="creditT" id="creditT" size="30">
                </div>
                <div>
                        <label>Delivered to </label><textarea name="Delivered" id="Delivered" rows="4" cols="30"></textarea>
                    </div>
                    <div>
                        <label>Item </label><select style="width: 200px;height: 40px"><?php while($row=mysql_fetch_array($res)){?><option><?php echo $row['iName'];?></option> <?php } ?>
                        </select>
                    </div>
                    <div>
                        <label>Unit Price</label><input type="text" name="unitP" id="unitP" size="40" >
                    </div>
                <div>
                        <label>QTY</label><input type="text" name="qty" id="qty" size="40" >
                    </div>
                <div>
                        <label>Amount</label><input type="text" name="amount" id="amount" size="40" >
                    </div>
        </div>
        <?php
// put your code here
        ?>
    </body>
</html>
