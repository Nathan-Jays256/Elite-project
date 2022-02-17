$(function(){
  
  // $('#eye').click(function(){
       
  //       if($(this).hasClass('fa-eye-slash')){
           
  //         $(this).removeClass('fa-eye-slash');
          
  //         $(this).addClass('fa-eye');
          
  //         $('#password').attr('type','text');
            
  //       }else{
         
  //         $(this).removeClass('fa-eye');
          
  //         $(this).addClass('fa-eye-slash');  
          
  //         $('#password').attr('type','password');
  //       }
  //   });
     
    $('#client').click(function(){         
          if($('#client_Form').hasClass('hidden_form')){             
            $('#client_Form').removeClass('hidden_form');     
            $('#client_Form').addClass('visible'); 
            $('#client_icon').addClass('fa-angle-double-up'); 
            $('#client_icon').removeClass('fa-angle-double-down'); 

            $('#Educ_Form').removeClass('visible');            
            $('#Educ_Form').addClass('hidden_form');
            $('#Educ_icon').removeClass('fa-angle-double-up'); 
            $('#Educ_icon').addClass('fa-angle-double-down'); 

            $('#Emp_Form').removeClass('visible');            
            $('#Emp_Form').addClass('hidden_form');
            $('#Emp_icon').removeClass('fa-angle-double-up'); 
            $('#Emp_icon').addClass('fa-angle-double-down');

            $('#spouse_Form').removeClass('visible');            
            $('#spouse_Form').addClass('hidden_form');
            $('#spouse_icon').removeClass('fa-angle-double-up'); 
            $('#spouse_icon').addClass('fa-angle-double-down'); 

            $('#parents_Form').removeClass('visible');            
            $('#parents_Form').addClass('hidden_form');
            $('#parents_icon').removeClass('fa-angle-double-up'); 
            $('#parents_icon').addClass('fa-angle-double-down'); 
          }
          else{           
            $('#client_Form').removeClass('visible');            
            $('#client_Form').addClass('hidden_form');
            $('#client_icon').removeClass('fa-angle-double-up'); 
            $('#client_icon').addClass('fa-angle-double-down'); 
          }
    });
    $('#Educ').click(function(){         
          if($('#Educ_Form').hasClass('hidden_form')){             
            $('#Educ_Form').removeClass('hidden_form');     
            $('#Educ_Form').addClass('visible'); 
            $('#Educ_icon').addClass('fa-angle-double-up'); 
            $('#Educ_icon').removeClass('fa-angle-double-down'); 

            $('#Emp_Form').removeClass('visible');            
            $('#Emp_Form').addClass('hidden_form');
            $('#Emp_icon').removeClass('fa-angle-double-up'); 
            $('#Emp_icon').addClass('fa-angle-double-down');

            $('#spouse_Form').removeClass('visible');            
            $('#spouse_Form').addClass('hidden_form');
            $('#spouse_icon').removeClass('fa-angle-double-up'); 
            $('#spouse_icon').addClass('fa-angle-double-down'); 

            $('#parents_Form').removeClass('visible');            
            $('#parents_Form').addClass('hidden_form');
            $('#parents_icon').removeClass('fa-angle-double-up'); 
            $('#parents_icon').addClass('fa-angle-double-down'); 

            $('#client_Form').removeClass('visible');            
            $('#client_Form').addClass('hidden_form');
            $('#client_icon').removeClass('fa-angle-double-up'); 
            $('#client_icon').addClass('fa-angle-double-down'); 
          }
          else{           
            $('#Educ_Form').removeClass('visible');            
            $('#Educ_Form').addClass('hidden_form');
            $('#Educ_icon').removeClass('fa-angle-double-up'); 
            $('#Educ_icon').addClass('fa-angle-double-down'); 

            
          }
    });
    $('#Emp').click(function(){         
          if($('#Emp_Form').hasClass('hidden_form')){             
            $('#Emp_Form').removeClass('hidden_form');     
            $('#Emp_Form').addClass('visible'); 
            $('#Emp_icon').addClass('fa-angle-double-up'); 
            $('#Emp_icon').removeClass('fa-angle-double-down'); 

            $('#spouse_Form').removeClass('visible');            
            $('#spouse_Form').addClass('hidden_form');
            $('#spouse_icon').removeClass('fa-angle-double-up'); 
            $('#spouse_icon').addClass('fa-angle-double-down'); 

            $('#parents_Form').removeClass('visible');            
            $('#parents_Form').addClass('hidden_form');
            $('#parents_icon').removeClass('fa-angle-double-up'); 
            $('#parents_icon').addClass('fa-angle-double-down'); 

            $('#client_Form').removeClass('visible');            
            $('#client_Form').addClass('hidden_form');
            $('#client_icon').removeClass('fa-angle-double-up'); 
            $('#client_icon').addClass('fa-angle-double-down'); 

            $('#Educ_Form').removeClass('visible');            
            $('#Educ_Form').addClass('hidden_form');
            $('#Educ_icon').removeClass('fa-angle-double-up'); 
            $('#Educ_icon').addClass('fa-angle-double-down'); 
          }
          else{           
            $('#Emp_Form').removeClass('visible');            
            $('#Emp_Form').addClass('hidden_form');
            $('#Emp_icon').removeClass('fa-angle-double-up'); 
            $('#Emp_icon').addClass('fa-angle-double-down'); 
          }
    });
    $('#spouse').click(function(){         
          if($('#spouse_Form').hasClass('hidden_form')){             
            $('#spouse_Form').removeClass('hidden_form');     
            $('#spouse_Form').addClass('visible'); 
            $('#spouse_icon').addClass('fa-angle-double-up'); 
            $('#spouse_icon').removeClass('fa-angle-double-down');
            
            $('#Emp_Form').removeClass('visible');            
            $('#Emp_Form').addClass('hidden_form');
            $('#Emp_icon').removeClass('fa-angle-double-up'); 
            $('#Emp_icon').addClass('fa-angle-double-down'); 

            $('#parents_Form').removeClass('visible');            
            $('#parents_Form').addClass('hidden_form');
            $('#parents_icon').removeClass('fa-angle-double-up'); 
            $('#parents_icon').addClass('fa-angle-double-down'); 

            $('#client_Form').removeClass('visible');            
            $('#client_Form').addClass('hidden_form');
            $('#client_icon').removeClass('fa-angle-double-up'); 
            $('#client_icon').addClass('fa-angle-double-down'); 

            $('#Educ_Form').removeClass('visible');            
            $('#Educ_Form').addClass('hidden_form');
            $('#Educ_icon').removeClass('fa-angle-double-up'); 
            $('#Educ_icon').addClass('fa-angle-double-down');
          }
          else{           
            $('#spouse_Form').removeClass('visible');            
            $('#spouse_Form').addClass('hidden_form');
            $('#spouse_icon').removeClass('fa-angle-double-up'); 
            $('#spouse_icon').addClass('fa-angle-double-down'); 
          }
    });
    $('#parents').click(function(){         
          if($('#parents_Form').hasClass('hidden_form')){             
            $('#parents_Form').removeClass('hidden_form');     
            $('#parents_Form').addClass('visible'); 
            $('#parents_icon').addClass('fa-angle-double-up'); 
            $('#parents_icon').removeClass('fa-angle-double-down'); 

            $('#spouse_Form').removeClass('visible');            
            $('#spouse_Form').addClass('hidden_form');
            $('#spouse_icon').removeClass('fa-angle-double-up'); 
            $('#spouse_icon').addClass('fa-angle-double-down'); 

            $('#Emp_Form').removeClass('visible');            
            $('#Emp_Form').addClass('hidden_form');
            $('#Emp_icon').removeClass('fa-angle-double-up'); 
            $('#Emp_icon').addClass('fa-angle-double-down'); 

            $('#client_Form').removeClass('visible');            
            $('#client_Form').addClass('hidden_form');
            $('#client_icon').removeClass('fa-angle-double-up'); 
            $('#client_icon').addClass('fa-angle-double-down'); 

            $('#Educ_Form').removeClass('visible');            
            $('#Educ_Form').addClass('hidden_form');
            $('#Educ_icon').removeClass('fa-angle-double-up'); 
            $('#Educ_icon').addClass('fa-angle-double-down');
          }
          else{           
            $('#parents_Form').removeClass('visible');            
            $('#parents_Form').addClass('hidden_form');
            $('#parents_icon').removeClass('fa-angle-double-up'); 
            $('#parents_icon').addClass('fa-angle-double-down'); 
          }
    });
  });