<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body bgcolor="FFCCCC"> 
 <form action="FilterStock.php" method="post">
 
<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody>
 <tr>
<td>
   
<?PHP
include_once 'openDB.php';
$SQL = "SELECT  DISTINCT Description FROM stock";
$result = mysqli_query($conn, $SQL);

 
 Print "<select name='Items' id = 'cbo_Items'>";
while ($db_field = mysqli_fetch_array($result)) {
    print "<option value='" . $db_field['Description'] . "'>" . $db_field['Description'] .  "</option>";
    
}


  



?>
</td>
</tr>
<tr>

<td><input name="ItemList" type="submit" value="Item List">   
</td>
</tr>

</tbody></table>


</form>
 
 </body>
 </html>