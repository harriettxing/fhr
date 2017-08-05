<?php

    $display=$_POST['display'];
    if (empty($_POST['member_id'])) {
        $member_id = -1;
    } else {
        $member_id = $_POST['member_id'];
    }

    if (empty($_POST['visit_id'])) {
        $visit_id = -1;
    } else {
        $visit_id = $_POST['visit_id'];
    }

?>

<?php include "db.php" ?>
<html>
<head>
    <title> Family Health Records </title>
</head>
<body>
<?php include "Include/topnav.php" ?>
<?php include "Include/leftnav.php" ?>
<?php include "Include/display.php" ?>
</body>
</html>
