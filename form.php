<?php 

include "testHeader.php";
?>

<h2>HTML Forms</h2>
<form name="myForm" id="myForm" action="validate.php" onsubmit="return DisplayFormValues()" method="post">
  First name:<br>
  <input type="text" id="name" name="name">
  <br>
  Last name:<br>
  <input type="text" id="surname" name="surname">
  <br>
  Age:<br>
  <input type="text" id="age" name="age" >
  <br>
  User Name:<br>
  <input type="text" id="userName" name="userName" >
  <br>
  Password:<br>
  <input type="text" id="password" name="password" >
  <br>
  <br><br>
   <input type="button" value="Test" onclick="DisplayFormValues()" />
  <input type="submit"  "value="Submit">
</form> 

<p id="info">If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

<script src="js/alert.js"></script>
<script src="js/validate.js"></script>

<?php

include "testFooter.php";


 ?> 