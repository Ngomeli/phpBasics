<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
    <form action="customer.php" method="POST">
    <table border="=0"><tr>
  <td> Customer ID:</td>
<td><input type="text" name="txtCustomerID" size="10"></td>
</tr>
 <tr>
  <td> Full Names: </td>
  <td> <input type = "text" name = "txtFullNames" size="30"></td>
 </tr>
 <tr>
 <td>Address:</td>
 <td> <input type ="text" name = "txtAddress" size = "30"> </td>
 </tr>
 <tr>
 <td>Location:</td>
 <td> <input type ="text" name = "txtLocation" size = "30"> </td>
 </tr>
  <td>Gender:</td>
<td><input type = "text" name = "txtGender" size = "30"></td>
</tr>
 <tr>
  <td>Credit Limit:</td>
  <td> <input type = "text" name = "txtCreditLimit" size = "30"></td>
 </tr>
 </table>
 <P>
<INPUT type = "submit" name = "saveDetails" value = "submit">  
<P>
    </form>
    <?php
include_once 'openDB.php';
if (isset($_POST['saveDetails'])) {

    
	$ID = $_POST['txtCustomerID'];
	$FullNames = strtoupper($_POST['txtFullNames']);
	$Address =strtoupper($_POST['txtAddress']) ;
    $Location = $_POST['txtLocation']; 
    $Gender = $_POST['txtGender']; 
    $CreditLimit = $_POST['txtCreditLimit'];
   
    
$SQL = "INSERT INTO customer (CustomerID,FullNames,Address,Location,Gender,CreditLimit) VALUES ('$ID','$FullNames','$Address','$Location','$Gender',$CreditLimit)";
if(mysqli_query($conn,$SQL)){
  echo "New record has been added successfully !";
} else {
  echo "Error: ". $SQL . ":-". mysqli_error($conn);
}
mysqli_close($conn); 
}                    
?>
</body>
</html>