<!-- Called through onclick form listener in membersAdmin.php -->
<?php
$data = $_POST["term"];

if ($data == "" || $data == " ") {
    header("location: membersAdmin.php");
} else {
    $answer = explode(" ",$data);
    // print_r($answer);
    ?>
        <style>
        <?php include 'membersStyleAdmin.css'; ?> 
        </style>

        <!-- Table Attributes -->
        <table class="table table-bordered">
        <!-- Table Headers -->
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">START DATE</th>
                <th scope="col">GRAD</th>
                <th scope="col">STUDENT EMAIL</th>
            </tr>
        </thead>

    <?php

    include "../includes/database_functions.php";
    //send a SQL statement and get results in to teams
    $sql = "SELECT * FROM members where nameFirst LIKE :term OR nameLast LIKE :term OR CONCAT(nameFirst, ' ', nameLast) LIKE :term ORDER BY id, nameFirst, nameLast";
    $params = [":term"=>$data."%"];
    // echo $sql;
    // print_r($params);

    $members = getDataFromSQL($sql,$params);
    foreach($members as $member) {
    ?>  
        <!-- Table Elements -->
        <html>
        <tbody>
                <tr>
                    <td class="number"> <?php echo"{$member["id"]}";?> </td>
                    <td class="name"> <?php echo"{$member["nameFirst"]}"." "."{$member["nameLast"]}";?> </td>
                    <td class="date"> <?php echo"{$member["startDate"]}";?> </td>
                    <td class="grad"> <?php echo"{$member["gradYear"]}";?> </td>
                    <td class="email"> <?php echo"{$member["email"]}";?> </td>
                </tr>
            </tbody>
        </html>

    <?php
    }
}
?>
