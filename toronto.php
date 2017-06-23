
<?php
$pageTitle='insurence1';
require_once ('header.php');
?>
<main class="container">
    <h1>toronto</h1>
    <?php

    //step 1 - connect to the database
    $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200357701','gc200357701', '20VCRJu0Fn');


    //step 2 - create a SQL command
    $sql = "SELECT  FROM cities where cityID=3";

    //step 3 - prepare the SQL command
    $cmd = $conn->prepare($sql);

    //step 4 - execute and store the results
    $cmd->execute();
    $city = $cmd->fetchAll();

    //step 5 - disconnect from the DB
    $conn = null;

    //create a table and display the results
    echo '<table class="table table-striped table-hover">
            <tr><th>Store Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Manager</th>
                
                ';
    echo ' <th>Delete</th>';


    echo '</tr>';

    foreach($city as $cit)
    {

        echo '<tr><td>'.$cit['storeName'].'</td>
                    <td>'.$cit['address'].'</td>
                    <td>'.$cit['Manager'].'</td>
                      <td>'.$cit['Phone'].'</td>';

        //only show the edit and delete links if these are valid, logged in users

        echo '<td><td><a href="deletecity.php?pageID='.$cit['StoreID'].'"
                      class="btn btn-danger confirmation">Delete</a></td>';

        echo '</tr>';
    }

    echo '</table></main>';

    ?>

</main>
<?php
require_once ('footer.php');
?>

