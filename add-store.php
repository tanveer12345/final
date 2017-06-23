<?php
$pageTitle = 'Add Store';
require_once('header.php');
?>
<h1> Add Store</h1>
<form method="post" action="save.php">
    <fieldset class="form-group">
        <label for="storeName" class="col-sm-2">Store Name</label>
        <input name="storeName" id="storeName" required >
    </fieldset>
    <fieldset class="form-group">
        <label for="address" class="col-sm-2">Address </label>
        <input name="address" id="address" />
    </fieldset>
    <fieldset class="form-group">
        <label for="city" class="col-sm-1">City</label>
        <select name="city" id="city">
            <?php
            //Step 1 - connect to the DB
            PDO('mysql:host=aws.computerstudi.es;dbname=gc200357701','gc200357701', '20VCRJu0Fn');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // turn on the error handling


            //Step 2 - create a SQL script
            $sql = "SELECT * FROM cities";

            //Step 3 - prepare and execute the SQL script
            $cmd = $conn->prepare($sql);
            $cmd->execute();
            $cities = $cmd->fetchAll();

            //Step 4 - display the results
            foreach($cities as $cit){


                echo '<option>'.$cit['city'].'</option>';

            }

            //Step 5 - disconnect from the DB
            $conn=null;
            ?>
        </select>

        <fieldset class="form-group">
            <label for="storeName" class="col-sm-2">Store Name</label>
            <input name="storeName" id="storeName"/>
        </fieldset>
        <fieldset class="form-group">
            <label for="address" class="col-sm-2">Store Name</label>
            <input name="address" id="address"/>
        </fieldset>
    </fieldset>
    <fieldset class="form-group">
        <label for="phone" class="col-sm-2">Phone</label>
        <input name="phone" id="phone" />
    </fieldset>

    <fieldset class="form-group">
        <label for="manager" class="col-sm-2">Manager</label>
        <input name="manager" id="manager"/>
    </fieldset>
    <input name="cityID" id="cityID" type="hidden"/>
    <button class="col-sm-offset-2 btn btn-success btnRegister">Save</button>
</form>
