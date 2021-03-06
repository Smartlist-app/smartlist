<?php session_start(); ?>
<?php
// including the database connection file
include_once("connection.php");

if(isset($_POST['update']))
{
$id = $_POST['id'];

$name = $_POST['name'];
$qty = $_POST['qty'];
$price = $_POST['price'];

// checking empty fields
if(empty($name) || empty($qty) || empty($price)) {
if(empty($name)) {
echo "<font color='red'>Name field is empty.</font><br/>";
}

if(empty($qty)) {
echo "<font color='red'>Quantity field is empty.</font><br/>";
}

if(empty($price)) {
echo "<font color='red'>Price field is empty.</font><br/>";
}
} else {
//updating the table
$result = mysqli_query($mysqli, "UPDATE grocerylist SET name='$name', qty='$qty', price='$price' WHERE id=$id");

//redirectig to the display page. In our case, it is view.php
header("Location: view.php");
}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM grocerylist WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
$name = $res['name'];
$qty = $res['qty'];
$price = $res['price'];
}
?>
<html>
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<title>Edit Data</title>
</head>

<body>
<a href="index.php">Home</a> | <a href="view.php">View Products</a> | <a href="logout.php">Logout</a>
<br/><br/>

<form name="form1" method="post" action="edit.php">
<table border="0">
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name="qty" value="<?php echo $qty;?>"></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $price;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>