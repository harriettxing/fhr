<?php
    $query = "select name, id from provider";
    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)) {
?>

        <option value="<?php echo $row['id']; ?>" <?php if ($provider_id==$row['id']) echo "selected"; ?> >
            <?php echo $row['name'] ?>
        </option>
<?php
    }
?>