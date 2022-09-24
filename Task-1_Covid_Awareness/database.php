<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg      = $_POST['message'];

    $check = "";

    foreach ($symp as $check1) {
        $check .= $check1.",";
    }

    $insertquery = "insert into coronacase(Username, Email, Mobile, Symptoms, Message)
                 values('$username', '$email', '$mobile', '$check', '$msg')";

    $query = mysqli_query($connection, $insertquery);

    if ($query) {
?>
        <script>
            alert("inserted  succesfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Not inserted");
        </script>
<?php

    }
} else {
}

?>