<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Google Font Test - Web Font Loader</title>

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
.wf-loading h1, .wf-loading h2 {
	visibility: hidden;
}
.wf-inactive h1 {
	font-family: serif;
	font-size: 32px;
}
.wf-active h1 {
	font-family: 'Irish Grover', serif;
	font-size: 32px;
}
.wf-inactive h2 {
  font-family: serif;
  font-size: 24px;
}
.wf-active h2 {
  font-family: 'Tangerine', serif;
  font-size: 24px;
}

body {background-color: #EEE;}
/* h1 {font-family: "Irish Grover", cursive;} */
/* h2 {font-family: Tangerine, sans-serif;} */
</style>
</head>
<body>
  <h1>This is using Irish Grover</h1>
  <h2>This is using Tangerine!</h2>
</body>
</html>

