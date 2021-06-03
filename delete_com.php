<?php include('header.php') ?>;
<?php include('library.php') ?>

<?php
$id = $_GET['id'];
?>
<div class="container">
    <div class="card card-body">
        <div class="card-body">
            <h4>Are you sure you want to delete Courier?</h4>
        </div>
        <div class="card-body">
            <form action="delete_branch.php?id=<?php echo $id ?>" method="POST">
                <input class="btn btn-danger" type="submit" value="Delete">
                <a href="list_parcel.php" class="btn btn-info">Cancel</a>
            </form>
        </div>

    </div>
</div>
<?php include('sidemenu.php') ?>;