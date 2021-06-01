<?php include('header.php') ?>;
<?php include('library.php') ?>;



<body class="overflow-auto container">

    <div class="n_parcel">


        <div class="card ">

            <div class="card-body">

                <form action="create_p.php" id="p_manage" method="POST">
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
                                    <input type="text" name="sender-contact">
                                </div>
                            </div>






                        </div>
                        <div class="col-lg-6 card-body">
                            <b>Receiver Information</b>
                            <div class="card card-body">
                                <div class=" card card-body">
                                    <label> Name</label>
                                    <input type="text" name="receiver-name" placeholder="">
                                </div>
                                <div class=" card card-body">
                                    <label> Receiver address</label>
                                    <input type="text" name="receiver-ad" placeholder="">
                                </div>
                                <div class=" card card-body">
                                    <label> Contact</label>
                                    <input type="text" name="receiver-contact" placeholder="">
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
                                <input type="number" name="ref_no" placeholder="">
                            </div>
                            <div class=" card card-body">
                                <label> Weight</label>
                                <input type="text" name="p_weight" placeholder="">
                            </div>
                            <div class=" card card-body">
                                <label> Price</label>
                                <input type="text" name="p_price" placeholder="">
                            </div>
                            <div class=" card card-body">
                                <label> Status</label>
                                <select name="p_status" id="status">
                                    <option value="Accepted Parcel">Accepted Parcel</option>
                                    <option value="Collected">Collected</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Intransit">In-transit</option>
                                    <option value="Arrived">Arrived</option>
                                    <option value="Ready For Pickup">Ready For Pickup</option>
                                    <option value="Delivered">Delivered</option>
                                    <option value="Picked Up">Picked Up</option>
                                    <option value="Delivered Unsuccesful">Delivered Unsuccesful</option>

                                </select>
                            </div>





                        </div>
                        <div class="col-lg-4  card card-body">
                            <b>Branch Information</b>
                            <div class=" card card-body">
                                <label> From Branch (id)</label>
                                <input type="text" name="frm_branch" placeholder="">
                            </div>
                            <div class=" card card-body">
                                <label> To Branch (id)</label>
                                <input type="text" name="to_branch" placeholder="">
                            </div>
                            <br>
                            <div class="row d-flex ">

                                <div class="col col-lg-6 ps-4"> <input class="btn btn-success col-lg-8 " type="submit"
                                        name="Save" value=" Save">
                                </div>
                                <div class="col col-6">
                                    <input class="btn btn-dark col-lg-8 " type="reset" name="reset" value=" reset">
                                </div>
                            </div>




                        </div>
                    </div>
                    <br>

                </form>


            </div>
            <?php include('sidemenu.php') ?>;


        </div>
        <?php include('footer.php') ?>;
    </div>



</body>