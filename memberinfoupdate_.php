<?php
    if ($_POST['submit']=="Delete") {
        $query="delete from address where id=".$member_address;
        $conn->query($query);

        $query="delete from patient where id=".$member_id;
        $conn->query($query);
        //echo "<br>Member deleted<br>";
    } else {

        $query="update address set ";
        $query=$query." street='".$member_street."', ";
        $query=$query." city='".$member_city."', ";
        $query=$query." state='".$member_state."', ";
        $query=$query." zip='".$member_zip."', ";
        $query=$query." country='".$member_country."' ";
        $query=$query." where id=".$member_address;

        //echo "<br> query: ".$query;
        $conn->query($query);

        $query="update patient set ";
        $query=$query." name='".$member_name."', ";
        $query=$query." DOB='".$member_DOB."', ";
        $query=$query." gender='".$member_gender."', ";
        $query=$query." address_id=".$member_address.", ";
        $query=$query." phone='".$member_phone."', ";
        $query=$query." email='".$member_email."' ";
        $query=$query." where id=".$member_id;

        //echo "<br> query: ".$query;
        $conn->query($query);

        echo "<br>Member updated<br>";
    }
?>
