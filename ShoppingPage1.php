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
<th class="header1">Phones:</th>
</tr>
<tr>
<td>iPhone</td>
<td><input type = "number" name = "iphoneQuantity" value ="0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Galaxy S9</td>
<td><input type = "number" name = "galaxyQuantity" value = "0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Lenovo</td>
<td><input type = "number" name = "lenovoQuantity" value = "0"min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
</table>
<script>
    document.addEventListener("DOMContentLoaded", function(event){
    getRequest("iphoneQuantity");
    getRequest("galaxyQuantity");
    getRequest("lenovoQuantity");
})
</script>
</body>
</html>