<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>jQuery Ajax Forms | Trevor Davis</title>
<link href="screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

<div id="container">
<?php include('verify.php'); ?>
	<form action="/play/jqueryAjaxForm/" method="post" id="sendEmail">
		<h1>Send An Email</h1>
		<p class="alert">* All fields are required</p>
		<ol class="forms">
			<li><label for="emailTo">To</label><input type="text" name="emailTo" id="emailTo" value="<?= $_POST['emailTo']; ?>" /><?php if(isset($emailToError)) echo '<span class="error">'.$emailToError.'</span>'; ?></li>
			<li><label for="emailFrom">From</label><input type="text" name="emailFrom" id="emailFrom" value="<?= $_POST['emailFrom']; ?>" /><?php if(isset($emailFromError)) echo '<span class="error">'.$emailFromError.'</span>'; ?></li>
			<li><label for="subject">Subject</label><input type="text" name="subject" id="subject" value="<?= $_POST['subject']; ?>" /><?php if(isset($subjectError)) echo '<span class="error">'.$subjectError.'</span>'; ?></li>
			<li><label for="message">Message</label><textarea name="message" id="message"><?= $_POST['message']; ?></textarea><?php if(isset($messageError)) echo '<span class="error">'.$messageError.'</span>'; ?></li>
			<li class="buttons"><button type="submit" id="submit">Send Email &raquo;</button><input type="hidden" name="submitted" id="submitted" value="true" /></li>
		</ol>
	</form>
	<div class="clearing"></div>
</div>

<?php include('../../includes/analytics.php'); ?>
</body>
</html>