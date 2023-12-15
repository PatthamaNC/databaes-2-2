<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css"> 
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css"> 
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

</head>
<body>
    <div class="container">
    <?php
        session_start();
        if (!empty($_SESSION["msg"])){
            echo "<script>alert(\"".$_SESSION["msg"]."\");</script>";
            $_SESSION["msg"] = null;
            // session_destroy();
        }
    ?>
        <div class="row">
            <div class="col-md-12">
                <br>
                <h3 style="text-align:center;">Add herdsman</h3>
                <br>
                <div class="content mt-3">
                <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><a href="home.php">Home </a> -> Add herdsman</strong>
                            </div>
                            <div class="card-body">
                                <form action="../function/insert_herdsman.php" method="post">

                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                    <label for="herdsman_name">herdsman ID <span style="color: red;">*</span></label>
                                        <input type="text" name="herdsman_id" id="herdsman_id" value="" class="form-control req_herdsman_id"
                                        placeholder="">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                    <label for="herdsman_name">first Name <span style="color: red;">*</span></label>
                                        <input type="text" name="first_name" id="first_name" value="" class="form-control req_first_name"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                    <label for="herdsman_name">last Name <span style="color: red;">*</span></label>
                                        <input type="text" name="last_name" id="last_name" value="" class="form-control req_last_name"
                                        placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="form-group">
                                    <label for="herdsman_name">herdsman age <span style="color: red;">*</span></label>
                                        <input type="text" name="herdsman_age" id="herdsman_age" value="" class="form-control req_herdsman_age"
                                        placeholder="">
                                    </div>
                                </div>
                            <!-- <hr> -->
                            <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="country_count">จำนวนประเทศ <span style="color: red;">*</span></label>
                                            <input type="number" name="country_count" id="country_count" value="" onkeyup="gen_html()"
                                            class="form-control req_country_count"
                                            placeholder="">
                                </div>
                            </div> -->

                            <div style="text-align: right;">
                                <button type="button" class="btn btn-warning btn-lg" onclick="location.href='home.php?view=herdsman'" style="width: 150px;">กลับ</button>
                                <button type="submit" class="btn btn-success btn-lg" style="width: 150px;">บันทึก</button>
                            </div>
                            
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        function gen_html(){
            var para = document.createElement("P");
            para.innerHTML = "This is a paragraph.";
            document.getElementById("gen_country").appendChild(para);
        }
    </script> -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../js/init-scripts/data-table/datatables-init.js"></script>

</body>
</html>