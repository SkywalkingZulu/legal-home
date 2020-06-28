<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <title>Thank you</title>
</head>

<body onload="myFunction()">
    <form method="POST" action="submit.php">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <center>
        <div class="top">Legal Circle</div>
        <br><br><br><br><br><br><br>
        </center>
        <center>
            <div class="thank">
                Thank you for contacting Legal Circle. One of our experienced lawyers will be in contacting with you shortly.
            </div>
        </center>
        <br><br>
        <center>
            <button name="btnBack">Back</button>
        </center>
    </form>
    </div>
    <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>

</html>