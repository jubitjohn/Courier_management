<?php include('sidemenu.php') ?>;
<?php include('header.php') ?>;


<head><?php include('library.php') ?>;
    <link rel="stylesheet" href="css/add_parcel.css" />
</head>

<body class="overflow-auto">
    <div class="n_parcel">

        <div class="card">
            <div class="card-body">
                <form action="" id="p_manage">
                    <div class="row ">
                        <div class="col-lg-6  card-body">
                            <b>Sender Information</b>
                            <div class="card card-body">
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






                        </div>
                        <div class="col-lg-6 card-body">
                            <b>Receiver Information</b>
                            <div class="card card-body">
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
                        <div class="col-lg-4  card card-body">
                            <b>Branch Information</b>
                            <div class=" card card-body">
                                <label> From Branch (id)</label>
                                <input type="text" name="frm_branch" placeholder="name">
                            </div>
                            <div class=" card card-body">
                                <label> To Branch (id)</label>
                                <input type="text" name="to_branch" placeholder="">
                            </div>
                            <br>
                            <div class="row d-flex justify-content-center">
                                <input class="btn btn-success col-lg-8" type="submit" name="Save" value=" Save">
                            </div>



                        </div>
                    </div>
                    <br>

                </form>

            </div>
        </div>

    </div>
</body>