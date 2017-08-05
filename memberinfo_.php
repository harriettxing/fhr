
<?php
    $member_id = $_POST['member_id'];
    $member_name = $_POST['member_name'];
    $member_DOB = $_POST['member_DOB'];
    if ($_POST['member_gender'] == "male") $member_gender = 'm';
    else $member_gender = 'f';
    $member_address = $_POST['member_address'];
    $member_street = $_POST['member_street'];
    $member_city = $_POST['member_city'];
    $member_state = $_POST['member_state'];
    $member_zip = $_POST['member_zip'];
    $member_phone = $_POST['member_phone'];
    $member_email = $_POST['member_email'];
    $member_country = $_POST['member_country'];
?>

<?php
    if ($member_id > 0) { //update or delete
        include "memberinfoupdate_.php";
    } else { // add a new member

        $query = "insert into address (street, city, state, zip, country) values ";
        $query = $query."('$member_address', '$member_city', '$member_state', '$member_zip', '$member_country')";
        //echo $query."<br>";
        $result = $conn->query($query);

        $query = "select max(id) as max_id from address";
        $result = mysqli_query($conn, $query);

        //print_r($result);

        $row = mysqli_fetch_row($result);
        $max_id = $row[0];

        //print_r($row);
        //echo "<br> address added, ID:  ".$max_id;

        $query="insert into patient (name, DOB, gender, address_id, phone, email) values ";
        $query=$query."('$member_name', '$member_DOB', '$member_gender', $max_id, '$member_phone', '$member_email')";

        //echo "insert query:  ".$query;
        $result = $conn->query($query);

        echo "<br> Member added. ";

    }
?>