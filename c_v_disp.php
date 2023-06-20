<?php
include "Connect.php";
$num = 1;
$fetch = "SELECT * FROM `personel_info` WHERE `aadhar`='2365598985478'";
$sql = $conn->query($fetch);
$record = $sql->fetch_assoc();
$id = $record['u_id'];
$edu = "SELECT * FROM `education` as `e`  WHERE  `e`.`u_id`='$id'";
$sql_edu = $conn->query($edu);
$exp = "SELECT * FROM `experience` as `exp`  WHERE  `exp`.`u_id`='$id'";
$sql_exp = $conn->query($exp);
$skill = "SELECT * FROM `skill_tb` as `sk`  WHERE  `sk`.`u_id`='$id'";
$sql_skill = $conn->query($skill);
$sql_hobbie = $conn->query($skill);
$sql_certificate = $conn->query($skill);
$sql_language = $conn->query($skill);

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>C.V</title>
</head>
<style>
      background-color: grey;
            position: relative;
            width: 70%;
            padding-right: 20px;
            border: 2px solid black;
    * {
        height: 55%;
            width: 35%;
            position: relative;
            background-color: aqua;
            border: 2px solid black;

        margin: 0px;
    }

    .container {position:absolute;;
        margin-top: 10px;
        min-width: 75%;;
        min-height: fit-content;
        margin-left:145px;
        border-radius:95px;
   
    }

    .sub-container1 { 
        background-color:rgba(25,32,22,0.3);
         position:relative;
       width: 13%;
        min-height: min-content;
        border-left:2px solid black;
        border-top:2px  solid black;
        border-bottom:2px  solid black;
      
      
    }

    .sub-container2 { border-top:2px  solid black;

        margin-top:10px;
        width: 45%;
        min-height:min-content;
        border-right:2px solid black;
        border-bottom:2px  solid black;
    }

    .sub-container1 div{
     
        margin-top: 0px;
        min-width: 55%;
        min-height:min-content;
      
    }
    .sub-container1 table{
    margin-top:-556px;
    padding-left:25px;
    }

    .sub-container1 span{
   
        font-weight:450;
        font-size:16px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .sub-container2 table{

        margin-top:45px;
        padding-top:25px;
        margin-left:0px;
    }
    .personel-info{
     padding-top:10px;
       padding-left:15px;
    }
    h2{text-align:center;
        font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:23px;
        font-weight:bolder;;
    }
    .sub-container1 li{
       font-weight:450;
        font-size:16px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
i{ font-size:20px;
    margin-right:6px;
}
.name-photo{position:relative;
    margin-top:-105px;
    
    height:100px;
    width:auto;
 box-shadow:25px 5px 6px 20px ;
    
    background-color:gray;
    
}
img{margin-top:-15px;

float:right;
margin-right:35px;
border:7px solid white;
border-radius:100px;

}
.name-photo h4{margin-left:55px;
    font-size:22px;
    color:white;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display:inline-block;
}
.name{width:auto;;
    height:132px;
}
.pad{
    padding-left:5px;
}
h3{
    font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size:23px;
        font-weight:bolder;

}
h4{
    font-family:'Times New Roman', Times, serif;
    font-weight:bold;
    font-size:18px;
}
.sub-container2 li{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:14px;
    font-weight:400;
}
.sub-container2 h4{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:18px;
    font-weight:bolder;
}
.exp{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:18px;
    font-weight: bolder;
}
.date-place{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size:16px;
    font-weight: bolder;
}
</style>

<body>
    <div class="container">

        <table>
            <tbody>
                <tr>
                    <!-- First Column ----->
                    <td class="sub-container1">
                        <table>
                            <thead>
                                <tr>
                               <th class="name-photo  name"> <?php echo $record['user_name'] ?><br>

<?php echo $record['user_desg'] ?></th>
                                </tr>
                            </thead>
                          <tbody>
                        
                                <tr>
                                    <td class="personel-info pad">
                                    <div  >
                                         <i class="bi bi-person-fill"></i><span class="gender info"><?php echo $record['user_gender'] ?></span><br>
                                            <i class="bi bi-calendar-fill"></i><span class="dob info"><?php echo $record['user_dob'] ?></span><br>
                                            <i class="bi bi-telephone-fill"></i><span class="phno info"><?php echo $record['user_phno'] ?></span><br>
                                            <i class="bi bi-envelope-fill"></i><span class="email info"><?php echo $record['user_email'] ?></span><br>
                                            <i class="bi bi-geo-alt-fill"></i><span class="address info"><?php echo $record['user_address'] ?></span>

                                        </div>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td class="pad">
                                        <div class="skills">

                                            <h2>Skills</h2>
                                         
                                            <?php while ($skill_rec = $sql_skill->fetch_assoc()) {
                                                if ($skill_rec['skills'] != "") {
                                            ?> 
                                              <li>
                                              <?php echo $skill_rec['skills'] ?>
                                              </li>   
                                            <?php
                                                }
                                            }
                                            $num = 0; ?>
                                          
                                        </div>
                                        <div class="hobbies">
                                            <h2>Hobbies</h2>
                                         
                                            <?php while ($skill_rec = $sql_hobbie->fetch_assoc()) {
                                                if ($skill_rec['hobbies'] != "") {
                                            ?>
                                                <li class="hobbie" id="hobbies-<?php ++$num ?>"><?php echo $skill_rec['hobbies'] ?></li> 
                                            <?php
                                                }
                                            }
                                            $num = 0; ?>
                                            
                                        </div>
                                        <div class="certificates">
                                            <h2>Certificates</h2>
                                       
                                            <?php while ($skill_rec = $sql_certificate->fetch_assoc()) {
                                                if ($skill_rec['certificate'] != "") {
                                            ?>
                                                  <li class="certificate" id="certificate-<?php ++$num ?>"><?php echo $skill_rec['certificate'] ?></li> 
                                            <?php
                                                }
                                            }
                                            $num = 0; ?>
                                        
                                        </div>
                                        <div class="language">
                                            <h2>Languages Known</h2>
                                            <?php while ($skill_rec = $sql_language->fetch_assoc()) {
                                                if ($skill_rec['language'] != "") {
                                            ?>
                                                    <li class="languages" id="languages-<?php ++$num ?>"><?php echo $skill_rec['language'] ?></li> 
                                            <?php
                                                }
                                            }
                                            $num = 0;
                                            ?>
                                        </div>

                                    </td>

                                </tr>


                            </tbody>
                         </table>
                    </td>
                 
                       
                         
                    <!--- 2nd Column -->
                    <td class="sub-container2">
                        <table>
                            <thead >
                                <tr>
                                    <th class="name-photo">   <img src="user_profile/<?php echo $record['user_profile'] ?>" width="170" height="145"></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <td class="pad">
                                    <h3> Objectives</h3>  
                                    <p class="objective-info">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique aperiam, quasi suscipit ducimus aut dicta aspernatur
                                            quod modi dolores sapiente porro ea dolorum, consequatur architecto.
                                            Impedit ipsum eaque neque, ratione atque tenetur sit amet, nesciunt,
                                            suscipit exercitationem quis. Perspiciatis, cum error! Tempora repellendus
                                            asperiores a nemo praesentium. Saepe, sint esse!
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique aperiam, quasi suscipit ducimus aut dicta aspernatur
                                            quod modi dolores sapiente porro ea dolorum, consequatur architecto.
                                            Impedit ipsum eaque neque, ratione atque tenetur sit amet, nesciunt,
                                            suscipit exercitationem quis. Perspiciatis, cum error! Tempora repellendus
                                            asperiores a nemo praesentium. Saepe, sint esse!
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Similique aperiam, quasi suscipit ducimus aut dicta aspernatur
                                            quod modi dolores sapiente porro ea dolorum, consequatur architecto.
                                            Impedit ipsum eaque neque, ratione atque tenetur sit amet, nesciunt,
                                            suscipit exercitationem quis. Perspiciatis, cum error! Tempora repellendus
                                            asperiores a nemo praesentium. Saepe, sint
                                        </p>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="pad">
    </div>
    <div class="education">
        <h3>Education</h3>
        <div class="line"></div>
        <?php $num = 0; while ($education_rec = $sql_edu->fetch_assoc()) {
            $arr = explode(".", $education_rec['remark']);
        ?>
            <div class="edu-<?php echo ++$num ?>">
                <h4><?php echo $num ." ".$education_rec['college_name'] ?></h4>
                <p><?php echo date('d M Y', strtotime($education_rec['start_date'])) . "   -   " . date('d M Y', strtotime($education_rec['end_date'])) ?></p>
               <?php
       
                    for ($i = 0; $i < count($arr); $i++) {
                        echo "<li>". $arr[$i] ."</li>". "<br>";
                    }
               $arr = "";
                    ?>
            </div>
        <?php }
        $num = 0; ?>
    </div>
    </td>
    </tr>
    <tr>
        <td class="pad">
            <div class="experience">
                <h3>Work Experience</h3>
                <div class="line"></div>
                <?php $num = 0; while ($exp_rec = $sql_exp->fetch_assoc()) {
                    $brr = explode(".", $exp_rec['remark']);

                ?>
                    <div class="exp-<?php echo ++$num ?>">
                        <h4><?php echo $num."  ".$exp_rec['company'] ?></h4>
                        <p class="exp"><?php echo $exp_rec['designation'] ?></p>
                        <p><?php echo date('d M Y', strtotime($exp_rec['exp_yos'])) . "   -   " . date('d M Y', strtotime($exp_rec['exp_yoe'])) ?></p>
                        <?php
                            for ($j = 0; $j < count($brr); $j++) {
                                echo "<li>" .$brr[$j] ."</li>". "<br>";
                            }
                            ?></p>

                    <?php          }
                $num = 0; ?>


                    </div>
        </td>
    </tr>
           <tr>
        <td class="pad">
                      <div class="declaration"><?php echo $record['declaration'] ?></div><br>
                  <div class="curr_date date-place">Date:<?php echo $record['curr_date'] ?></div>

                    <div class="place date-place">Place:<?php echo $record['place'] ?></div>
        </td>
            </tr>
      </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <button id="btn" onclick="return downloadPdf()">Download PDF</button>
    </div>




<script>
    function downloadPdf() {
        let content = document.getElementById("container");
      
        html2pdf().from(content).save();
    }
</script>
</body>

</html>









































