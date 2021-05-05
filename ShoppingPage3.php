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
<th class="header3">Accessories:</th>
</tr>
<tr>
<td>Screen Protector</td>
<td><input type = "number" name = "protectQuantity" value ="0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Phonecase</td>
<td><input type = "number" name = "caseQuantity" value = "0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
<tr>
<td>Flash memory</td>
<td><input type = "number" name = "memoryQuantity" value = "0" min = "0" oninput = "changedQuantity(this.value, this.name)"></td>
</tr>
</table>
<script>
    document.addEventListener("DOMContentLoaded", function(event){
    getRequest("protectQuantity");
    getRequest("caseQuantity");
    getRequest("memoryQuantity");
})
</script>
</body>
</html>