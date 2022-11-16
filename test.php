<html>
<head>
<title>CloudWhats - PHP Sample Code</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
if(isset($_POST['submit1'])){
$accesstoken = $_POST['accesstoken'];
$instanceid = $_POST['instanceid'];
$type = $_POST['type'];
$number = $_POST['number'];
$message = $_POST['message'];
$message = urlencode($message);
$ch=curl_init('https://app.wappapi.in/api/send.php?number='.$number.'&type='.$type.'&message='.$message.'&instance_id='.$instanceid.'&access_token='.$accesstoken.'');
$data = curl_exec($ch);
print($data); /* result of API call*/
}
?>
<body>
<div class="container">
<h2 style="text-align: center;">PHP Send Message (CloudWhats - WhatsApp API)</h2>
<br>
<form method="post" action="">
<div class="form-group">
<label for="api">API URL:</label>
<input type="text" id="TextBox1" name="" value="https://app.wappapi.in/api/send.php?" readonly="readonly" class="form-control">
</div>
<div class="col-md-6">
<div class="form-group">
<label for="apikey">Access Token:</label>
<input id="TextBox2" type="text" name="accesstoken" value="" class="form-control" placeholder="a0cxxxe141xxxxx9exx1d8xxxxxxxxxx">
</div>
<div class="form-group">
<label for="mobnumber">WhatsApp No (with country code):</label>
<input id="TextBox3" type="text" name="number" value="" class="form-control" placeholder="9198480xxxxx">
</div>
<div class="form-group">
<label for="msg">Text Message:</label>
<input id="TextBox4" type="text" name="message" value="" class="form-control" placeholder="Enter Message">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="senderid">Instance ID</label>
<input id="TextBox5" type="text" name="instanceid" value="" class="form-control" placeholder="61E2FXXXXXXXX">
</div>
<div class="form-group">
<label for="route">Type:</label>
<input id="TextBox6" type="text" name="type" value="text" class="form-control">
</div>
<br>
<input type="submit" name="submit1" value="SUBMIT" class="btn btn-default">
</div>
</form>
</div>
</body>
</html>