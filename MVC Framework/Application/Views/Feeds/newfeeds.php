<!Doctype html>

<html>

<head>
    <title>Newfeeds</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/newfeeds.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'navbar.php'); ?>
    <div class="newfeed">
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'searchbar.php'); ?>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_control.php'); ?>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'newfeed_main.php'); ?>
    </div>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'suggestion.php'); ?>
    <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'new_post_modal.php'); ?>

</body>
<script src="/public/js/handler.js"></script>

<script src="/public/js/handle_see_more_group.js"></script>


</html>