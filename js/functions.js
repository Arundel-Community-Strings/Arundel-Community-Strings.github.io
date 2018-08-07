function gen_mail_to_link(lhs,rhs) {
	document.write("<a href=\"mailto");
	document.write(":" + lhs + "@" + rhs);
	document.write("\">" + lhs + "@" + rhs + "<\/a>");
}