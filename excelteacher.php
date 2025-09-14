<?php
require_once ('connect.php');
$sql = "SELECT * FROM teachers";
$result = mysqli_query($db_con, $sql);
$output ='<table>
<tr>
<th align = "center">id</th>
<th align = "center">Name</th>
<th align = "center">Email</th>
<th align = "center">Subject</th>
<th align = "center">Phone</th>
</tr>';
while ($excel = mysqli_fetch_assoc($result)) 
{
    $output.='<tr>
    <th align = "center">'.$excel['id'].'</th>
    <th align = "center">'.$excel['name'].'</th>
    <th align = "center">'.$excel['email'].'</th>
    <th align = "center">'.$excel['subject'].'</th>
    <th align = "center">'.$excel['phone'].'</th>
    </tr>';
}
$output.='</table>';
header('Content-Type:aplication/xls');
header('Content-Disposition:attachment;filename=excelteacher.xls');
echo $output;
?>