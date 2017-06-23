<?php
$pageTitle='Cities';
require_once('header.php');
?>

<?php
$cityID = $_GET['cityID'];

//Step 1 - connect to the DB
$conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200361497',  'gc200361497', 'EDJWD_dYM4');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Step 2 - create a SQL command
$sql = "SELECT * FROM stores where cityID = $cityID";

//Step 3 - prepare and execute the SQL command
$cmd = $conn->prepare($sql);
$cmd->execute();

//Step 4 - store the results in a variable
$stores = $cmd->fetchAll();

//Step 5 - close the DB connection
$conn=null;

//Step 6 - display the results in a table
echo '<table class="table table-striped table-hover"><tr>
                        <th>Store Name</th>
                        <th>Address</th>
                        <th>phone</th>
                        <th>manager</th>
                        <th>Delete</th>';

echo'</tr>';

//loop over the $albums array to display each album as a new row
foreach($stores as $store)
{
    echo '<tr><td>'.$store['storeName'].'</td>
                      <td>'.$store['address'].'</td>
                      <td>'.$store['phone'].'</td>
                      <td>'.$store['manager'].'</td>';

    echo '<td><a href="delete_store.php?storeID='.$store['storeID'].'" 
                                class="btn btn-danger confirmation">Delete</a></td>';


    echo'</tr>';
}
?>


<?php
$pageTitle='Registration';
require_once('header.php');
?>




