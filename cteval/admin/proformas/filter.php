<?php  
error_reporting(0);
 //filter.php 
require 'dbConn.php';


 $count = 0;
 $sum1=0; $sum2=0; $sum3=0; $sum4=0; $sum5=0;
 $sum11=0; $sum22=0; $sum33=0; $sum44=0; $sum55=0;

 $qsum1 = 0;$qsum2 = 0;$qsum3 = 0;$qsum4 = 0;$qsum5 = 0;
 $qsum6 = 0;$qsum7 = 0;$qsum8 = 0;$qsum9 = 0;$qsum10 = 0;
 $qsum11 = 0;$qsum12 = 0;$qsum13 = 0;$qsum14 = 0;$qsum15 = 0;
 $qsum16 = 0;$qsum17 = 0;$qsum18 = 0;$qsum19 = 0;$qsum20 = 0;$qsum21 = 0;$qsum22 = 0;


             $c1=0; $c2=0; $c3=0; $c4=0; $c5=0;
            $c21=0; $c22=0; $c23=0; $c24=0; $c25=0;
            $c31=0; $c32=0; $c33=0; $c34=0; $c35=0;
            $c41=0; $c42=0; $c43=0; $c44=0; $c45=0;
            $c51=0; $c52=0; $c53=0; $c54=0; $c55=0;
            $c61=0; $c62=0; $c63=0; $c64=0; $c65=0;
            $c71=0; $c72=0; $c73=0; $c74=0; $c75=0;
            $c81=0; $c82=0; $c83=0; $c84=0; $c85=0;
            $c91=0; $c92=0; $c93=0; $c94=0; $c95=0;

            $c101=0; $c102=0; $c103=0; $c104=0; $c105=0;
            $c111=0; $c112=0; $c113=0; $c114=0; $c115=0;
            $c121=0; $c122=0; $c123=0; $c124=0; $c125=0;
            $c131=0; $c132=0; $c133=0; $c134=0; $c135=0;
            $c141=0; $c142=0; $c143=0; $c144=0; $c145=0;
            $c151=0; $c152=0; $c153=0; $c154=0; $c155=0;
            $c161=0; $c162=0; $c163=0; $c164=0; $c165=0;
            $c171=0; $c172=0; $c173=0; $c174=0; $c175=0;
            $c181=0; $c182=0; $c183=0; $c184=0; $c185=0;
            $c191=0; $c192=0; $c193=0; $c194=0; $c195=0;
            $c201=0; $c202=0; $c203=0; $c204=0; $c205=0;
            $c211=0; $c212=0; $c213=0; $c214=0; $c215=0;
            $c221=0; $c222=0; $c223=0; $c224=0; $c225=0;
 

 if(isset($_POST["from_date"], $_POST["to_date"], $_POST["department"]))  
 {  
      $department = $_POST["department"];
      $output = '';


      $query_count = "  
           SELECT * FROM survey_of_graduates  
           WHERE department IN ('$department') AND submitDate BETWEEN 
           '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' GROUP BY submitDate  
      "; 

      $result_count = mysqli_query($con, $query_count);

      $count = mysqli_num_rows($result_count);


      $query = "  
           SELECT * FROM survey_of_graduates  
           WHERE department IN ('$department') AND submitDate BETWEEN 
           '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($con, $query);  
      $output .= '  
        <table class="table table-bordered">  
          <tr>  
            <th width="5%">Question</th>  
            <th width="10%">A</th> 
            <th width="10%">B</th>  
            <th width="10%">C</th>  
            <th width="10%">D</th>  
            <th width="10%">E</th>
          </tr>  
      ';  
      if(mysqli_num_rows($result) >= 0)  
      {  


            // $c1=0; $c2=0; $c3=0; $c4=0; $c5=0;

            

          while($row=mysqli_fetch_array($result)){ 

      

            if($row["qid"] == "sgsq1"){
              $sgsq1 = "Q1";
              if($row["satisfaction"] == 1){ $c1++; $qsum1 = $qsum1+1; }
              if($row["satisfaction"] == 2){ $c2++; $qsum1 = $qsum1+2; }
              if($row["satisfaction"] == 3){ $c3++; $qsum1 = $qsum1+3; }
              if($row["satisfaction"] == 4){ $c4++; $qsum1 = $qsum1+4; }
              if($row["satisfaction"] == 5){ $c5++; $qsum1 = $qsum1+5; }
              
            }

            if($row["qid"] == "sgsq2"){
              $sgsq2 = "Q2";
              if($row["satisfaction"] == 1){ $c21++; $qsum2 = $qsum2+1; }
              if($row["satisfaction"] == 2){ $c22++; $qsum2 = $qsum2+2; }
              if($row["satisfaction"] == 3){ $c23++; $qsum2 = $qsum2+3; }
              if($row["satisfaction"] == 4){ $c24++; $qsum2 = $qsum2+4; }
              if($row["satisfaction"] == 5){ $c25++; $qsum2 = $qsum2+5; }
            }

            if($row["qid"] == "sgsq3"){
              $sgsq3 = "Q3";
              if($row["satisfaction"] == 1){ $c31++; $qsum3 = $qsum3+1; }
              if($row["satisfaction"] == 2){ $c32++; $qsum3 = $qsum3+2; }
              if($row["satisfaction"] == 3){ $c33++; $qsum3 = $qsum3+3; }
              if($row["satisfaction"] == 4){ $c34++; $qsum3 = $qsum3+4; }
              if($row["satisfaction"] == 5){ $c35++; $qsum3 = $qsum3+5; }
            }

            if($row["qid"] == "sgsq4"){
              $sgsq4 = "Q4";
              if($row["satisfaction"] == 1){ $c41++; $qsum4 = $qsum4+1; }
              if($row["satisfaction"] == 2){ $c42++; $qsum4 = $qsum4+2; }
              if($row["satisfaction"] == 3){ $c43++; $qsum4 = $qsum4+3; }
              if($row["satisfaction"] == 4){ $c44++; $qsum4 = $qsum4+4; }
              if($row["satisfaction"] == 5){ $c45++; $qsum4 = $qsum4+5; }
            }

            if($row["qid"] == "sgsq5"){
              $sgsq5 = "Q5";
              if($row["satisfaction"] == 1){ $c51++; $qsum5 = $qsum5+1; }
              if($row["satisfaction"] == 2){ $c52++; $qsum5 = $qsum5+2; }
              if($row["satisfaction"] == 3){ $c53++; $qsum5 = $qsum5+3; }
              if($row["satisfaction"] == 4){ $c54++; $qsum5 = $qsum5+4; }
              if($row["satisfaction"] == 5){ $c55++; $qsum5 = $qsum5+5; }
            }

            if($row["qid"] == "sgsq6"){
              $sgsq6 = "Q6";
              if($row["satisfaction"] == 1){ $c61++; $qsum6 = $qsum6+1; }
              if($row["satisfaction"] == 2){ $c62++; $qsum6 = $qsum6+2; }
              if($row["satisfaction"] == 3){ $c63++; $qsum6 = $qsum6+3; }
              if($row["satisfaction"] == 4){ $c64++; $qsum6 = $qsum6+4; }
              if($row["satisfaction"] == 5){ $c65++; $qsum6 = $qsum6+5; }
            }

            if($row["qid"] == "sgsq7"){
              $sgsq7 = "Q7";
              if($row["satisfaction"] == 1){ $c71++; $qsum7 = $qsum7+1; }
              if($row["satisfaction"] == 2){ $c72++; $qsum7 = $qsum7+2; }
              if($row["satisfaction"] == 3){ $c73++; $qsum7 = $qsum7+3; }
              if($row["satisfaction"] == 4){ $c74++; $qsum7 = $qsum7+4; }
              if($row["satisfaction"] == 5){ $c75++; $qsum7 = $qsum7+5; }
            }

            if($row["qid"] == "sgsq8"){
              $sgsq8 = "Q8";
              if($row["satisfaction"] == 1){ $c81++; $qsum8 = $qsum8+1; }
              if($row["satisfaction"] == 2){ $c82++; $qsum8 = $qsum8+2; }
              if($row["satisfaction"] == 3){ $c83++; $qsum8 = $qsum8+3; }
              if($row["satisfaction"] == 4){ $c84++; $qsum8 = $qsum8+4; }
              if($row["satisfaction"] == 5){ $c85++; $qsum8 = $qsum8+5; }
            }

            if($row["qid"] == "sgsq9"){
              $sgsq9 = "Q9";
              if($row["satisfaction"] == 1){ $c91++; $qsum9 = $qsum9+1; }
              if($row["satisfaction"] == 2){ $c92++; $qsum9 = $qsum9+2; }
              if($row["satisfaction"] == 3){ $c93++; $qsum9 = $qsum9+3; }
              if($row["satisfaction"] == 4){ $c94++; $qsum9 = $qsum9+4; }
              if($row["satisfaction"] == 5){ $c95++; $qsum9 = $qsum9+5; }
            }

            if($row["qid"] == "sgsq10"){
              $sgsq10 = "Q10";
              if($row["satisfaction"] == 1){ $c101++; $qsum10 = $qsum10+1; }
              if($row["satisfaction"] == 2){ $c102++; $qsum10 = $qsum10+2; }
              if($row["satisfaction"] == 3){ $c103++; $qsum10 = $qsum10+3; }
              if($row["satisfaction"] == 4){ $c104++; $qsum10 = $qsum10+4; }
              if($row["satisfaction"] == 5){ $c105++; $qsum10 = $qsum10+5; }
            }

            if($row["qid"] == "sgsq11"){
              $sgsq11 = "Q11";
              if($row["satisfaction"] == 1){ $c111++; $qsum11 = $qsum11+1; }
              if($row["satisfaction"] == 2){ $c112++; $qsum11 = $qsum11+2; }
              if($row["satisfaction"] == 3){ $c113++; $qsum11 = $qsum11+3; }
              if($row["satisfaction"] == 4){ $c114++; $qsum11 = $qsum11+4; }
              if($row["satisfaction"] == 5){ $c115++; $qsum11 = $qsum11+5; }
            }

            if($row["qid"] == "sgsq12"){
              $sgsq12 = "Q12";
              if($row["satisfaction"] == 1){ $c121++; $qsum12 = $qsum12+1; }
              if($row["satisfaction"] == 2){ $c122++; $qsum12 = $qsum12+2; }
              if($row["satisfaction"] == 3){ $c123++; $qsum12 = $qsum12+3; }
              if($row["satisfaction"] == 4){ $c124++; $qsum12 = $qsum12+4; }
              if($row["satisfaction"] == 5){ $c125++; $qsum12 = $qsum12+5; }
            }

            if($row["qid"] == "sgsq13"){
              $sgsq13 = "Q13";
              if($row["satisfaction"] == 1){ $c131++; $qsum13 = $qsum13+1; }
              if($row["satisfaction"] == 2){ $c132++; $qsum13 = $qsum13+2; }
              if($row["satisfaction"] == 3){ $c133++; $qsum13 = $qsum13+3; }
              if($row["satisfaction"] == 4){ $c134++; $qsum13 = $qsum13+4; }
              if($row["satisfaction"] == 5){ $c135++; $qsum13 = $qsum13+5; }
            }

            if($row["qid"] == "sgsq14"){
              $sgsq14 = "Q14";
              if($row["satisfaction"] == 1){ $c141++; $qsum14 = $qsum14+1; }
              if($row["satisfaction"] == 2){ $c142++; $qsum14 = $qsum14+2; }
              if($row["satisfaction"] == 3){ $c143++; $qsum14 = $qsum14+3; }
              if($row["satisfaction"] == 4){ $c144++; $qsum14 = $qsum14+4; }
              if($row["satisfaction"] == 5){ $c145++; $qsum14 = $qsum14+5; }
            }

            if($row["qid"] == "sgsq15a"){
              $sgsq15a = "Q15a";
              if($row["satisfaction"] == 1){ $c151++; $qsum15 = $qsum15+1; }
              if($row["satisfaction"] == 2){ $c152++; $qsum15 = $qsum15+2; }
              if($row["satisfaction"] == 3){ $c153++; $qsum15 = $qsum15+3; }
              if($row["satisfaction"] == 4){ $c154++; $qsum15 = $qsum15+4; }
              if($row["satisfaction"] == 5){ $c155++; $qsum15 = $qsum15+5; }
            }

            if($row["qid"] == "sgsq15b"){
              $sgsq15b = "Q15b";
              if($row["satisfaction"] == 1){ $c161++; $qsum16 = $qsum16+1; }
              if($row["satisfaction"] == 2){ $c162++; $qsum16 = $qsum16+2; }
              if($row["satisfaction"] == 3){ $c163++; $qsum16 = $qsum16+3; }
              if($row["satisfaction"] == 4){ $c164++; $qsum16 = $qsum16+4; }
              if($row["satisfaction"] == 5){ $c165++; $qsum16 = $qsum16+5; }
            }

            if($row["qid"] == "sgsq15c"){
              $sgsq15c = "Q15c";
              if($row["satisfaction"] == 1){ $c171++; $qsum17 = $qsum17+1; }
              if($row["satisfaction"] == 2){ $c172++; $qsum17 = $qsum17+2; }
              if($row["satisfaction"] == 3){ $c173++; $qsum17 = $qsum17+3; }
              if($row["satisfaction"] == 4){ $c174++; $qsum17 = $qsum17+4; }
              if($row["satisfaction"] == 5){ $c175++; $qsum17 = $qsum17+5; }
            }

            if($row["qid"] == "sgsq15d"){
              $sgsq15d = "Q15d";
              if($row["satisfaction"] == 1){ $c181++; $qsum18 = $qsum18+1; }
              if($row["satisfaction"] == 2){ $c182++; $qsum18 = $qsum18+2; }
              if($row["satisfaction"] == 3){ $c183++; $qsum18 = $qsum18+3; }
              if($row["satisfaction"] == 4){ $c184++; $qsum18 = $qsum18+4; }
              if($row["satisfaction"] == 5){ $c185++; $qsum18 = $qsum18+5; }
            }

            if($row["qid"] == "sgsq15e"){
              $sgsq15e = "Q15e";
              if($row["satisfaction"] == 1){ $c191++; $qsum19 = $qsum19+1; }
              if($row["satisfaction"] == 2){ $c192++; $qsum19 = $qsum19+2; }
              if($row["satisfaction"] == 3){ $c193++; $qsum19 = $qsum19+3; }
              if($row["satisfaction"] == 4){ $c194++; $qsum19 = $qsum19+4; }
              if($row["satisfaction"] == 5){ $c195++; $qsum19 = $qsum19+5; }
            }

            if($row["qid"] == "sgsq15f"){
              $sgsq15f = "Q15f";
              if($row["satisfaction"] == 1){ $c201++; $qsum20 = $qsum20+1; }
              if($row["satisfaction"] == 2){ $c202++; $qsum20 = $qsum20+2; }
              if($row["satisfaction"] == 3){ $c203++; $qsum20 = $qsum20+3; }
              if($row["satisfaction"] == 4){ $c204++; $qsum20 = $qsum20+4; }
              if($row["satisfaction"] == 5){ $c205++; $qsum20 = $qsum20+5; }
            }

            if($row["qid"] == "sgsq15g"){
              $sgsq15g = "Q15g";
              if($row["satisfaction"] == 1){ $c211++; $qsum21 = $qsum21+1; }
              if($row["satisfaction"] == 2){ $c212++; $qsum21 = $qsum21+2; }
              if($row["satisfaction"] == 3){ $c213++; $qsum21 = $qsum21+3; }
              if($row["satisfaction"] == 4){ $c214++; $qsum21 = $qsum21+4; }
              if($row["satisfaction"] == 5){ $c215++; $qsum21 = $qsum21+5; }
            }

            if($row["qid"] == "sgsq15h"){
              $sgsq15h = "Q15h";
              if($row["satisfaction"] == 1){ $c221++; $qsum22 = $qsum22+1; }
              if($row["satisfaction"] == 2){ $c222++; $qsum22 = $qsum22+2; }
              if($row["satisfaction"] == 3){ $c223++; $qsum22 = $qsum22+3; }
              if($row["satisfaction"] == 4){ $c224++; $qsum22 = $qsum22+4; }
              if($row["satisfaction"] == 5){ $c225++; $qsum22 = $qsum22+5; }
            }

            if($row["satisfaction"] == 1){
              $sum1 += $row['satisfaction'];
              $sum22++;$sum33++;$sum44++;$sum55++;
            }

            if($row["satisfaction"] == 2){
              $sum2 += $row['satisfaction'] - 1;
              $sum11++;$sum33++;$sum44++;$sum55++;
            }

            if($row["satisfaction"] == 3){
              $sum3 += $row['satisfaction'] - 2;
              $sum11++;$sum22++;$sum44++;$sum55++;
            }

            if($row["satisfaction"] == 4){
              $sum4 += $row['satisfaction'] - 3;
              $sum11++;$sum22++;$sum33++;$sum55++;
            }

            if($row["satisfaction"] == 5){
              $sum5 += $row['satisfaction'] - 4;
              $sum11++;$sum22++;$sum33++;$sum44++;
            }

            // while end    
          }
          


          $output .= '  
                     <tr>  
                          <td>'. $sgsq1 .'</td>  
                          <td>'. $c1.'</td> 
                          <td>'. $c2 .'</td>  
                          <td>'. $c3 .'</td>    
                          <td>'. $c4 .'</td>    
                          <td>'. $c5 .'</td>    
                          

                     </tr>  
                ';
                  $output .= '  
                     <tr>  
                          <td>'. $sgsq2 .'</td>  
                          <td>'. $c21 .'</td> 
                          <td>'. $c22 .'</td>  
                          <td>'. $c23 .'</td>    
                          <td>'. $c24 .'</td>    
                          <td>'. $c25 .'</td>    
                          

                     </tr>  
                ';

                 $output .= '  
                     <tr>  
                          <td>'. $sgsq3 .'</td>  
                          <td>'. $c31 .'</td> 
                          <td>'. $c32 .'</td>  
                          <td>'. $c33 .'</td>    
                          <td>'. $c34 .'</td>    
                          <td>'. $c35 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq4 .'</td>  
                          <td>'. $c41 .'</td> 
                          <td>'. $c42 .'</td>  
                          <td>'. $c43 .'</td>    
                          <td>'. $c44 .'</td>    
                          <td>'. $c45 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq5 .'</td>  
                          <td>'. $c51 .'</td> 
                          <td>'. $c52 .'</td>  
                          <td>'. $c53 .'</td>    
                          <td>'. $c54 .'</td>    
                          <td>'. $c55 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq6 .'</td>  
                          <td>'. $c61 .'</td> 
                          <td>'. $c62 .'</td>  
                          <td>'. $c63 .'</td>    
                          <td>'. $c64 .'</td>    
                          <td>'. $c65 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq7 .'</td>  
                          <td>'. $c71 .'</td> 
                          <td>'. $c72 .'</td>  
                          <td>'. $c73 .'</td>    
                          <td>'. $c74 .'</td>    
                          <td>'. $c75 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq8 .'</td>  
                          <td>'. $c81 .'</td> 
                          <td>'. $c82 .'</td>  
                          <td>'. $c83 .'</td>    
                          <td>'. $c84 .'</td>    
                          <td>'. $c85 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq9 .'</td>  
                          <td>'. $c91 .'</td> 
                          <td>'. $c92 .'</td>  
                          <td>'. $c93 .'</td>    
                          <td>'. $c94 .'</td>    
                          <td>'. $c95 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq10 .'</td>  
                          <td>'. $c101 .'</td> 
                          <td>'. $c102 .'</td>  
                          <td>'. $c103 .'</td>    
                          <td>'. $c104 .'</td>    
                          <td>'. $c105 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq11 .'</td>  
                          <td>'. $c111 .'</td> 
                          <td>'. $c112 .'</td>  
                          <td>'. $c113 .'</td>    
                          <td>'. $c114 .'</td>    
                          <td>'. $c115 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq12 .'</td>  
                          <td>'. $c121 .'</td> 
                          <td>'. $c122 .'</td>  
                          <td>'. $c123 .'</td>    
                          <td>'. $c124 .'</td>    
                          <td>'. $c125 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq13 .'</td>  
                          <td>'. $c131 .'</td> 
                          <td>'. $c132 .'</td>  
                          <td>'. $c133 .'</td>    
                          <td>'. $c134 .'</td>    
                          <td>'. $c135 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq14 .'</td>  
                          <td>'. $c141 .'</td> 
                          <td>'. $c142 .'</td>  
                          <td>'. $c143 .'</td>    
                          <td>'. $c144 .'</td>    
                          <td>'. $c145 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15a .'</td>  
                          <td>'. $c151 .'</td> 
                          <td>'. $c152 .'</td>  
                          <td>'. $c153 .'</td>    
                          <td>'. $c154 .'</td>    
                          <td>'. $c155 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15b .'</td>  
                          <td>'. $c161 .'</td> 
                          <td>'. $c162 .'</td>  
                          <td>'. $c163 .'</td>    
                          <td>'. $c164 .'</td>    
                          <td>'. $c165 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15c .'</td>  
                          <td>'. $c171 .'</td> 
                          <td>'. $c172 .'</td>  
                          <td>'. $c173 .'</td>    
                          <td>'. $c174 .'</td>    
                          <td>'. $c175 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15d .'</td>  
                          <td>'. $c181 .'</td> 
                          <td>'. $c182 .'</td>  
                          <td>'. $c183 .'</td>    
                          <td>'. $c184 .'</td>    
                          <td>'. $c185 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15e .'</td>  
                          <td>'. $c191 .'</td> 
                          <td>'. $c192 .'</td>  
                          <td>'. $c193 .'</td>    
                          <td>'. $c194 .'</td>    
                          <td>'. $c195 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15f .'</td>  
                          <td>'. $c201 .'</td> 
                          <td>'. $c202 .'</td>  
                          <td>'. $c203 .'</td>    
                          <td>'. $c204 .'</td>    
                          <td>'. $c205 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15g .'</td>  
                          <td>'. $c211 .'</td> 
                          <td>'. $c212 .'</td>  
                          <td>'. $c213 .'</td>    
                          <td>'. $c214 .'</td>    
                          <td>'. $c215 .'</td>    
                          

                     </tr>  
                ';

                $output .= '  
                     <tr>  
                          <td>'. $sgsq15h .'</td>  
                          <td>'. $c221 .'</td> 
                          <td>'. $c222 .'</td>  
                          <td>'. $c223 .'</td>    
                          <td>'. $c224 .'</td>    
                          <td>'. $c225 .'</td>    
                          

                     </tr>  
                ';  


                $output .= '  
                     <tr>  
                          <td>'. "Total" .'</td>  
                          <td>'. $sum1 .'</td> 
                          <td>'. $sum2 .'</td> 
                          <td>'. $sum3 .'</td> 
                          <td>'. $sum4 .'</td> 
                          <td>'. $sum5 .'</td>                          

                     </tr>  
                ';
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  

?>


<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Proforma', 'Survey Of Graduate Students Pie Chart'],
          ['A',     <?php echo $sum1; ?>],
          ['B',      <?php echo $sum2; ?>],
          ['C',  <?php echo $sum3; ?>],
          ['D', <?php echo $sum4; ?>],
          ['E',    <?php echo $sum5; ?>]
        ]);

        var options = {
          title: 'Survey Of Graduate Students',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


<script>
  

  google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawTitleSubtitle);

function drawTitleSubtitle() {
      var data = google.visualization.arrayToDataTable([
        ['Questions', 'Average',],
        ['1', <?php echo $qsum1/$count; ?>],
        ['2', <?php echo $qsum2/$count; ?>],
        ['3', <?php echo $qsum3/$count; ?>],
        ['4', <?php echo $qsum4/$count; ?>],
        ['5', <?php echo $qsum5/$count; ?>],
        ['6', <?php echo $qsum6/$count; ?>],
        ['7', <?php echo $qsum7/$count; ?>],
        ['8', <?php echo $qsum8/$count; ?>],
        ['9', <?php echo $qsum9/$count; ?>],
        ['10', <?php echo $qsum10/$count; ?>],
        ['11', <?php echo $qsum11/$count; ?>],
        ['12', <?php echo $qsum12/$count; ?>],
        ['13', <?php echo $qsum13/$count; ?>],
        ['14', <?php echo $qsum14/$count; ?>],
        ['15', <?php echo $qsum15/$count; ?>],
        ['16', <?php echo $qsum16/$count; ?>],
        ['17', <?php echo $qsum17/$count; ?>],
        ['18', <?php echo $qsum18/$count; ?>],
        ['19', <?php echo $qsum19/$count; ?>],
        ['20', <?php echo $qsum20/$count; ?>],
        ['21', <?php echo $qsum21/$count; ?>],
        ['22', <?php echo $qsum22/$count; ?>]
      ]);

      var materialOptions = {
        chart: {
          title: 'Survey Of Graduate Students Bar Chart',
        },
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          title: 'City'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }

</script>



<?php

 }

 ?>
