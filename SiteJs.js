function changedQuantity(value, name)
{
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "ProcessPage.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("value="+value+"&name="+name);

}

function getRequest(name)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementsByName(name)[0].value = this.responseText;
        }
    };
    xhttp.open("GET", "ProcessPage.php?name=" + name, true);
    xhttp.send();
}


