<?php
include_once 'db.php';
$nameError = $unitPError = $qtyError= $itemSuccess="";
if (isset($_POST['iCode'])&& isset($_POST['iName'])&& isset($_POST['description'])&& isset($_POST['unitP'])&&isset($_POST['qty'])) {
       
    if (!empty($_POST['iName']) &&!empty($_POST['unitP']) &&!empty($_POST['qty'])) {
        $iCode=$_POST['iCode'];
       $iName=$_POST['iName'];
       $description=$_POST['description'];
       $unitP=$_POST['unitP'];
       $qty=$_POST['qty'];
       
       $sql = "INSERT INTO item VALUES('$iCode','$iName','$description','$unitP','$qty')";
        if (mysql_query($sql)) {
            $itemSuccess = 'Success';
          $iName = $description = $unitP = $qty = "";
        } else {
            echo 'Failed' . mysql_error();
            }
       }else{
           if(empty($_POST['iName'])){
        $nameError = 'Name is Required';
        }if (empty($_POST['unitP'])){
        $unitPError = 'Unit Price is Required';
        }if (empty($_POST['qty'])){
        $qtyError = 'QTY is Required';
        
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
                <h1>Add Item</h1>
            </div>
            <form action="addItem.php" method="POST">
            <div id="div4">
                
                <div>
                    <label>Code </label><input type="text" name="iCode" id="iCode" size="30" >
                </div>
                <div>
                    <label>Item Name <font color="red" size="4">*</font></label><input type="text" name="iName" id="iName" size="60" value="<?php if(!empty($_POST['iName'])){echo $_POST['iName'];}?>">
                    <br><span class="error"><?php echo $nameError; ?></span>
                </div>
                <div>
                    <label>Description </label><textarea name="description" id="description" rows="4" cols="30" placeholder="<?php if(!empty($_POST['description'])){echo $_POST['description'];}?>"></textarea>
                </div>
                <div>
                    <label>Unit Price <font color="red" size="4">*</font> </label><input type="text" name="unitP" id="unitP" size="40" value="<?php if(!empty($_POST['unitP'])){echo $_POST['unitP'];}?>" >
                    <br><span class="error"><?php echo $unitPError; ?></span>
                    </div>
                <div>
                    <label>QTY <font color="red" size="4">*</font> </label><input type="text" name="qty" id="qty" size="40" value="<?php if(!empty($_POST['qty'])){echo $_POST['qty'];}?>" >
                    <br><span class="error"><?php echo $qtyError; ?></span>
                    <br>
                    </div>
                    
              <div id="button">
                    <input type="submit" name="add" value="Add" id="add">
                    <input type="submit" name="reset" value="Reset" id="reset">
                </div>
                
                <?php echo $itemSuccess;?>

            </div>
                
            </form>
        </div>
            
    </body>
</html>