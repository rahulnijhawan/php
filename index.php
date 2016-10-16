<!DOCTYPE html>
<html>
<head>
	<?php //<!-- <noscript><meta http-equiv="refresh" content="0; url=news-nojs.php"></noscript> --> ?>
	<title>Home Sign On</title>
</head>
<body>
	<form method="post" action="/update" id="update_form">
     <label for="user_name">Name</label>
     <input type="text" name="user[name]" id="user_name" />
     <label for="user_email">Email</label>
     <input type="text" name="user[email]" id="user_email" />     
     <label for="user_gender">Gender</label>
     <select id="user_gender" name="user[gender]">
          <option value="m">Male</option>
          <option value="f">Female</option>
     </select>     
     <input type="submit" name="submitButton" value="Update" />
</form>
</body>
</html>