<head>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css" />

</head>
<div class="col-lg-12 container">
    <div class="card">
        <div class="card-body">
            <form action="" id="p_manage">
                <div class="row ">
                    <div class="col-lg-6 bg-info card-body">
                        <b>Sender Information</b>
                        <div class=" card card-body">
                            <label> Name</label>
                            <input type="text" name="sender-name" placeholder="name">
                        </div>
                        <div class=" card card-body">
                            <label> Sender address</label>
                            <input type="text" name="sender-ad">
                        </div>
                        <div class=" card card-body">
                            <label> Contact</label>
                            <input type="text" name="sender-contact" placeholder="eg 6574637874">
                        </div>





                    </div>
                    <div class="col-lg-6">
                        <b>Receiver Information</b>
                        <div class=" card card-body">
                            <label> Name</label>
                            <input type="text" name="receiver-name" placeholder="name">
                        </div>
                        <div class=" card card-body">
                            <label> Receiver address</label>
                            <input type="text" name="receiver-ad" placeholder="">
                        </div>
                        <div class=" card card-body">
                            <label> Contact</label>
                            <input type="text" name="receiver-contact" placeholder="name">
                        </div>





                    </div>
                </div>
                <hr>
                <div class="row bg-light">
                    <div class="col-lg-4 card card-body ">
                        <b>Parcel Information</b>
                        <div class=" card card-body">
                            <label> reference_no</label>
                            <input type="text" name="ref_no" placeholder=" ref no">
                        </div>
                        <div class=" card card-body">
                            <label> Weight</label>
                            <input type="text" name="p_weight" placeholder="">
                        </div>
                        <div class=" card card-body">
                            <label> Height</label>
                            <input type="text" name="p_height" placeholder="">
                        </div>





                    </div>
                    <div class="col-lg-6">
                        <b>Branch Information</b>
                        <div class=" card card-body">
                            <label> From Branch (id)</label>
                            <input type="text" name="frm_branch" placeholder="name">
                        </div>
                        <div class=" card card-body">
                            <label> To Branch (id)</label>
                            <input type="text" name="to_branch" placeholder="">
                        </div>



                    </div>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
                    <input class="btn btn-success col-lg-6" type="submit" name="Save" value=" Save">
                </div>
            </form>

        </div>
    </div>

</div>