<h4> member info </h4>

<?php
    if ($member_id > 0) {
        include "memberinfoupdate.php";
?>
<?php
    } else {
?>

<form name="member_info" action="index.php" method="post">

    <input type="hidden" name="member_id" value="<?php echo $member_id ?>" >
    <input type="hidden" name="display" value="memberinfo_.php">
    <table>
    <tr>
        <td> Name: </td>
        <td>
            <input type="text" name="member_name" value="">
        </td>
    </tr>
    <tr>
        <td> DOB: </td>
        <td>
            <input type="date" name="member_DOB" value="">
        </td>
    </tr>
    <tr>
        <td> Gender: </td>
        <td>
            <input type="radio" name="member_gender" value="male"> Male<br>
            <input type="radio" name="member_gender" value="female"> Female<br>
        </td>
    </tr>
    <tr>
        <td> Address: </td>
        <td>
            <input type="text" name="member_address" value="">
        </td>
    </tr>
    <tr>
        <td> City: </td>
        <td>
            <input type="text" name="member_city" value="">
        </td>
    </tr>
    <tr>
        <td> State: </td>
        <td>
            <input type="text" name="member_state" value="">
        </td>
    </tr>
    <tr>
        <td> Zip: </td>
        <td>
            <input type="text" name="member_zip" value="">
        </td>
    </tr>
    <tr>
        <td> Country: </td>
        <td>
            <input type="text" name="member_country" value="">
        </td>
    </tr>
    <tr>
        <td> Phone: </td>
        <td>
            <input type="phone" name="member_phone" value="">
        </td>
    </tr>
    <tr>
        <td> Email:  </td>
        <td>
            <input type="email" name="member_email" value="">
        </td>
    </tr>
    <tr>
        <td> </td>
        <td> <input type="submit" name="submit" value="Add"> </td>
    </tr>
</form>

<?php
     }
?>
