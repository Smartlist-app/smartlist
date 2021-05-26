<?php
session_start();
include('../../../../cred.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable@3.5.14/dist/jspdf.plugin.autotable.js"></script>
<script>
function download() {
	const doc = new jsPDF();
	doc.setFontSize(22);
	var imgData = "data:image/png;base64,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";
	doc.addImage(imgData, 'PNG', 170, 10, 25, 25);
	doc.text("Smartlist", 15, 20);
	doc.setFontSize(13);
	doc.text("www.smartlist.ga", 15, 27);
	doc.setFontSize(10);
	doc.text("Inventory for custom room: #<?=$_GET['id'];?>:", 15, 34);

	doc.autoTable({
		head: [['Item Name', 'Quantity']],
		body: [
			<?php 
                try {
                $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $sql = "SELECT * FROM custom_room_items WHERE id=" . $_GET['id']. " AND login_id=".$_SESSION['id'];
                $users = $dbh->query($sql);
                foreach ($users as $row) {
                  echo "[".json_encode(decrypt($row['name'])).", ".json_encode(decrypt($row['qty']))."],";
                }
                $dbh = null;
              }
            catch(PDOexception $e) { echo "Error is: " . $e->etmessage(); }
            ?>
		],
		styles: { 
			theme: 'striped',
			cellPadding: 3,
		},
		startY: 50,
		headStyles: {
			fillColor: [200, 200, 200],
			textColor: [0, 0, 0]
		}
	})
	doc.save("inventory.pdf");
}
download()
</script>
<script>M.toast({html: "Downloaded file as inventory.pdf"})</script>