<?php

if (!isset($page_title)) {
    $page_title = 'Client Hints Demo';
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>
    <link href="<?php echo url_for('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo url_for('/assets/js/bootstrap.bundle.min.js'); ?>" ></script>
</head>
<body class="bg-light">

<?php include VIEWS_PATH . '/shared/navbar.php'; ?>

<?php if (!has_ua_ch_support()) { ?>
<div class="alert alert-warning container" role="alert">
    UA-CH not supported in this device
</div>
<?php } ?>
