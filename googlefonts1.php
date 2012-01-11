<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Irish+Grover|Tangerine' rel='stylesheet' type='text/css'>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Google Font Test</title>

<script type="text/javascript">
	WebFontConfig = {
		google: { families: [ 'Irish Grover', 'Tangerine' ] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
	})();
</script>

<style type="text/css">
.wf-loading p {
	font-family: serif
}
.wf-inactive p {
	font-family: serif
}
.wf-active p {
	font-family: 'Irish Grover', serif
}
.wf-loading p {
	font-family: serif;
	font-size: 16px
}
.wf-inactive h1 {
	font-family: serif;
	font-size: 16px
}
.wf-active h1 {
	font-family: 'Irish Grover', serif;
	font-size: 16px
}
.wf-inactive h2 {
  font-family: serif;
  font-size: 16px
}
.wf-active h2 {
  font-family: 'Irish Grover', serif;
  font-size: 16px
}

body {background-color: #EEE;}
h1 {font-family: "Irish Grover", cursive;}
h2 {font-family: Tangerine, sans-serif;}
</style>
</head>
<body>

<?php
  print "<h1>Hello World</h1><br />";
  // TODO Adding a 'to-do' task to this file.
?>

<h2>Hello World!</h2>

</body>
</html>

