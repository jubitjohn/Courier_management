<?php include('header.php') ?>;

<?php include_once('db_connect.php') ?>;

<?php include('library.php') ?>;
<div class="container">
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <div class="card-tools">
                    <a class="btn btn-block btn-sm btn-default btn-flat border-primary "
                        href="./index.php?page=new_parcel"><i class="fa fa-plus"></i> Add New</a>
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
                                    <button type="button" class="btn btn-info btn-flat view_parcel"
                                        data-id="<?php echo $row['id'] ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="index.php?page=edit_parcel&id=<?php echo $row['id'] ?>"
                                        class="btn btn-primary btn-flat ">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-flat delete_parcel"
                                        data-id="<?php echo $row['id'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
    $('.view_parcel').click(function() {
        uni_modal("Parcel's Details", "view_parcel.php?id=" + $(this).attr('data-id'), "large")
    })
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
                alert_toast("Data successfully deleted", 'success')
                setTimeout(function() {
                    location.reload()
                }, 1500)

            }
        }
    })
}
</script>