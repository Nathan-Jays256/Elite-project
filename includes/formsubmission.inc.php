<?php

if (isset($_POST['save_btn'])) {
    include_once 'dbh.inc.php';
    # Client Details...
    $regNo = $_POST['regNo'];
    $reg_date = $_POST['reg_date'];
    $c_name = $_POST['c_name'];
    $c_age = $_POST['c_age'];
    $gender = $_POST['gender'];
    $passport_no = $_POST['passport_no'];
    $ped = $_POST['ped'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_div = $_POST['c_div'];
    $c_district = $_POST['c_district'];
    $martial_status = $_POST['martial_status'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $religion = $_POST['religion'];
    
    # Education Details...
    $nos = $_POST['nos'];
    $year_finished = $_POST['year_finished'];
    $award = $_POST['award'];

    # Employment Details...
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $work_duration = $_POST['work_duration'];

    # Spouse Details...
    $spouse_name = $_POST['spouse_name'];
    $spouse_martial_status = $_POST['spouse_martial_status'];
    $num_children = $_POST['num_children'];
    $s_contact = $_POST['s_contact'];
    $s_address = $_POST['s_address'];
    $s_division = $_POST['s_division'];
    $s_district = $_POST['s_district'];

    # Parents / Guardian Details...
        # father's Details...
        $f_name = $_POST['f_name'];
        $f_contact = $_POST['f_contact'];
        $f_address = $_POST['f_address'];
        $f_div = $_POST['f_div'];
        $f_dis = $_POST['f_dis'];

        # Mother's Details...
        $m_name = $_POST['m_name'];
        $m_contact = $_POST['m_contact'];
        $m_address = $_POST['m_address'];
        $m_div = $_POST['m_div'];
        $m_dis = $_POST['m_dis'];

        # Gaurdian's Details...
        $g_name = $_POST['g_name'];
        $g_contact = $_POST['g_contact'];
        $relation = $_POST['relation'];
        $g_age = $_POST['g_age'];
        $g_address = $_POST['g_address'];
        $g_div = $_POST['g_div'];
        $g_dis = $_POST['g_dis'];


       $sql = "INSERT INTO `clients_details`(registration_no,registration_date,fullname,age,gender,passport_no,passport_expiry_date,date_of_birth,place_of_birth,contact,c_address,division,district,marital_status,height,c_weight,religion) 
                VALUES ('$regNo','$reg_date','$c_name','$c_age','$gender','$passport_no','$ped','$dob','$pob','$c_contact','$c_address','$c_div','$c_district','$martial_status','$height','$weight','$religion');
       
                INSERT INTO education_details(registration_no, school_name, year_finised_studies, award_acquired)
                VALUES ('$regNo', '$nos','$year_finished','$award');

                INSERT INTO employment_details(registration_no, company_name, position_held, work_duration)
                 VALUES ('$regNo', '$company_name','$position','$work_duration');

                INSERT INTO spouse_details(registration_no, spouse_name, spouse_martial_status, num_children, spouse_contact, spouse_address, spouse_division, spouse_district)
                VALUES ('$regNo','$spouse_name','$spouse_martial_status','$num_children','$s_contact', '$s_address', '$s_division', '$s_district');
                
                INSERT INTO parents_details(registration_no, father_name, father_contact, father_address, father_division, father_district, mother_name, mother_contact, mother_address, mother_division, mother_district)
                VALUES ('$regNo', '$f_name','$f_contact','$f_address','$f_div', '$f_dis', '$m_name','$m_contact','$m_address','$m_div','$m_dis');

                INSERT INTO guardian_details(registration_no, gaurdian_name, gaurdian_contact, relationship, gaurdian_age, gaurdian_address, gaurdian_division, gaurdian_district)
                VALUES ('$regNo', '$g_name', '$g_contact', '$relation', '$g_age', '$g_address', '$g_div', '$g_dis');


       ";
        
        if($conn->multi_query($sql) === TRUE) {
           
                            echo"<script>
							window.alert('post Published Successfully');
							</script>";
        }
        else {
            
            echo"Data submission failed!!!."." <br>"." <br>".
            $conn->error." <br>"." <br>".
            $regNo." <br>".$reg_date." <br>".$c_name." <br>".$c_age."<br>".$gender."<br>".$passport_no." <br>".$ped." <br>".$dob." <br>".$pob." <br>".$c_contact
            ." <br>".$c_address." <br>".$c_div." <br>".$c_district." <br>".$martial_status." <br>".$height." <br>".$weight." <br>".$religion;
        }
}

 
            
            



