<?php






?>
<!DOCTYPE HTML>
<html lang="<?php echo $lang; ?>" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<title><?php echo $pageTitle . " | " . $siteName; ?></title>
	<link rel="stylesheet" href="/assets/uikit/css/uikit.min.css" type="text/css">

</head>

<body class="uk-height-1-1">
	<div id="header">
		<?php require_once("layouts/header.php"); ?>
	</div>

	<div id="main">
		<?php echo $content_for_layout;?>
	</div>

	<div id="footer">
		<?php require_once("layouts/footer.php"); ?>
	</div>

	<script src="/assets/jquery/dist/jquery.min.js"></script>
	<script src="/assets/uikit/js/uikit.min.js"></script>
	<script src="/admin/rest/api-js?token=<?php echo $cockpitApi; ?>"></script>﻿

</body>
</html>
