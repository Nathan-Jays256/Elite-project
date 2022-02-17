
CREATE TABLE clients_details(
    registration_no varchar(555) NOT NULL PRIMARY KEY,
    registration_date DATE NOT NULL,
    fullname varchar(555) NOT NULL,
    age varchar(555) NOT NULL,
    gender varchar(555) NULL,
    passport_no varchar(555) NOT NULL,
    passport_expiry_date DATE NOT NULL,
    date_of_birth DATE NOT NULL,
    plac_of_birth varchar(555) NOT NULL,
    contact varchar(35) NOT NULL,
    c_address varchar(555) NOT NULL,
    division varchar(555) NOT NULL,
    district varchar(555) NOT NULL,
    marital_status varchar(555) NOT NULL,
    height varchar(555) NOT NULL,
    c_weight varchar(555) NOT NULL,
    religion varchar(555) NOT NULL
); 

CREATE TABLE education_details(
    EducId int PRIMARY key AUTO_INCREMENT,
    registration_no varchar(555),
    school_name varchar(555) NOT NULL,
    year_finised_studies varchar(555) NOT NULL,
    award_acquired varchar(555) NOT NULL,
    FOREIGN KEY(registration_no) REFERENCES clients_details(registration_no)
); 

CREATE TABLE employment_details(
    empId int PRIMARY key AUTO_INCREMENT,
    registration_no varchar(555),
    company_name varchar(555) NOT NULL,
    position_held varchar(555) NOT NULL,
    work_duration varchar(555) NOT NULL,
    FOREIGN KEY(registration_no) REFERENCES clients_details(registration_no)
);
 CREATE TABLE spouse_details( 
     spouseId int PRIMARY key AUTO_INCREMENT,
     registration_no varchar(555) NOT NULL, 
     spouse_name varchar(555) NOT NULL, 
     spouse_martial_status varchar(555) NOT NULL, 
     num_children varchar(555) NOT NULL, 
     spouse_contact varchar(555) NOT NULL, 
     spouse_address varchar(555) NOT NULL, 
     spouse_division varchar(555) NOT NULL, 
     spouse_district varchar(555) NOT NULL,
     FOREIGN KEY(registration_no) REFERENCES clients_details(registration_no)

     );

     create TABLE parents_details(
         p_Id int PRIMARY key AUTO_INCREMENT,
         registration_no varchar(555) NOT NULL, 
         father_name varchar(555) NOT NULL, 
         father_contact varchar(555) NOT NULL, 
         father_address varchar(555) NOT NULL, 
         father_division varchar(555) NOT NULL, 
         father_district varchar(555) NOT NULL, 
         mother_name varchar(555) NOT NULL, 
         mother_contact varchar(555) NOT NULL, 
         mother_address varchar(555) NOT NULL, 
         mother_division varchar(555) NOT NULL, 
         mother_district varchar(555) NOT NULL,
         FOREIGN KEY(registration_no) REFERENCES clients_details(registration_no)

         );

create TABLE guardian_details(
    guardian_Id int PRIMARY key AUTO_INCREMENT,
    registration_no varchar(555) NOT NULL, 
    gaurdian_name varchar(555) NOT NULL, 
    gaurdian_contact varchar(555) NOT NULL,
    relationship varchar(555) NOT NULL, 
    gaurdian_age varchar(555) NOT NULL, 
    gaurdian_address varchar(555) NOT NULL, 
    gaurdian_division varchar(555) NOT NULL, 
    gaurdian_district varchar(555) NOT NULL,
    FOREIGN KEY(registration_no) REFERENCES clients_details(registration_no)

    )