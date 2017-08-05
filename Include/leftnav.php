<div style="position:absolute; top:10px; left:10px; width:100px; background-color:blue">

    <table>
        <tr>
            <td colspan="2" style="height:100px">
            </td>
        </tr>
        <tr>
            <td style="width:90px">
                <form name="navform" action="index.php" method="post">
                    <input name="display" type="hidden" value="memberinfo.php">
                    <input name="member_id" type="hidden" value="<?php echo $member_id;?>">
                    <input name="submit" type="submit" value="Member Info"  style="width:90px">
                </form>
            </td>
        </tr>
        <tr>
            <td style="width:90px">
                <form name="navform" action="index.php" method="post">
                    <input name="display" type="hidden" value="visits.php">
                    <input name="member_id" type="hidden" value="<?php echo $member_id;?>">
                    <input name="submit" type="submit" value="Doctor's Visit"  style="width:90px">
                </form>
            </td>
        </tr>
        <tr>
            <td style="width:90px">
                <form name="navform" action="index.php" method="post">
                    <input name="display" type="hidden" value="test.php">
                    <input name="member_id" type="hidden" value="<?php echo $member_id;?>">
                    <input name="submit" type="submit" value="Test"  style="width:90px">
                </form>

            </td>
        </tr>
        <tr>
            <td style="width:90px">
                <form name="navform" action="index.php" method="post">
                    <input name="display" type="hidden" value="medication.php">
                    <input name="member_id" type="hidden" value="<?php echo $member_id;?>">

                    <input name="submit" type="submit" value="Medication"  style="width:90px">
                </form>

            </td>
        </tr>
        <tr>
            <td style="width:90px">
                <form name="navform" action="index.php" method="post">
                    <input name="display" type="hidden" value="insurance.php">
                    <input name="member_id" type="hidden" value="<?php echo $member_id;?>">

                    <input name="submit" type="submit" value="Insurance"  style="width:90px">
                </form>

            </td>
        </tr>
    </table>
</div>
