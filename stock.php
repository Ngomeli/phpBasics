<html>
<head>
<title>Stock</title>
 <form action="Stock.php" method="post">  
  
    <table border="=0"><tr>
  <td> Stock ID:</td>
<td><input type = "text" name="txtStockID" size="10"></td>
</tr>
 <tr>
  <td> Item Name: </td>
  <td> <input type = "text" name = "txtItemName" size="30"></td>
 </tr>
 <tr>
 <td>Description:</td>
 <td> <input type ="text" name = "txtDescription" size = "30"> </td>
 </tr>
  <td>Size:</td>
<td><input type = "text" name = "txtSize" size = "30"></td>
</tr>
 <tr>
  <td>Category</td>
  <td> <input type = "text" name = "txtCategory" size = "30"></td>
 </tr>
   
</table>
<P>
<INPUT type = "submit" name = "saveDetails" value = "submit">  
<P>

</form>

<?php
include_once 'openDB.php';
if (isset($_POST['saveDetails'])) {

    
	$ID = $_POST['txtStockID'];
	$ItemName = strtoupper($_POST['txtItemName']);
	$Description =strtoupper($_POST['txtDescription']) ;
    $Size = $_POST['txtSize']; 
    $Category = $_POST['txtCategory']; 
   
    
$SQL = "INSERT INTO stock (StockID,ItemName,Description,Size,Category) VALUES ('$ID','$ItemName','$Description','$Size','$Category')";
if(mysqli_query($conn,$SQL)){
  echo "New record has been added successfully !";
} else {
  echo "Error: ". $SQL . ":-". mysqli_error($conn);
}
mysqli_close($conn); 
}                    
?>