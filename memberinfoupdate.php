<?php
        $query="select name, DOB, gender, address_id, phone, email from patient ";
        $query=$query."where id = ".$member_id;

        //echo "query:  ".$query;
        $result = $conn->query($query);
        if ($row = mysqli_fetch_assoc($result)) {
            $member_name = $row['name'];
            $member_DOB = $row['DOB'];
            $member_gender = $row['gender'];
            $member_address = $row['address_id'];
            $member_phone = $row['phone'];
            $member_email = $row['email'];
        }

        $query="select street, city, state, zip, country from address ";
        $query=$query." where id = ".$member_address;
        $result=$conn->query($query);
        if ($row = mysqli_fetch_assoc($result)) {
            $member_street = $row['street'];
            $member_city = $row['city'];
            $member_state = $row['state'];
            $member_zip = $row['zip'];
            $member_country = $row['country'];
        }

?>
<form name="member_info" action="index.php" method="post">

    <input type="hidden" name="member_id" value="<?php echo $member_id ?>" >
    <input type="hidden" name="display" value="memberinfo_.php">
    <table>
    <tr>
        <td> Name: </td>
        <td>
            <input type="text" name="member_name" value="<?php echo $member_name;?>">
        </td>
    </tr>
    <tr>
        <td> DOB: </td>
        <td>
            <input type="date" name="member_DOB" value="<?php echo $member_DOB;?>">
        </td>
    </tr>
    <tr>
        <td> Gender: </td>
        <td>
            <input type="radio" name="member_gender" value="male" <?php if ($member_gender=='m') echo "checked"; ?> > Male<br>
            <input type="radio" name="member_gender" value="female" <?php if ($member_gender=='f') echo "checked"; ?>  > Female<br>
        </td>
    </tr>
    <tr>
        <td> Address: </td>
        <td>
            <input type="hidden" name="member_address" value="<?php echo $member_address; ?> ">
            <input type="text" name="member_street" value="<?php echo $member_street; ?> ">
        </td>
    </tr>
    <tr>
        <td> City: </td>
        <td>
            <input type="text" name="member_city" value="<?php echo $member_city; ?>">
        </td>
    </tr>
    <tr>
        <td> State: </td>
        <td>
            <input type="text" name="member_state" value="<?php echo $member_state; ?>">
        </td>
    </tr>
    <tr>
        <td> Zip: </td>
        <td>
            <input type="text" name="member_zip" value="<?php echo $member_zip; ?>">
        </td>
    </tr>
    <tr>
        <td> Country: </td>
        <td>
            <input type="text" name="member_country" value="<?php echo $member_country; ?>">
        </td>
    </tr>
    <tr>
        <td> Phone: </td>
        <td>
            <input type="phone" name="member_phone" value="<?php echo $member_phone; ?>">
        </td>
    </tr>
    <tr>
        <td> Email:  </td>
        <td>
            <input type="email" name="member_email" value="<?php echo $member_email; ?>">
        </td>
    </tr>
    <tr>
        <td> <input type="submit" name="submit" value="Update"> </td>
        <td> <input type="submit" name="submit" value="Delete"> </td>
    </tr>
</form>