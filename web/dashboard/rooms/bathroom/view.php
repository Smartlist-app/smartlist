<?php session_start(); include('../../cred.php');?>

<div class="container">
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM bathroom WHERE login_id=" . $_SESSION['id'] . " OR login_id= " . $_SESSION['syncid'];
$users = $dbh->query($sql);
$bath_count = $users->rowCount();
if ($bath_count > 0)
{
}
else
{
echo "<div id='bathroom_table_var' style='height: 90vh'><img alt='image' src='https://res.cloudinary.com/smartlist/image/upload/v1615853475/gummy-coffee_300x300_dlc9ur.png'width='300px' style='display:block;margin:auto;'><br><p class='center'>No items here! Why not try adding something...</p></div>";
}
if ($bath_count > 0)
{
echo '<table class="table"  id="bathroom_table">
<tr>
<td>Name</td>
<td>Quantity</td>
</tr>';
foreach ($users as $row)
{
echo "<tr id='bathroomtr_" . $row['id'] . "' onclick=\"item('" . $row['id'] . "', '" . $row['name'] . "', '" . $row['qty'] . "', '" . $row['price'] . "', 'https://smartlist.ga/dashboard/rooms/bathroom/', 'bathroom', '" . $row['star'] . "')";
if ($row['star'] == 1)
{
echo "\" style='border-left: 3px solid #f57f17'>";
}
else
{
echo "\">";
}
print "<td>" . $row["name"] . "</td><td>" . $row["qty"] . "";
if ($row['login_id'] != $_SESSION['id'])
{
echo "<span clas='badge red' style='float:right;color:white;padding: 4px;border-radius: 2px;background: #00695c !Important'>SYNCED</span>";
}
echo "</td></tr>";
}
$dbh = null;
}
else
{
echo "<img alt='image' src='https://res.cloudinary.com/smartlist/image/upload/v1615853475/gummy-coffee_300x300_dlc9ur.png'width='300px' style='display:block;margin:auto;'><br><p class='center'>No items here! Why not try adding something...</p>";
}
}
catch(PDOexception $e)
{
echo "Error is: " . $e->etmessage();
}
?>
</table>
</div>