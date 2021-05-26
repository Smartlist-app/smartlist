<?php 
session_start();
include("../../cred.php");
?>
<br><br> 
<div class="container">
    <form action="https://smartlist.ga/dashboard/rooms/kitchen/addx.php" method="POST" id="kitchen_add_form">
        <a href="./scan/live" target="_blank" class="btn right blue-grey darken-2 waves-effect waves-light">Scan Items</a><h5>Add an item (Kitchen)</h5> 
        <div class="input-field">
            <label>Name</label>
            <input type="text" name="name" class="validate" id="addKitchenName" data-length="150" autofocus autocomplete="off" required>
        </div>
        <div class="input-field">
            <label>Quantity</label>
            <input type="text" name="qty" class="validate" autocomplete="off" data-length="20" required>
        </div>
        <div class="input-field">
            <select name="price"> 
            <option disabled>Categories</option>
                <option value="Pots and Pans">Pots/Pans</option> 
                <option value="Fruits, Veggies, etc." selected>Fruits, Veggies, etc.</option> 
                <option value="Cutlery">Cutlery</option> <option value="Bottles and Cups">Bottles and Cups</option> 
                <option value="Bowls and Plates">Bowls and Plates</option> 
                <option disabled>Other</option>
                <?php
                try
                {
                    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $sql = "SELECT * FROM labels WHERE login= " . $_SESSION['id'];
                    $users = $dbh->query($sql);
                        foreach ($users as $row){
                            ?>
                            <option value=<?=json_encode($row['name'])?>> <?=htmlspecialchars($row['name'])?> </option>
                            <?php
                    }
                        $dbh = null;
                }
                catch(PDOexception $e)
                {
                    echo "Error is: " . $e->etmessage();
                }
            ?>
            </select>
        </div> 

        <button class="btn blue-grey darken-3">
            Submit
        </button>
    </form>
</div>
<script>
 $(document).ready(function() {
    $('.validate').characterCounter();
  });
    $("#kitchen_add_form").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        sm_page('ajax_loader');
        var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function(data) {
                sm_page('addkitchen');
                document.getElementById('kitchen_add_form').reset();
                document.getElementById('addKitchenName').focus();
                M.toast({html: 'Added item successfully. You can keep adding more'});
            }
        });
    });
    $('select').formSelect();
</script>