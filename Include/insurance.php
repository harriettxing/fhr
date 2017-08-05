<?php
    $query = "select carrier, id from insurance";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
?>

        <option value="<?php echo $row['id']; ?>" <?php if ($insurance_id==$row['id']) echo "selected"; ?> >
            <?php echo $row['carrier'] ?>
        </option>
<?php
    }
?>