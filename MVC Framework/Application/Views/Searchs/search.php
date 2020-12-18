<!Doctype html>

<html>

<head>
    <title>Search Result</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="/public/css/search.css" rel="stylesheet" type="text/css">
    <link href="/public/css/newfeeds.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="/public/js/handle_modal.js"></script>
    <script language="JavaScript" type="text/javascript" src="/public/js/handler.js"></script>
    <script language="JavaScript" type="text/javascript" src="/public/js/handle_loadmore.js"></script>
    <script language="JavaScript" type="text/javascript" src="/public/js/handle_group.js"></script>
</head>

<body>
<?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'navbar.php'); ?>
    <div class="right_pane">
        <div>
        <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'searchbar.php'); ?>
            <div class="menu_select">
                <button id="people" class="btn people" onclick="showListPeople()">People</button>
                <button id="group" class="btn group" onclick="showListGroup()">Group</button>
            </div>
            <div class="row">
            <?php include (PATH_ROOT.DS.'Application'.DS.'Views'.DS.'Modules'.DS.'card_people.php'); ?>

 
            </div>

        </div>

    </div>
</body>


</html>