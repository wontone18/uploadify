<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Luepe Coding : Upload Component Demo</title>
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.uploadifive.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadifive.css">
<style type="text/css">
body {
	font: 13px Arial, Helvetica, Sans-serif;
}
.uploadifive-button {
	float: left;
	margin-right: 10px;
}
#queue1 {
	border: 1px solid #E5E5E5;
	height: 177px;
	overflow: auto;
	margin-bottom: 10px;
	padding: 0 3px 3px;
	width: 300px;
}
</style>
</head>

<body>
<div class="container">
	<h1>Luepe Coding : Upload Component Demo</h1>
	<form>
		<div id="queue1"></div>
		<input id="file_upload_color" name="file_upload_color" type="file" multiple="true">
		<a style="position: relative; top: 8px;" href="javascript:$('#file_upload_color').uploadifive('upload')">Upload Files</a>
	</form>
</div>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload_color').uploadifive({
				'auto'             : false,
				'checkScript'      : 'check-exists.php',
				'formData'         : {
									   'timestamp' : '<?php echo $timestamp;?>',
									   'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				                     },
				'queueID'          : 'queue1',
				'uploadScript'     : 'upload.php',
				'onUploadComplete' : function(file, data) { 
				
				console.log(data); 
				
				//alert(data);
				
				
				}
			});
		});
	</script>
</body>
</html>