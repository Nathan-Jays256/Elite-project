<?php
function getalldata($table){ 
    require "dbh.inc.php";
    $sql="SELECT registration_no ,registration_date,fullname,age,gender,passport_no,passport_expiry_date,date_of_birth,place_of_birth,contact,c_address
    FROM $table";
    if ($results=mysqli_query($conn,$sql))
    {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($results);
        //if no rows returned show no posts alert
        if ($rowcount==0) {
            # code...
            echo '<tr><td style="min-width: 355px !important;">No Prayer requests to Fetch</td></tr>';
        }
        
        $i = 1;
        foreach ($results as $client) { 
            echo'
                <tr>
                    <td style="width:50px;">
                        <a href="details.php?id='.$client['registration_no'].'"><h6>'.$client['registration_no'].'</h6></a>
                    </td >
                    <td style="width:150px;">'.$client['registration_date'].'</td>
                    <td style="width:150px;">'.$client['fullname'].'</td>
                    <td style="width:150px;">'.$client['age'].'</td>
                    <td style="width:50px;"><span class="round">'.$client['gender'].'</span></td>
                    <td style="width:50px;">
                        <h6>'.$client['passport_no'].'</h6><small class="text-muted"></small>
                    </td >
                    <td style="width:150px;">'.$client['passport_expiry_date'].'</td>
                    <td style="width:150px;">'.$client['date_of_birth'].'</td>
                    <td style="width:150px;">'.$client['place_of_birth'].'</td>
                    <td style="width:150px;">'.$client['contact'].'</td>
                    <td style="width:150px;">'.$client['c_address'].'</td>
                    
                                               
                                                    
                                                
                </tr>    
            ';           
            
        $i++;
        }
    }

    mysqli_close($conn); 
}
?>