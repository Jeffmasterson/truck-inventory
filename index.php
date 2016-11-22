
<!DOCTYPE html>
<link rel="stylesheet" href="style.css" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<style>


</style>
<body>

<?php
include 'jeffscode.php';
?>


<?php foreach ($trucks as $make) { ?>

    <div class="col-md-4 truck-background">
        <div class="col-md-12">
            <h2><?=$make->title;?></h2>
            <h4><?php if ($make->ifSold()) {
                    echo 'Truck is Sold';
                }
                else {
                    echo 'Truck Is Available';
                }

                ?></h4>
        </div>
        <div class="col-md-4 truck">
            <img src="<?=$make->thumb_url;?>">
            <h3>Inventory #<?=$make->inventory_id;?></h3>
        </div>
        <div class="col-md-8 truck-text">
            <p><?=$make->description;?></p>
            <p><strong>Crash Rating:</strong> <?=$make->rating;?></p>
            <p><strong>Weight:</strong> <?=$make->weight;?></p>
            <p><strong>Tire size:</strong> <?=$make->tireesize;?></p>
        </div>

    </div>

<?php
}
?>
<div class="col-md-4 truck-background">
    <div class="col-md-12">
        <h2><?php echo $_POST["make"]; ?></h2>
        <h4><?php if ($make->ifSold()) {
                echo 'Truck is Sold';
            }
            else {
                echo 'Truck Is Available';
            }

            ?></h4>
    </div>
    <div class="col-md-4 truck">
        <img src="<?php echo $_POST["img-url"]; ?>">
        <h3>Inventory #<?php echo $_POST["inventory-num"]; ?></h3>
    </div>
    <div class="col-md-8 truck-text">
        <p><?php echo $_POST["Description"]; ?></p>
        <p><strong>Crash Rating:</strong> <?php echo $_POST["Crash-Rating"]; ?></p>
        <p><strong>Weight:</strong> <?php echo $_POST["weight"]; ?></p>
        <p><strong>Tire size:</strong> <?php echo $_POST["Tire-Size"]; ?></p>
    </div>

</div>
<a class="btn btn-primary" href="/addnewtruck.php" role="button">Add New Truck</a>

</body>
</html>

