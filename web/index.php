<?php

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="formoid_files/formoid1/style.css" type="text/css" /> <------------------------------------------------------------ link to external css file should be put in <head> section of page
<script type="text/javascript" src="formoid_files/formoid1/jquery.uniform.min.js"></script> <---------------------------------------------- link to js file should be placed after css link
</head>
<body>
<!-- Start Formoid form-->
<form action="" name="contactUser" class="myForm1" title="Contact Registered Users">
    <legend>Send Email to Registered Users</legend> <----------------------------------------------------------------------------------------------- use a legend type class for Title of form
    <label class="title">Registered User ID #</label>
    <input type="text" name="userID" size="2"> <---------------------------------------------------------------------------------------------------- give the creator the option of determining the size of the text field
    <br /> <------------------------------------------------------------------------------------------------------------------------------------------------------- current <br /> element and not <br>
    <label class="title">Select ALL Registered Users</label>
    <input type="checkbox" name="selectALL" value=""> <----------------------------------------------------------------------------------------- leave value blank, for this could be a simple check box nest to the label
    <br />
    <label class="title">Message</label>
    <br />
    <textarea name="message" cols="20" rows="5"></textarea>
    <br />
    <input type="button" name="reset" value="Reset Form">  <input type="submit" name="submit" value="Submit"> <--- input type when defined as "button" should have options of submit                                                                                                                                                                                                                                        or reset
</form>
<p class="frmd"><a href="http://formoid.com/">PHP CONTACT FORM HTML Formoid.com 1.1</a></p>
<!-- Stop Formoid form-->
</body>
</html>
?>
