<?php
include "includes/functions.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data review</title>
        <link rel="stylesheet" href="assets/css/table.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>
        <section class="bg-light review-section">
            <div class="container">
                <div class="d-flex">
                    <h3 class="message m-auto text-center p-3 color-primary">All saved data</h3>
                    <a href="." class="py-4 text-center ">Back to form</a>
                </div>
            </div>
            <div class="row row-custom">
                        <!-- Column -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="card-title">All People Requests</h5>
                                            </div>
                                        </div>
                                        <div class="table-responsive m-t-20 no-wrap">
                                            <table class="table vm no-th-brd pro-of-month">
                                                <thead>
                                                    <tr>
                                                        <th style="width:150px;">Registration No.</th>
                                                        <th style="width:150px;">Registration Date</th>
                                                        <th>Fullname</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Passport No.</th>
                                                        <th>Passport Expiry Date</th>
                                                        <th>Date of birth</th>
                                                        <th>Place of birth</th>
                                                        <th>Contact</th>    
                                                        <th>Address</th>
                                                        <!-- <th>District</th>
                                                        <th>Marital Status</th>
                                                        <th>Height</th>
                                                        <th>Weight</th>
                                                        <th>Religion</th> -->
                                                        <!-- <th>Actions</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php                                                 
                                                        getalldata("clients_details");
                                                    ?>                                            
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <!-- Column -->
                            
            </div>
        </section>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script> 
    </body>
</html>