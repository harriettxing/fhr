<?php
    $visit_date=$_POST['visit_date'];
    $symptoms=$_POST['symptoms'];
    $patient_id=$_POST['patient_id'];
    $referrer_id=$_POST['referrer_id'];
    $provider_id=$_POST['provider_id'];
    $insurance_id=$_POST['insurance_id'];

    $query = "insert into visit (visit_date, symptoms, patient_id, referrer_id, provider_id, insurance_id, visit_type)
              values ('".$visit_date."', '".$symptoms."', ".$patient_id.", ".$referrer_id.", ".$provider_id.", ".$insurance_id.", 1)";
    // echo $query;

    $conn->query($query);
?>

Visit added.