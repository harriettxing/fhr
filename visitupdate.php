<?php
    $visit_id = $_POST['visit_id'];
    $query = "select id, visit_date, symptoms, patient_id, referrer_id, provider_id,
              insurance_id from visit where id = ".$visit_id;
    //echo "query:  ".$query;
    $result = $conn->query($query);
    $row = mysqli_fetch_assoc($result);

    $visit_date = $row['visit_date'];
    $symptoms = $row['symptoms'];
    $patient_id = $row['patient_id'];
    $referrer_id = $row['referrer_id'];
    $provider_id2 = $row['provider_id'];
    $insurance_id = $row['insurance_id'];

?>

<table>
    <form name="visitadd" action="index.php" method="POST">
        <input type="hidden" name="visit_id" value="<?php echo $visit_id;?>">
        <input type="hidden" name="display" value="visitupdate_.php">
    <tr>
        <td>
            Visit Date:
        </td>
        <td>
            <input type="date" name="visit_date" value="<?php echo $visit_date?>">
        </td>
    </tr>
    <tr>
        <td>
            Symptoms:
        </td>
        <td>
            <textarea name="symptoms" value="" cols="80" rows="8"><?php echo $symptoms;?></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Patient:
        </td>
        <td>
            <select name="patient_id">
            <?php
                $member_id = $patient_id;
                include "Include/members.php"
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Referrer:
        </td>
        <td>
            <select name="referrer_id">
            <?php
                $provider_id = $referrer_id;
                include "Include/providers.php"
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Provider:
        </td>
        <td>
            <select name="provider_id">
            <?php
                $provider_id = $provider_id2;
                include "Include/providers.php"
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Insurance:
        </td>
        <td>
            <select name="insurance_id">
            <?php include "Include/insurance.php" ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <input type="submit" name="submit" value="Update">
            <input type="submit" name="submit" value="Delete">
        </td>
    </tr>
    </form>
</table>