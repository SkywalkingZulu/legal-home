<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <title>Home</title>
</head>

<body onload="myFunction()">
   
    <form method="POST" action="submit.php">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <div class="top">Legal Circle</div>
        <br><br><br><br> <br>
        <div class="image-slider"><center><br><img src="image/legal.png" width="42%"></center></div>
        <br><br>
        <center><h1>About us</h1></center>
        <hr size="2px" color="#000">
        <center><p>Legal Circle is a legal consulting company that specialises in business-related law. We provide the following services:
<br>
(1) Contract drafting and reviewing.
            <br>
(2) Providing legal solutions in any commercial or business arrangements.
            <br>
(3) Company registrations.<br>
(4) Policy drafting and reviews for companies.<br>

There are three things that differentiate us from traditional law firms:
<br>
(1) We focus on giving you value rather than focusing on the time we spend on your matter. We therefore give you a firm quote for our services upfront.
<br>
(2) Our lawyers have experience working for multinational corporates as well as top South African law firms, which makes them skilled as providers of legal solutions, but also commercially sound in their approach. Therefore we do not only give you legal solutions, but we give you solutions that speak to your business and commercial needs as well. 
<br>
(3) Our fees are not prohibitive as we do not charge per hour but we give you a firm quote.</p></center>
             <br><br>
        <center><h1>Our Services</h1></center>
        <hr size="3px" color="#000">
        <br>
        <center>
        <div class="services">
            <div class="services-items">
               <p> Contract drafting</p>         
            </div>
            <div class="services-items">
                <p>Contract reviewing</p>
            </div>
            <div class="services-items">
                <p>Company registration</p>
            </div>
            <div class="services-items">
                <br>
                Legal Research
                <br>
            </div>
        </div>
        </center>
        <br>
        <center><h1>Contact Us</h1></center>
        <hr size="4px" color="#000">
       <center>
        <div class="services">
            <input type="text" placeholder="Name" name="txtName" required>
            <input type="text" placeholder="Surname" name="txtSurname" required>
            <input type="text" placeholder="Email Address" name="txtemail" required>
            <input type="number" placeholder="Contact number" name="txtNum" require>
        </div>
        <center>
            <textarea rows="10" placeholder="Type your query here......."></textarea>
        </center>
        <br>
       <center>
           <button name="btnSubmit">Submit</button>
       </center>
       <br>
       <br>
       <footer>
            <br>
            <center>Powered by <p class="logo"> Azania</p><br> Imagination is the new Genius <br><strong>Mxolisi Msweli</strong></center>
        </footer>
        </div>
    </form>
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
