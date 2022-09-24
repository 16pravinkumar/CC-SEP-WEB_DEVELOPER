<?php

$server = 'localhost';
$user = "root";
$password = "";
$db = 'coronadb';

$connection = mysqli_connect($server,$user,$password,$db);

if($connection)
{
    ?>
       <script>
        alert("Connection succesfully");
       </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Error");
    </script>
    <?php

}

?>