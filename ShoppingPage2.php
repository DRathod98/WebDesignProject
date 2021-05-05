<!DOCTYPE html>
<?php
session_start();
?>
<html>
<header>
<?php include("DataPage.php"); ?>
<script src="SiteJs.js"></script>
</header>
<body>
Choose goods which you are interested in:
<table>
<tr>
<th class="header2">Headphones:</th>
</tr>
<tr>
<td>EarPods</td>
<td><input type = "number" name = "podsQuantity" value = "0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Beats</td>
<td><input type = "number" name = "beatsQuantity" value ="0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Sennheiser</td>
<td><input type = "number" name = "sennQuantity" value = "0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
</table>
<script>
    document.addEventListener("DOMContentLoaded", function(event){
    getRequest("podsQuantity");
    getRequest("beatsQuantity");
    getRequest("sennQuantity");
})
</script>
</body>
</html>