<?php
$PageTitle = "Contact - ACS"; 
$nav_focus = "contact";
include_once('header.php');
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/validate.js"></script>
<script src="js/load.js"></script>
<div id="calloutcontact">
  <div id="calloutblock">
    <h2>Contact Us</h2>
	<div id="perror"><p id="error"></p></div>
	<table border="0">
	<tr>
	<td>
	<form name="contactform" action="mail.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
		<p>Full Name</p><input type="text" name="name" size="40" maxLength="30" required>
		<label id=fake_name> <input type="text" name="hide_name"></label>
		<p>Email</p> <input type="email" name="email" size="40" maxLength="30" required>
		<label id=fake_email> <input type="text" name="hide_email"></label>
		<p>Message</p><textarea name="message" rows="26" cols="60" maxLength="2000" required></textarea><br />
		<label id=fake_message> <input type="text" name="hide_message"></label>
		<!-- <p>Attachment</p><input type="file" name="attachment"> -->
		<label id=fake_attach> <input type="file" name="hide_attach"></label>
		<br/>
		<div class="g-recaptcha" data-sitekey="6LdCVGgUAAAAABC_V8FxfHokUMxXaLepuPZFTPci"></div>
		<br/>
		<input type="submit" name="submit" value="Send">
		<label id=fake_submit> <input type="submit" name="hide_submit"></label>
	</form>
	</td>
	<td valign="top">
    <p>
    <dl>
      <dt>Phone: 240-630-2072</dt>
      <dt>Mailing Address:</dt>
      <dd>Arundel Community Strings</dd>
      <dd>c/o Jennifer Danko</dd>
      <dd>303 Nicole Lane</dd>
      <dd>Glen Burnie, MD 21061</dd>
    </dl>
    </p>
	</td>
	</tr>
	</table>
  </div>
  <!--// end #calloutblock //-->
</div>
<script>displayMessage();</script>
<?php
include_once('footer.php');
?>