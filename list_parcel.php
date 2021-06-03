<?php include('header.php') ?>;

<?php include_once('db_connect.php') ?>;

<?php include('library.php') ?>;
<?php
$status = !empty($_GET['id']) ?
    $_GET['id'] : '0';
?>
<div class="container">
    <div class="alert-success card-body">
        <?php
        if ($status == 11) {
            echo "Courier Deleted Successfully";
        } else if ($status == 12) {
            echo "Deletion Failed try again";
        } else if ($status == 21) {
            echo "Updation Successful";
        } else if ($status == 22) {
            echo "Updation Failed";
        } else if ($status == 31) {
            echo "Courier Added";
        } else if ($status == 32) {
            echo "Could'nt add Courier,Try again";
        }

        ?></div>
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <div class="card-tools">
                    <a class="btn btn-block btn-sm btn-default btn-flat border-primary " href="add_parcel.php"><i
                            class="fa fa-plus"></i> Add New</a>
                </div>
            </div>




            <div class="card-body">
                <table class="table tabe-hover table-bordered" id="list">
                    <!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Reference Number</th>
                            <th>Sender Name</th>
                            <th>Recipient Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;

                        $qry = "SELECT * from parcel;";
                        $result = mysqli_query($conn, $qry);
                        if ($result) {
                            echo "Query Succesful";
                        } else {
                            echo "Query Corrupt";
                        }
                        while ($row = mysqli_fetch_assoc($result)) :
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $i++ ?></td>
                            <td><b><?php echo $row['reference_no'] ?></b></td>
                            <td><b><?php echo $row['sender_name'] ?></b></td>
                            <td><b><?php echo $row['recipient_name'] ?></b></td>
                            <td class="text-center">
                                <?php
                                    echo $row['p_status']

                                    ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button">
                                        <a href="view_p.php?id=<?php echo $row['id'] ?>"
                                            class="btn btn-success btn-flat ">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                    </button>
                                    <a href="edit_parcel.php?id=<?php echo $row['id'] ?>"
                                        class="btn btn-primary btn-flat ">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="p_deletepage.php?id=<?php echo $row['id'] ?>"
                                        class="btn btn-danger btn-flat ">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<?php include('sidemenu.php') ?>;


<style>
table td {
    vertical-align: middle !important;
}
</style>
<script>
$(document).ready(function() {
    $('#list').dataTable()
    $('.delete_parcel').click(function() {
        _conf("Are you sure to delete this parcel?", "delete_parcel", [$(this).attr('data-id')])
    })
})

function delete_parcel($id) {
    start_load()
    $.ajax({
        url: 'ajax.php?action=delete_parcel',
        method: 'POST',
        data: {
            id: $id
        },
        success: function(resp) {
            if (resp == 1) {
                alert_toast("Data succsessfully deleted", 'success')
                setTimeout(function() {
                    location.reload()
                }, 1500)

            }
        }
    })
}
</script>