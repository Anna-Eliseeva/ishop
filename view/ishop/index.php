<?php defined('ISHOP') or die('goodbye'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/view/js/functions.js"></script>
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/view/css/style.css" />
<title>Untitled Document</title>
</head>

<body>
    <div class="main">

        <?php require_once __DIR__ . '/inc/header.php'; ?>

        <div id="contentwrapper">
        <div id="content">

            <?php require_once __DIR__ . '/inc/index.php' ?>

        </div>
    </div>

        <?php require_once __DIR__ . '/inc/left-bar.php' ?>
        <?php require_once __DIR__ . '/inc/right-bar.php' ?>

        <div class="clr"></div>

        <?php require_once __DIR__ . '/inc/footer.php' ?>

    </div>
</body>
</html>
