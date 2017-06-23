<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

<nav class="nav navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="default.php" class="navbar-brand">Welcome to Canadian Tire Store</a></li>


        <?php
        session_start();
        //Step 1 - connect to the DB
        $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200357701','gc200357701', '20VCRJu0Fn');
        $conn->setAttribute(PDO::ERRMODE_EXCEPTION);
        //Step 2 - create a SQL command
        $sql = "SELECT * FROM cities";
        //prepare and execute the SQL command
        $cmd = $conn->prepare($sql);
        $cmd->execute();
        //store the results in a variable
        $pages = $cmd->fetchAll();
        //close the DB connection
        $conn=null;

        if (empty($_SESSION['storeID']))



        {
            echo '<li><a href="vancouver.php">vancouver</a></li>
                  <li><a href="toronto.php">toronto</a></li>
                  <li><a href="calgary.php">Calgary</a></li>
                  <li><a href="montreal.php">Montreal</a></li>
                  <li><a href="add-store.php">Add Page here</a></li>
                  ';
        }

        else
        {

        }
        ?>
    </ul>
</nav>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>