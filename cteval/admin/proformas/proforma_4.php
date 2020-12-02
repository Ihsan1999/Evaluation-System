<?php 

include 'layout.php';

 ?>

<script>  
      $(document).ready(function(){  
      document.getElementById("demo").innerHTML = "Alumni Survey";  

           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val(); 
                var department = $('#department').val(); 
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter/proforma4_filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date, department:department},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>