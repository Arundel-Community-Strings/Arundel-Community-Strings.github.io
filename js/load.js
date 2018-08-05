function displayMessage() {
  var url_string = window.location.href;
  var url = new URL(url_string);
  var flag = url.search;
  if (flag == "" ) {
    document.getElementById('error').innerHTML = "";
  } else if (flag.indexOf("verify") > -1) {
    document.getElementById('error').innerHTML = "** Error -  Please Verify that you are not a Robot";
  } else if (flag.indexOf("mail") > -1) {
    document.getElementById('error').innerHTML = "** Error -  Please try again";
  } else {
    document.getElementById('error').innerHTML = "";
  }
}