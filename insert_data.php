<?php
session_start();
include "Connect.php";
$j=0;$m=0;$p=0;$q=0;$n=0;$x=0;
$count=0;
$exp_count=0;
$skill_count=0;
$name = $_POST['full-name'];
$address = $_POST['address'];
$phone = $_POST['phno'];
$profile = $_FILES['profile'];
$email = $_POST['e-mail'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$objective = $_POST['objective'];
$aadhar = $_POST['aadhar'];
$gender = $_POST['gender'];
$curr_date = $_POST['curr-date'];
$declaration = $_POST['declaration'];
$place = $_POST['place'];
$profile_name = $_FILES['profile']['name'];
$profile_tmp_name = $_FILES['profile']['tmp_name'];
$desg = $_POST['designation'];
$fresher= $_POST['fresher'];

//****************************************************************** Checking  Unique Records    ********************************************/
$ext = pathinfo($profile_name,PATHINFO_EXTENSION);
$folder = "./user_profile/" . $profile_name;
move_uploaded_file($profile_tmp_name, $folder);
$fetch = "SELECT * FROM `personel_detail_tb` WHERE  `user_email`='$email' ";
$sql2 = $conn->query($fetch);
if($record = $sql2->fetch_assoc())
{
    echo "same email";
    return false;
}
// ******************************************************** Fetching All Data of Qualification **************************************************************************

if (empty(!$name) && empty(!$age) && empty(!$phone) && empty(!$email) && empty(!$dob) && empty(!$age)) {
    for ($i = 1; $i <= 10; $i++) {
        if ((isset($_POST['qualification-' . $i]) && isset($_POST['yoe-' . $i]) && isset($_POST['yos-' . $i]) && isset($_POST['institute-' . $i])) || isset($_POST['education-remark-' . $i]) || isset($_POST['pro-edu-' . $i])) {
            if ($_POST['qualification-' . $i] != "" && $_POST['yos-'.$i] != "" && $_POST['yoe-' . $i] != "" && $_POST['institute-' . $i] != "") {
                $qualification[$i] = $_POST['qualification-' . $i];
                $start_date[$i] = $_POST['yos-' . $i];
                $end_date[$i] = $_POST['yoe-' . $i];
                $remark[$i] = $_POST['education-remark-' . $i];
                $college[$i] = $_POST['institute-' . $i];
                $professional[$i] = $_POST['pro-edu-' . $i];
                ++$count;

            } else {
                break;
            }
            
        }
    }
    
// ******************************************************************************************************************************************************************************************************************************

  // ************************************************************* Fetching All Data of Work Experience ***************************************************************************************************************************************************  
    for ($j = 1; $j <= 10; $j++) {
        if ((isset($_POST['experience-' . $j]) && isset($_POST['exp-yoe' . $j]) && isset($_POST['exp-yos' . $j]) && isset($_POST['company-' . $j])) || isset($_POST['remark-' . $j])) {
            if ($_POST['experience-' . $j] != "" && $_POST['exp-yoe' . $j] != "" && $_POST['exp-yos' . $j] != "" && $_POST['company-' . $j] != "") {
                $experience[$j] = $_POST['experience-' . $j];
                $exp_yos[$j] = $_POST['exp-yos' . $j];
                $exp_yoe[$j] = $_POST['exp-yoe' . $j];
                $company[$j] = $_POST['company-' . $j];
                $remark[$j] = $_POST['remark-' . $j];
                ++$exp_count;

            } 
            
        }else {
            break;
        }
    }

    // ********************************************************Getting All Data of  Hobbie ,Skills,and certification*****************************************************
    for($k=1;$k<=5;$k++){
        if (isset($_POST['hobbie-' . $k]) || isset($_POST['certificate-' . $k]) || isset($_POST['language-' . $k]) ||   isset($_POST['skill-' . $k] ) ||  isset($_POST['project-' . $k] )) {
            if ($_POST['hobbie-'. $k ] != "" ){
                $hobbie[$x++] = $_POST['hobbie-' . $k];
              
            }
        
            if ($_POST['skill-'. $k ] != "" ){
            
                $skill[$p++] = $_POST['skill-' . $k];
            }
            if ($_POST['certificate-'. $k ] != "" ){
                $certificate[$m++] = $_POST['certificate-' . $k];
            }
            if ($_POST['language-'. $k ] != "" ){
                $language[$n++] = $_POST['language-' . $k];
            }
            if ($_POST['project-'. $k ] != "" ){
                $projects[$q++] = $_POST['project-' . $k];
            }
               
            }
            else {
                break;
            }
     
        }

// ************************************************************* Perosnel detailsrmation Query ************************************************************************  
    $query = " INSERT INTO  `personel_detail_tb`(`u_id`,`user_name`,`user_status`,`user_desg`,`user_address`,`user_email`,`aadhar`,`user_dob`,`user_age`,`user_gender`,`user_phno`,`user_profile`,`curr_date`,`place`,`declaration`,`objective`) VALUES
    ('','$name','$fresher','$desg','$address','$email','$aadhar','$dob','$age','$gender','$phone','$profile_name','$curr_date','$place','$declaration','$objective') ";
    $sql = $conn->query($query);
    $fetch = "SELECT * FROM `personel_detail_tb` WHERE `user_name`='$name' AND `user_email`='$email' AND `user_dob`='$dob'";
    $sql2 = $conn->query($fetch);
    $record = $sql2->fetch_assoc();
    $u_id = $record['u_id'];
    $_SESSION['cv_user'] =$u_id;
    // ************************************************************** Education Query *********************************************************************************
    for ($i = 1; $i <= $count; $i++) {
        $qualification[$i] = $_POST['qualification-' . $i];
        $start_date[$i] = $_POST['yos-' . $i];
        $end_date[$i] = $_POST['yoe-' . $i];
        $remark[$i] = $_POST['education-remark-' . $i];
        $college[$i] = $_POST['institute-' . $i];
        $professional[$i] = $_POST['pro-edu-' . $i];
        $education_query = "INSERT INTO  `education_tb`(`qualification_id`,`u_id`,`type`,`qualification_name`,`start_date`,`end_date`,`college_name`,`remark`) VALUES
        ('','$u_id','$professional[$i]',' $qualification[$i]','$start_date[$i]',' $end_date[$i]','$college[$i]','$remark[$i]') ";
        $sql3 = $conn->query($education_query);

    }
// *********************************************************************************************************************************************************


//******************************************************************** Work Experience Query ************************************ */
    for ($j = 1; $j <= $exp_count; $j++) {
        $experience[$j] = $_POST['experience-' . $j];
        $exp_yos[$j] = $_POST['exp-yos' . $j];
        $exp_yoe[$j] = $_POST['exp-yoe' . $j];
        $company[$j] = $_POST['company-' . $j];
        $exp_remark[$j] = $_POST['remark-' . $j];
        $experience_query = "INSERT INTO `experience_tb` (`exp_id`, `u_id`, `designation`, `exp_yos`, `exp_yoe`, `company`, `remark`) VALUES
        ('', '$u_id', '$experience[$j]', '$exp_yos[$j]', '$exp_yoe[$j]', '$company[$j]', '$exp_remark[$j]')";
        $sql4 = $conn->query($experience_query);


    }
// **************************************************************************************************************************************************

//************************************************************************************************ Query for Hobbies,Skiils,Certificate,Language********* */
    for ($k = 0; $k<5;$k++){
 
        $skill_query="INSERT INTO `skill_tb` (`skill_id`, `u_id`, `hobbies`, `skills`, `certificate`, `projects`,`language`) VALUES
         ('', '$u_id', '$hobbie[$k]', '$skill[$k]', '$certificate[$k]','$projects[$k]', '$language[$k]')";
        $sql5 = $conn->query($skill_query);

    }
    











}
















































 /*   $education_query = " INSERT INTO  `educate`(`qualification_id`,`u_id`,`qualification_name`,`start_date`,`end_date`,`college_name`,`remark`) VALUES
    ('','$u_id',' $qualification[$i]','$start_date[$i]',' $end_date[$i]','$college[$i]','$remark[$i]') ";
    $sql3 = $conn->query($education_query);
    */
?>