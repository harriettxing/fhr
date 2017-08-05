<?php

?>

<div style="position: absolute; top:10px; left:110px; height:80px; width:890px;">

    <table>
        <tr>
            <td style="width:100px">
            </td>
            <td style="width:600px">
                <h2> Family Health Record </h2>
            </td>
            <td stype="width:400px;">
                <form name="navform" action="index.php" method="post">
                <input type="hidden" name="display" value="memberinfo.php">
                Choose a member:
                <select name="member_id" onChange="this.form.submit()">
                    <option value="-1" <?php if ($member_id == -1) echo "selected"; ?> >
                        --
                    </option>
                    <option value="0"  >
                        New member
                    </option>

<?php
    include "members.php";
?>
                </select>
                </form>
            </td>
        </tr>
    </table>
</div>