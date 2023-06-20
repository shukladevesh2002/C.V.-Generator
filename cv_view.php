<?php
session_start();
include "Connect.php";
$num = 1;$p=1;
$_SESSION['cv_user']=1;
if (isset($_SESSION['cv_user'])) {
    $id = $_SESSION['cv_user'];
    $fetch = "SELECT * FROM `personel_detail_tb` WHERE `u_id`=$id";
    $sql = $conn->query($fetch);
    $record = $sql->fetch_assoc();
    $edu = "SELECT * FROM `education_tb` as `e`  WHERE  `e`.`u_id`='$id'  AND `e`.`type`=''";
    $sql_edu = $conn->query($edu);
    $pro_edu = "SELECT * FROM `education_tb` as `e`  WHERE  `e`.`u_id`='$id'  AND `e`.`type`='professional'";
    $sql_pro=$conn->query($pro_edu);
    $exp = "SELECT * FROM `experience_tb` as `exp`  WHERE  `exp`.`u_id`='$id'";
    $sql_exp = $conn->query($exp);
    $skill = "SELECT * FROM `skill_tb` as `sk`  WHERE  `sk`.`u_id`='$id'";
    $sql_skill = $conn->query($skill);
    $sql_hobbie = $conn->query($skill);
    $sql_certificate = $conn->query($skill);
    $sql_language = $conn->query($skill);
    $sql_rec = $conn->query($skill);
    $sql_projects = $conn->query($skill);
}else{

}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
   
  <!--  **************************************************** Style Sheet Csss ***********************************************************--> 
    <!--  **************************************************** Style Sheet Csss ***********************************************************-->  
    <link rel="stylesheet" href="cv.css">
 <!-- *************************************************************************************************************************************-->
    <title>Your CV</title>
<style>
* {
    margin: 0px;
}
.content{
margin-left:255px;
}
.cv-header {
    justify-content: start;
    min-width: fit-content;
    border: 2px solid black;

    background-color: #016EA7;
}

img { margin:5px 0px;
   margin-left:825px;
 margin-right:1em;
    border: 5px solid white;
    position:relative;

}

.line-1,
.line-2 {
    display: inline-block;


    border: 1px solid white;
}





.name-desg {
    
    color: white;
    position: absolute;
    display: inline-block;
   margin-left:10px;
  

}

.name-desg span:first-child {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 display:block;
 font-size:36px;
    font-variant: small-caps;
}

.name-desg span:last-child {
    display: block;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    margin-top: -2px;
    font-variant: small-caps;
    font-size:30px;
}

.personel-info {
    position:absolute;
    display: inline-block;
  margin-left:15px;
  padding:8px;
    margin-top:90px;
 font-size:16px;
    color: white;
}

i {
    margin-right: 15px;
}

.all-info table {
    position: relative;
    display: inline-block;
    
  border-radius:25px;
  
}

.col-1 {
    width:60%;
 
position: relative;  
min-height:fit-content;


}




td{
border:2px solid black;
}



td:last-child h2 {
    margin-top:26px;
  padding: 0px 4px;
    text-align: left;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 24px;
    background-color:rgba(35,36,0,0.3);
}

td:first-child h2 {
   padding:0px 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 24px;

    text-align: left;

    background-color:rgba(35,36,0,0.3);
}

h4 {
    margin:0px 1px;
   
    font-size: 18px;
}

.col-1 {font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 
 
    font-size:16px;
   

    margin-top: 2px;

}


h5 {width:235px;
    font-size: 14px;
    font-weight: bold;
    margin: 15px 0px;
display:inline-block;
}

table {
    width: 65%;
   
    box-shadow:0px 5px 15px rgba(0,0,0,0.7);
    background-color:#fff;
   
    
}

.exp-date,.edu-date{
  
     float:right;
  margin-right:5px;
    font-size:14px;
}
.btn{
    margin-top:35px;
    margin-left:255px;
} 

.col-2 { font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
width:29%;
   min-height:fit-content;
border:2px solid black;
 position: absolute;
 background-color:  rgba(26,26,0,0.4);
 
 
}
.projects,
.skills,
.certificates,
.hobbies,
.language {
position:relative;
   
}
.col-1 h4{
   
 font-size:20px;
 font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 font-weight:bold;
 
}
.col-1 li,h5{
    padding:0px 15px;
}
.declaration{
    padding:5px;
}
 h6{
    font-size:16px; 
    display:inline-block;
    font-weight:bold;
   
}
.curr_date,.place{
    margin-left:5px;
}
li{
    list-style-type:disc;
}
.point{display: inline-block;
 
    font-size:25px;
    font-weight: bold;
padding-top:-20px;
padding-right:5px;
padding-left:4px;
}

</style>
</head>

<body>

    <div id="content" display="none">
    <table class="content"  id="table">
        <thead>
            <tr>
                <td colspan=2 >
                    <div class="cv-header name-photo" id="cv-header">

                        <div class="name-desg"><span> <?php echo $record['user_name'] ?></span><span class="desg"><?php echo $record['user_desg'] ?></span></div>
                        <div class="personel-info">

                            <i class="bi bi-person-fill"></i><span class="gender info"><?php echo $record['user_gender'] ?></span><br>
                            <i class="bi bi-calendar-fill"></i><span class="dob info"><?php echo date('d-M-Y', strtotime($record['user_dob']))   ?></span><br>
                            <i class="bi bi-telephone-fill"></i><span class="phno info"><?php echo $record['user_phno'] ?></span><br>
                            <i class="bi bi-envelope-fill"></i><span class="email info"><?php echo $record['user_email'] ?></span><br>
                            <i class="bi bi-geo-alt-fill"></i><span class="address info"><?php echo $record['user_address'] ?></span>
                        </div>
                        <img src="user_profile/<?php echo $record['user_profile'] ?>" width="180" height="200">
                        
                       
                        
                    </div>
                </td>
              
            </tr>

        </thead>
        <tbody>

            <tr >
                <td class="col-1" valign="top">

                    <div class="column-1">
                        <h2> Objective</h2>


                        <div class="objective">
                            <p class="objective-info">
                             <?php echo $record['objective'];?>

                            </p>



                        </div>

                        <h2>Work Experience</h2>

                        <?php $num = 0;
                        if($record['user_status']=="fresher"){
                               echo "<li><h6>Fresher</h6></li>";
                        }else{
                        while ($exp_rec = $sql_exp->fetch_assoc()) {
                            $brr = explode("/", $exp_rec['remark']);

                        ?>
                            <div class="experienece">
                                <div class="exp-<?php echo ++$num ?> sub-container">
                                    <h4><?php echo  $exp_rec['company'] ?></h4>
                                    <h5 class="exp"><?php echo $exp_rec['designation'] ?></h5>
                                    <h6 class="exp-date"><?php echo date('d M Y', strtotime($exp_rec['exp_yos'])) . "   -   " . date('d M Y', strtotime($exp_rec['exp_yoe'])) ?></h6>
                                   <ol>
                                   <?php
                                
                                    for ($j = 0; $j < count($brr); $j++) {?>
                                        <div class="point">.</div> <?php echo $brr[$j] ?><br> 
                                 <?php   }
                                    ?>
                                </ol>    
                                </p>
                                    <hr> 
                                <?php          }
                            $num = 0;
                        $brr = "";
                                 } ?>


                                </div>
                             
                                <div class="education">

                                    <div class="line"></div>
                                    <?php $num = 0;
                                   if($education_rec = $sql_edu->fetch_assoc()){ ?>
                             <h2>Academic Qualification</h2>

                             <?php       while ($education_rec) {
                                        $arr = explode("/", $education_rec['remark']);
                                    ?>
                                        
                                            <h4><?php echo $education_rec['college_name'] ?></h4>
                                            <h5><?php echo  $education_rec['qualification_name'] ?></h5>
                                            <h6 class="edu-date"><?php echo date('d M Y', strtotime($education_rec['start_date'])) . "   -   " . date('d M Y', strtotime($education_rec['end_date'])) ?></h6>
                                        <?php
                                       
                                        for ($i = 1; $i < count($arr); $i++) {
                                          ?> <div class="point">.</div><?php echo $arr[$i]  ?><br>
                                    <?php    }?>
                                    <hr>
                                <?php  $education_rec = $sql_edu->fetch_assoc();}  }
                                    $num = 0;


                                    $arr = "";
                                        ?>
                                        </div>

                               
                      <?php
      // **************************************** Fetching Records of Professional Qualification ************************************************************** //                
                      if($education_rec = $sql_pro->fetch_assoc()){ ?>
 <h2>Professional  Qualification</h2>
                    <?php    while ($education_rec) {
                            $arr = explode("/", $education_rec['remark']);
                        ?>
                            <div class="edu-<?php echo ++$num ?>  sub-container">
                                <h4><?php echo $education_rec['college_name'] ?></h4>
                                <h5><?php echo  $education_rec['qualification_name'] ?></h5>
                                <h6 class="edu-date"><?php echo date('d M Y', strtotime($education_rec['start_date'])) . "   -   " . date('d M Y', strtotime($education_rec['end_date'])) ?></h6>
                            <?php
                            for ($i = 1; $i < count($arr); $i++) {
                              ?> <div class="point">.</div><?php echo   $arr[$i];  ?><br> 
                        <?php    }?>
                        <hr>
                    <?php           $education_rec = $sql_edu->fetch_assoc();  }
                        $num = 0;


                        $arr = "";
                            ?>
                            </div>

                    </div>
           
                     <?php }
                      ?>










  <h2>Declaration</h2>
                                <div class="declaration"><?php echo $record['declaration'] ?></div>
                <div class="curr_date"><h6>Date:</h6> <?php echo date('d-M-Y', strtotime($record['curr_date'])) ?></div>

                <div class="place"><h6>Place:</h6> <?php echo $record['place'] ?></div>

                            </div>
                </td>
                <!-- Second Container-->
                <td class="col-2" valign=top>
                    <div class="column-2">
                  
                        <div class="projects">






                            <?php
                            $skill_rec = $sql_projects->fetch_assoc();
                             if($skill_rec['projects']!=''){ ?>
                                 <h2>Projects</h2>        
                       <?php      }                          
                              while($skill_rec) {
                                if ($skill_rec['projects'] != "") {
                            ?>
                                   <div class="point">.</div><?php echo $skill_rec['projects'] ?>
                            <?php
                                 }   
                                 $skill_rec = $sql_projects->fetch_assoc(); 
                            }
                              
                            $num = 0; ?>

                        </div>
                        
                        <div class="skills">

                                  
                               
                            <?php 
                            $skill_rec = $sql_skill->fetch_assoc();
                            if($skill_rec['skills']!=''){?>
                                <h2>Skills</h2>
                        <?php    }
                               
                              while ($skill_rec) {
                            if($skill_rec['skills']!=''){
                            ?>
                                    <div class="point">.</div>
                                        <?php echo $skill_rec['skills'] ?>
                                    
                            <?php
                            }
                         $skill_rec = $sql_skill->fetch_assoc();       }
                              
                            
                            $num = 0; ?>

                        </div>
                      
                        <div class="hobbies">
                        <?php      $skill_rec = $sql_hobbie->fetch_assoc();
 if ($skill_rec['hobbies'] != "") { ?>
  <h2>Hobbies</h2>
                      <?php  }     while ($skill_rec) {
                                if ($skill_rec['hobbies'] != "") {
                            ?>
                                    <div class="point">.</div><?php echo $skill_rec['hobbies'] ?>
                            <?php
                           }    $skill_rec = $sql_hobbie->fetch_assoc(); 
                           
                        }
                            $num = 0; ?>

                        </div>
                        <div class="certificates">
                        
                        <?php 
                       
                       $sql_record = $sql_certificate->fetch_assoc();
                       if($sql_record['certificate']!='') {       ?>
                         
                           <h2>Certificates</h2>
                          
                       <?php  }while($sql_record)   {
                          if($sql_record['certificate']!=''){
                       ?>
                               <div class="point">.</div><?php echo  $sql_record['certificate'] ?>
                       <?php }
                                   $sql_record = $sql_certificate->fetch_assoc();
                       }
                       $num = 0;
                   
                       
                         
                          ?>
                    
                   </div>
                      
                            <div class="language">
                            
                                <?php ;
                                  $skill_rec = $sql_language->fetch_assoc();
                                  if(isset($skill_rec['language'])){
                              
                                    ?>
                                
                                <h2>Languages</h2>
                                <?php while($skill_rec)  {
                                   if($skill_rec['language']!=''){ ?>
                                    
                                     
                                 
                                     <div class="point">.</div><?php echo $skill_rec['language'] ?>
                                   
                            <?php         }  $skill_rec = $sql_language->fetch_assoc();  
                                }
                                $num = 0;
                           
                                }
                                
                                ?>
                            </div>

                    </div>
                </td>
            
            </tr>

        </tbody>



    </table>


   
                        </div>
                        <div class="btn">
        <button class="download" id="btn" onclick="downloadPdf()">Download CV</button>
    </div>   
</body>
<script>
    function downloadPdf() {
        $("body").on("click", "#btn", function () {
            html2canvas($('#content'), {
                onrendered: function (canvas) {
                    var imgData = canvas.toDataURL('image/png');      
                  
                  
                    var docDefinition = {
                        content: [{
                            image: imgData,
                            margin:[-160,0,10],
                            width: 750,
                            height:750,
                            format:'a4',
                        }]
                    };
                  //  doc.save("myCv.pdf");
                    pdfMake.createPdf(docDefinition).download("myCv.pdf");
                }
            });
        });





  /* let elem=  document.getElementById('content');
   elem.tableHTMLExport(
            {type:"pdf",filename:"myCv.pdf"}
        )  ;



 var options = {
  margin:1,
  filename:'myCv.pdf',
  image:{type:"jpeg",quality:"0.98",},
  html2canvas:{scale:2},
  jsPDF:{unit:'in',format:'A4',orientation:'protrait'}
}; */


   

    }
   
</script>
</body>
</html>