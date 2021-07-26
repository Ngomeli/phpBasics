<head>
<style type="text/css">
.myTable { background-color:#c1dbfc;border-collapse:collapse;color:#000;font-size:18px; }
.myTable th { background-color:#0090ec;color:white;width:15%; }
.myTable td, .myOtherTable th { padding:2px;border:0; }
.myTable td { border-bottom:1px dotted #7B68EE; }
</style>
  </head>
<!-- End Styles -->
 <body bgcolor="003974">


<form action="stock.php"  method="post">    
 <input type="submit" name="Filter" value="Return"/> 
</form> 

<?php
if (isset($_POST['ItemList'])) {
     $VarItem = $_POST['Items'];
include_once 'openDB.php';

$SQL = "SELECT * FROM stock WHERE Description='$VarItem'";
$result = mysqli_query($conn,$SQL);
   print' <table class="myTable" align=center>'; 
print'<th>Stock ID</th><th>Item Name</th><th>Description</th><th>Size</th><th>Category</th>';  
while ( $db_field = mysqli_fetch_assoc($result) ) {
print '<tr align=center>';
print '<td>'.$db_field['StockID'].'</td>';
print '<td align=left>'.$db_field['ItemName'].'</td>';  
print '<td>'.$db_field['Description'].'</td>';
print '<td>'.$db_field['Size'].'</td>';
print '<td>'.$db_field['Category'].'</td>';
print '</tr>'; 
}   
print '</table>';
}
// }
// else {
// print "Database NOT Found ";
// mysqli_close($db_handle);
// }                                                                                                                                                       

?>
