<?php
session_start();
include('../cred.php');
$q = str_replace('"', '', trim($_POST['query']));
?>
<br>
<div class="container">
<h5 id="noSearchResultsHeading">Search results for "<?php echo htmlspecialchars($q); ?>"</h5><br>
<input id='q' value="<?php echo $q; ?>" type="hidden" oninput="">
<ul class="collection" id="search_results">
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM roomnames WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c1 = $users->rowCount();
foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
            <a href='javascript:void(0)'><b>". htmlspecialchars(($row["name"])). "</b></a>
            <br><span>Room</span>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM products WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c2 = $users->rowCount();
foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "")." onclick=\"change_title('Kitchen');sm_page('Contact');AJAX_LOAD('#Contact', './rooms/kitchen/view.php');\">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."
            <a href='javascript:void(0)'><b>". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Kitchen</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM garage WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c3 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <b><a href='javascript:void(0)' onclick=\"change_title('Garage');sm_page('About');AJAX_LOAD('#About', './rooms/garage/view.php')\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Garage</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM bedroom WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c4 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <b><a href='javascript:void(0)' onclick=\"change_title('Bedroom');sm_page('Home');AJAX_LOAD('#Home', './rooms/bedroom/view.php')\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Bedroom</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM bathroom WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c5 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <b><a href='javascript:void(0)'onclick=\" change_title('Bathroom');sm_page('bathroom');AJAX_LOAD('#bathroom', './rooms/bathroom/view.php')\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Bathroom</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM family WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c6 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <b><a href='javascript:void(0)' onclick=\"change_title('Family Room');sm_page('family');AJAX_LOAD('#family', './rooms/family/view.php')\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Family Room</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM storageroom WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c7 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <b><a href='javascript:void(0)' onclick=\"change_title('Storage Room');sm_page('storage');AJAX_LOAD('#storage', './rooms/storage/view.php')\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Storage Room</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM laundry WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c8 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <a href='javascript:void(0)'><b>". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Laundry</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM dining_room WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c9 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
        ".($row['star'] == "1" ? '<i class="material-icons-round right">star</i>' : "")."

            <a href='javascript:void(0)'><b>". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Dining Room</span>
            <br>
            ".($row["price"] !== "No Category Specified" && !empty($row["price"]) && isset($row["price"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars(decrypt($row['price'])).'</div>' : "")."</a>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM grocerylist WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c10 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
            <a href='javascript:void(0)'><b>". htmlspecialchars(($row["name"])). "</b>
            <br><span>Grocery List</span>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM roomnames WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c11 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
            <a href='javascript:void(0)'><b>". htmlspecialchars(($row["name"])). "</b>
            <br><span>Room</span>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM todo WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c4 = $users->rowCount();

foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
            <b><a href='javascript:void(0)' onclick=\"sm_page('News');\">". htmlspecialchars(($row["name"])). "</b>
            <br><span>Todo</span>
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>
<?php
try
{
$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM custom_room_items WHERE login_id=" . $_SESSION['id'];
$users = $dbh->query($sql);
$c12 = $users->rowCount();
foreach ($users as $row)
{
print "<li class=\"collection-item\" ".(decrypt($row['name']) == $_POST['query'] ? 'style="border-left: 4px solid #1b5e20 !important"' : "").">
            <b><a href='javascript:void(0)' onclick=\"load_croom('" . str_replace('"', '', str_replace("'", "", $row['price'])) . "', '" . str_replace('"', '', str_replace("'", "", decrypt($row['name']))) . "')\"\">". htmlspecialchars(decrypt($row["name"])). "</b>
            <br><span>Custom room Item</span>
            <br>
            ".($row["label"] !== "No Category Specified" && !empty($row["label"]) && isset($row["label"]) ? '<div class="chip" style="margin-top: 5px;">'.htmlspecialchars($row['label']).'</div>' : "")."
       </li>";
}
$dbh = null;
}
catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
?>

</ul>
</div>
<div style="display:none" id="noSearchResultsContainer">
    <div class="container">
        <div class="container center">
            <img src="https://i.ibb.co/7y844v7/acc336e913e7b393292965434d5a48bf.png" width="100%">
            <h5><b>No results found</b></h5>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        qq();
    }, 400)
</script>