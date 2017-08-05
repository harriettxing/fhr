<?php
    $visit_id = $_POST['visit_id'];

    if ($_POST['submit'] == "Delete") {
        $query = "delete from visit where id = ".$visit_id;
        $conn->query($query);
        echo "Visit deleted";
    }  else {
        $visit_date=$_POST['visit_date'];
        $symptoms=$_POST['symptoms'];
        $patient_id=$_POST['patient_id'];
        $referrer_id=$_POST['referrer_id'];
        $provider_id=$_POST['provider_id'];
        $insurance_id=$_POST['insurance_id'];

        $query = "update visit set
                  visit_date = '".$visit_date."',
                  symptoms = '".$symptoms."',
                  patient_id = ".$patient_id.",
                  referrer_id = ".$referrer_id.",
                  provider_id = ".$provider_id.",
                  insurance_id = ".$insurance_id."
                  where id = ".$visit_id;
        //echo "query: ".$query;
        $conn->query($query);
        echo "Visit updated.";
    }


?>
