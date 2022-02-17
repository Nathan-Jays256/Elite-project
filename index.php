<?php
include "includes/dbh.inc.php";
include "includes/formsubmission.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite International</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <section class="mt-5">
            <div class="container">
                
                <form action="includes/formsubmission.inc.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 m-auto"> 
                        <div class="d-flex" style="">
                    <h3 class="text-center p-3 text-uppercase color-primary">Elite Registration Forms</h3>
                    <a href="review" class="py-4 pl-5">View all candidates registered</a>

                </div>               
                                <div class="card card-pad mb-2">
                                    <div class="card-body p-3 ">
                                        <h5 id="client" style="cursor: pointer; text-transform: capitalize;">
                                            <i class="fa fas fa-angle-double-down" id="client_icon"></i>
                                             Client's Personal details
                                        </h5>
                                        <div id="client_Form" class="hidden_form">
                                            <div  class="row">
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Fullname</label>
                                                    <input type="text" name="c_name" placeholder="Please enter Fullname" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Age</label>
                                                    <input type="text" name="c_age" placeholder="Age" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Sex</label><br>
                                                            <input type="radio" name="gender" value="Male" id="" required>
                                                            <label for="input-email" class="pr-5">Male</label>
    
                                                            <input type="radio" name="gender" value="Female" id="" required>
                                                            <label for="input-email">Female</label>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Passport No.</label>
                                                    <input type="text" name="passport_no" placeholder="Passport No." id="input-email" class="form-control" required>
                                                        
                                                    </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Passport Expiry Date</label>
                                                    <input type="date" name="ped" placeholder="Passport Expiry Date" id="input-email" class="form-control" required>
                                                </div>                                            
                                                
                                                
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Date of birth</label>
                                                    <input type="date" name="dob" placeholder="Username" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Place of birth</label>
                                                    <input type="text" name="pob" placeholder="Place of birth" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Contact</label>
                                                    <input type="text" name="c_contact" placeholder="Contact" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Address</label>
                                                    <input type="text" name="c_address" placeholder="Current Address" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Division</label>
                                                    <input type="text" name="c_div" placeholder="Division" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">District</label>
                                                    <input type="text" name="c_district" placeholder="District" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="martial_status">Martial Status</label>
                                                    <select name="martial_status" id="" class="form-control" required>
                                                        <option class="form-control" value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Complicated">Complicated</option>
    
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Height</label>
                                                    <input type="text" name="height" placeholder="Height" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Weight</label>
                                                    <input type="text" name="weight" placeholder="Weight" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="religion">Religion</label>
                                                    <select name="religion" id="" class="form-control" required>
                                                        <option class="form-control" value="Catholic">Catholic</option>
                                                        <option value="Anglican">Anglican</option>
                                                        <option value="Moslem">Moslem</option>
                                                        <option value="Complicated">Pentecost</option>
    
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="martial_status">Registration No.</label>
                                                    <input type="text" name="regNo" placeholder="Registration No." id="input-email" class="form-control" required>
                                                    
                                                </div>
                                                                                           
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="martial_status">Registration Date</label>
                                                    <input type="date" name="reg_date" placeholder="Registration Date" id="input-email" class="form-control" required>
                                                    
                                                </div>
                                                                                           
                                            </div>
    
                                        </div>
                                        
                                    </div>
                                </div>    
                                <div class="card card-pad mb-2">
                                    <div class="card-body p-3">
                                        <h5 id="Educ" style="cursor: pointer; text-transform: capitalize;">
                                            <i class="fa fas fa-angle-double-down" id="Educ_icon"></i>
                                            Education details
                                        </h5>
                                        <div id="Educ_Form" class="hidden_form">
                                            <div  class="row">
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Name of the school</label>
                                                    <input type="text" name="nos" placeholder="Name of the school" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Year Finished</label>
                                                    <input type="text" name="year_finished" placeholder="Year Finished" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Award Acquired</label>
                                                    <input type="text" name="award" placeholder="Award Acquired" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
    
                                        </div>
                                        
                                    </div>
                                </div> 
                                <div class="card card-pad mb-2">
                                    <div class="card-body p-3">
                                        <h5 id="Emp" style="cursor: pointer; text-transform: capitalize;">
                                            <i class="fa fas fa-angle-double-down" id="Emp_icon"></i>
                                            Employment details
                                        </h5>
                                        <div id="Emp_Form" class="hidden_form">
                                            <div  class="row">
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Company Worked For</label>
                                                    <input type="text" name="company_name" placeholder="Name of the Company Worked For" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Position Held</label>
                                                    <input type="text" name="position" placeholder="Position Held" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Work Duration</label>
                                                    <input type="text" name="work_duration" placeholder="Period Worked for the company" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
    
                                        </div>
                                        
                                    </div>
                                </div>                     
                                <div class="card card-pad mb-2">
                                    <div class="card-body p-3">
                                        <h5 id="spouse" style="cursor: pointer; text-transform: capitalize;">
                                            <i class="fa fas fa-angle-double-down" id="spouse_icon"></i>
                                            Spouse details
                                        </h5>
                                        <div id="spouse_Form" class="hidden_form">
                                            <div  class="row">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Spouse Fullname</label>
                                                    <input type="text" name="spouse_name" placeholder="Spouse Fullname" id="input-email" class="form-control" required>
                                                </div>                                            
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="spouse_martial_status">Martial Status</label>
                                                    <select name="spouse_martial_status" id="" class="form-control" required>
                                                        <option class="form-control" value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Complicated">Complicated</option>
    
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Number of Children</label>
                                                    <input type="number" name="num_children" placeholder="Number of Children" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Spouse Contact</label>
                                                    <input type="text" name="s_contact" placeholder="Spouse Contact" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Address</label>
                                                    <input type="text" name="s_address" placeholder="Spouse's Address" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Division</label>
                                                    <input type="text" name="s_division" placeholder="Division" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">District</label>
                                                    <input type="text" name="s_district" placeholder="District" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
    
                                        </div>
                                        
                                    </div>
                                </div>                     
                                                    
                                <div class="card card-pad mb-2">
                                    <div class="card-body p-3">
                                        <h5 id="parents" style="cursor: pointer; text-transform: capitalize;">
                                            <i class="fa fas fa-angle-double-down" id="parents_icon"></i>
                                            Parents <i class="fa fas fa-plus"></i> Guardian details
                                        </h5>
                                        <div id="parents_Form" class="hidden_form">
                                            <h5 class="p-3">Father's Details</h5>
                                            <div  class="row">
                                                
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Father's Fullname</label>
                                                    <input type="text" name="f_name" placeholder="Father's Fullname" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Contact</label>
                                                    <input type="text" name="f_contact" placeholder="Father's Contact" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Address</label>
                                                    <input type="text" name="f_address" placeholder="Father's Address" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Division</label>
                                                    <input type="text" name="f_div" placeholder="Father's Division" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">District</label>
                                                    <input type="text" name="f_dis" placeholder="Father's District" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
                                            <h5 class="p-3">Mother's Details</h5>
                                            <div  class="row">
                                                
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Mother's Fullname</label>
                                                    <input type="text" name="m_name" placeholder="Mother's Fullname" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Contact</label>
                                                    <input type="text" name="m_contact" placeholder="Mother's Contact" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Address</label>
                                                    <input type="text" name="m_address" placeholder="Mother's Address" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Division</label>
                                                    <input type="text" name="m_div" placeholder="Mother's Division" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">District</label>
                                                    <input type="text" name="m_dis" placeholder="Mother's District" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
                                            <h5 class="p-3">Guardian's Details</h5>
                                            <div  class="row">
                                                
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Guardian's Fullname</label>
                                                    <input type="text" name="g_name" placeholder="Guardian's Fullname" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Contact</label>
                                                    <input type="text" name="g_contact" placeholder="Guardian's Contact" id="input-email" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Relationship with the guardian </label>
                                                    <input type="text" name="relation" placeholder="Relationship with the guardian" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Guardian's Age</label>
                                                    <input type="text" name="g_age" placeholder="Guardian's Age" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Address</label>
                                                    <input type="text" name="g_address" placeholder="Guardian's Address" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">Division</label>
                                                    <input type="text" name="g_div" placeholder="Guardian's Division" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                                <div class="form-group col-lg-4 col-md-12 col-sm-12 py-2">
                                                    <label for="input-email">District</label>
                                                    <input type="text" name="g_dis" placeholder="Guardian's District" id="input-email" class="form-control" required>
                                                </div>                                                                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-10 col-sm-10 m-auto">
                            <input class="form-control" type="submit" class="s_btn" name="save_btn" value="Save Prayer request" />
                        </div>
                    </div>
                </form>
            </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>