

<table>
    <form name="visitadd" action="index.php" method="POST">
        <input type="hidden" name="visit_id" value="<?php echo $visit_id;?>">
        <input type="hidden" name="display" value="visitadd_.php">
    <tr>
        <td>
            Visit Date:
        </td>
        <td>
            <input type="date" name="visit_date" value="">
        </td>
    </tr>
    <tr>
        <td>
            Symptoms:
        </td>
        <td>
            <textarea name="symptoms" value="" cols="80" rows="8"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Patient:
        </td>
        <td>
            <select name="patient_id">
            <?php include "Include/members.php" ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Referrer:
        </td>
        <td>
            <select name="referrer_id">
            <?php include "Include/providers.php" ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Provider:
        </td>
        <td>
            <select name="provider_id">
            <?php include "Include/providers.php" ?>
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
            <input type="submit" name="submit" value="Add">
        </td>
    </tr>
    </form>
</table>