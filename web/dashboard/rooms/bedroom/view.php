<?php session_start(); include('../../cred.php');?>
<div class="container">
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM bedroom WHERE login_id=" . $_SESSION['id'] . " OR login_id= " . $_SESSION['syncid']. " ORDER BY id DESC";
$users = $dbh->query($sql);
$bedroom_row_count = $users->rowCount();
if ($bedroom_row_count > 0)
{
echo '<table class="table" id="bedroom_table">
<tr class="hover">
<td onclick="bedroom_table_sort(0)">Name</td>
<td onclick="bedroom_table_sort(1)">Quantity</td>
</tr>
';
foreach ($users as $row)
{
echo "<tr class='".($row['login_id'] !== $_SESSION['id'] ? "sync_tr" : "")."' data-id='".$row['id']."' id='bedroomtr_" . $row['id'] . "' onclick='item(this, ".($row['star'] == 1 ? 1 : 0).", ".json_encode(decrypt($row['price'])).", \"bedroom\")' ".($row['star'] == 1 ? "style='border-left: 3px solid #f57f17'" : "").">
    <td>".htmlspecialchars(decrypt($row['name']))."</td><td> ".htmlspecialchars(decrypt($row['qty']))." </td>
</tr>
";
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
  <script>
        $('#Home tr').contextmenu(function(event) {
        event.preventDefault();
        var e = this.getAttribute('data-id');
        modal_open(e, this, 'bedroom');
    });
function bedroom_table_sort(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("bedroom_table");
  switching = true;
  dir = "asc";
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
  </script>