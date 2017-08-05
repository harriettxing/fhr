<?php
    $query = "select visit.id, visit_date, provider.name, patient.name as patient_name
              from visit
              join provider on visit.provider_id = provider.id
              join patient on visit.patient_id = patient.id";
    $result = $conn->query($query);
?>
    <table>

        <tr>
            <td> </td>
            <td>
                <form name="formvisitadd" method="Post" action="index.php">
                    <input type="hidden" name="display" value="visit.php">
                    <input type="hidden" name="visit_id" value="-1">
                    <input type="submit" name="submit" value="Add a visit">
                </form>
            </td>
        </tr>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
?>
       <tr>
           <form name="formvisitupdate" method="Post" action="index.php">
           <td>
               <input type="hidden" name="display" value="visit.php">
               <input type="hidden" name="visit_id" value="<?php echo $row['id'] ?>" >
               <input type="date" name="visit_date" value="<?php echo $row['visit_date'] ?>" >
               <input type="text" name="patient" value="<?php echo $row['patient_name'] ?>" >
               <input type="text" name="provider" value="<?php echo $row['name'] ?>" size=30 >
           </td>
           <td>
               <input type="submit" name="submit" value="Go">
           </td>
           </form>
       </tr>
<?php
    }
?>
    </table>