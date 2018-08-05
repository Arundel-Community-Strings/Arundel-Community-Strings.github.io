function validate() {
if ((document.forms["contactform"]["hide_name"].value.trim().length !== 0) ||
	 (document.forms["contactform"]["hide_email"].value.trim().length !== 0) ||
	 (document.forms["contactform"]["hide_message"].value.trim().length !== 0) ||
	 (document.forms["contactform"]["hide_attach"].value.trim().length !== 0)) {
	  document.getElementById('error').innerHTML = "**Unknown Error Occurred During Form Submission";
	   return false;
	 }
document.getElementById('error').innerHTML = "";	 
return true;
}