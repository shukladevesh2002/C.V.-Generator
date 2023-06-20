  <!-- Kaun So Kaj Kathin Jag Mahi |
  Jo Nahi Hoot Taat Tum Pahi ||   -->                                                            
  <?php
                                                           $date = new DateTime('Asia/Kolkata');
                                                           $curr_date = date('Y-m-d', time());
                                                           ?>                                                           
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>C.V Generator</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
   
    
   

    .profile-alert {


      float: right;
      margin-right: 70px;
      color: red;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 14px;

    }



   
    /*  for Dsktop Viwes*/
    @media screen and (min-width: 1224px) {
     
      .cv-box {  
        background-color: rgba(19,19,19,0.1);
        padding:1em;
      display: flex;
      width:fit-content;
      height:fit-content;
      flex-direction: column;
     
      box-shadow:0px 10px 15px rgba(0,35,69,0.3);
      border-radius:35px;
     border:3px solid black;
     margin-left:100px;
     margin-top:10px;
     margin-right:70px;
    
   
    }
    .education {
      margin-left:0px;
    }
    .remark {
font-size:14px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.remark h2{
  margin-left:95px;
}
hr{
  border:1px solid black;
}
.form-control {
  width: 215px;
 height: 45px;
 border:2px solid #123;
                                                               }                                                            
  
  .form-control:focus{
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  h1{
  text-align:center;
  font-family:'Times New Roman', Times, serif;
}
.checkbox,.academic,.checkbox-educ{
  display:inline-block;
}
.checkbox-educ{

  margin-top:26px;
}
.professional,.fresher{
  margin-top:15px;
  margin-right:25px;
}
.academic{
padding-right:45px;
}
.checkbox-educ{
  padding-left:-25px;
}

body {
                                                                 background-color: whitesmoke;
      }

                                                               .form-label {
                                                                 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                                                                 font-size: 18px;
                                                                 margin-left: 48px;
                                                               }
                                                               
                                                               .age-label{
                                                                margin-left:70px;
                                                               }
                                                               .remark {
                                                                 margin-top: 25px;
                                                                 display: inline-block;
                                                                 margin-left: 355px;
                                                               }

                                                             

                                                               .start-year,
                                                               .end-year,
                                                               .yoe,
                                                               .yos {
                                                                 margin-left:10px;
                                                                 
                                                               }
                                                               .yoe{
                                                                margin-right:10px;
                                                               }

                                                               .personel-info div {
                                                                 display: inline-block;
                                                                 margin-left:20px;
                                                               }

                                                               .hobbies,
                                                               .skills,
                                                               .languages,
                                                               .certification,
                                                               .projects {
                                                                 display: inline-block;
                                                               }

                                                               #languages-5 {
                                                                 display: inline-block;
                                                               }

                                                               .plus {
                                                                 display: inline-block;

                                                               }

                                                               i {
                                                                 font-size: 20px;
                                                                 cursor: pointer;
                                                               }
                                                               .institute-label,.company-label{
                                                                margin-left:15px;
                                                               }
                                                            

                                                               

                                                               .user-profile {
                                                                 margin-top: 25px;
                                                                 min-width: fit-content;
                                                               }

                                                               .profile-alert {
                                                                 display: none;
                                                                 margin-top: -10px;
                                                                 float: right;
                                                                 margin-right: 70px;
                                                                 color: red;
                                                                 font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                                                                 font-size: 14px;

                                                               }

                                                               h3 {
                                                                 font-size: 20px;
                                                                 font-weight: 90;
                                                                 font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                                                                 font-weight: bold;
                                                               }

                                                               .declare {
                                                                 position: relative;
                                                                 display: inline-block;
                                                               }

                                                               .objectives {
                                                                 margin-left: 25px;
                                                                 position: absolute;
                                                                 display: inline-block;
                                                               }
                                                               .education{
                                                                margin-left:35px;
                                                               }

                                                               .validation-remark {
                                                                 font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                                                                 font-size: 12px;
                                                               }

                                                               .generate {
                                                                 border: 3px solid black;
                                                                 ;
                                                                 margin-left: 525px;
                                                                 height: 45px;
                                                                 width: 165px;
                                                                 margin-bottom: 15px;
                                                                 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                                                 font-size: 16px;
                                                               }
         
.certificate-box .form-control{
    margin-left:20px;
  } 
  .hobbie-box  .form-control{
    margin-left:20px;
  }
  .skill-box .form-control{
    margin-left:20px;
  }
  .languages-box .form-control{
    margin-left:20px;
  }

  .project-box .form-control{
    margin-left:20px;
  }    
  .qualification,.experience{
    padding-left:50px;
  }   
  .work-experience .remark{
    margin-left:395px;
  }    
  .work-experience{
    padding-left:55px;
  }
                                
    }
/* For Mobile Portrait View */
@media screen and (max-device-width: 480px)
and (orientation: portrait) {
  .cv-box {
    padding:1em;
      display: flex;
      flex-wrap:wrap ;
      width:fit-content;
      height:fit-content;
      flex-direction: column;
      border-radius:2px solid black;
      box-shadow:0px 10px 15px rgba(25,35,69,0.8);
      border-radius:35px;
     border:3px solid black;
     margin:8px 60px;
    
   
  }textarea{
border:3px solid black;
  }
  .remark {
font-size:14px;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.remark h2{
  margin-left:135px;
}
.form-control {

width: 125px;
margin: 0px 1em;
}

  
}

    
  </style>
</head>

<body style="background-color:#fff;">

  <div class="cv-box">
    <div class="heading">
    <h1>Genreate Your C.V in Just Filling Information</h1>
    </div>
    <form method="POST" action="" id="cv-form" class="cv-form">


      <div class="personel-info" id="personel-info">
        <h3>Personel Information</h3>
        <div class="form-group name">
        <label for="full-name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Enter Full Name" required>
        </div>
        <div class="form-group designation">
          <label for="designation" class="form-label">Designation</label>
          <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Your Designation" required>
        </div>
        <div class="form-group add">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address"  placeholder="Enter Address" required>
        </div>
        <div class="form-group phone">
          <label for="phno" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="phno" name="phno" maxlength=10 minlength=0  placeholder="Enter Phone Number" required >
        </div>
        <div class="form-group email-id">
          <label for="e-mail" class="form-label">E-mail Id</label>
          <input type="text" class="form-control" id="e-mail" name="e-mail" placeholder="Enter Email Address" required>
        </div>
        <br>
        <div class="form-group aadhar-no">
          <label for="aadhar" class="form-label">Aadhar Number</label>
          <input type="text" class="form-control" id="aadhar" name="aadhar" maxlength=12 minlength=0  placeholder="Enter Aadhar Number" required>
        </div>

        <div class="form-group gen">
          <label for="gender" class="form-label gen">Gender</label>
          <input type="text" class="form-control gender" id="gender" name="gender" placeholder="Enter Gender" required>
        </div>
        <div class="form-group d-o-b">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" required>
        </div>
        <div class="form-group u-age">
          <label for="age" class="form-label age-label">Age</label>
          <input type="text" class="form-control" id="age" name="age" >
        </div>
        <div class="form-group user-profile">
          <label for="profile" class="form-label">Profile Photo</label>
          <input type="file" class="form-control profile" id="profile" name="profile" oninput="return photoCheck();"   required>
        </div>
        <span class="profile-alert" id="profile-alert">Profile Photo must contain only jpeg and jpg extensions</span>

      </div>
<hr>
  <div class="education" id="education">
    <h3>Education Details</h3>
    <table class="education-table">
      <thead>
      </thead>
      <tbody>
        <tr>
   
        <td class="checkbox-educ">
        <div class="form-group">
            <label  for="pro-edu-1" class="form-label  professional">Proffessional</label>
             <input type="checkbox" class="checkbox" id="pro-educ-1" value="professional" name="pro-edu-1"/>
             
            </div>
          </td>
          <td class="qualification">
             <div class="form-group">
             <label for="qualification-1" class="form-label">Qualification</label>
             <select type="text" class="form-control" id="qualification-1" name="qualification-1">
              <option value="">Select</option>
              <option value="high school">High-School</option>
              <option value="10+2">10+2</option>
            </select>
          </div>
          </td>
          <td>
            <div class="start-year form-group">
              <label for="year-start" class="form-label yos">Start Year</label>
              <input type="date" class="year-start  form-control yos" id="yos-1" name="yos-1" max="2999-12-31"> </div>
          </td>
          <td>
            <div class="end-year form-group">
              <label for="year-passing" class="form-label yoe">End Year</label>
              <input type="date" class="year-end  form-control yoe" id="yoe-1" name="yoe-1" max="2999-12-31" onfocusout="checkDate();">
            </div>

          </td>
          <td>
          <div class="form-group">
          <label for="institute-1" class="form-label institute-label">College/ School Name</label>
            <input type="text" class="form-control institute" id="institute-1" name="institute-1"/>
          </div>

          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <tbody>
        <tr>
          <td>

            <div class="remark">
              <h2>Description</h2><textarea id="education-remark-1" name="education-remark-1" rows="4" cols="50"></textarea>
              <i class="plus bi bi-plus-circle-fill" id="plus-1" width="100" height="50"></i>
              <div class="validation-remark">Please Divide You Remarks in points by putting slash(/)</div>
            </div>
          </td>
        </tr>

        <!------------------------------------------------------------------- Adding More Fields in Qualification --------------------------------------->
      </tbody>
    </table>
    <hr>
    <div id="demo2"></div>
    
    <div id="demo3"></div>
    
    <div id="demo4"></div>
    
    <div id="demo5"></div>
    
    <div id="demo6"></div>
    
    <div id="demo7"></div>
   
    <div id="demo8"></div>
    
    <div id="demo9"></div>
    
    <div id="demo10"></div>
    
    <div id="demo11"></div>
    
  </div>
  

    <h3>Work Experience Details</h3>
    <div class="work-experience"> 
    <table class="table-2">
      <tbody>
        <tr>
          <td>
          <div class="form-group fresher">
            <label  for="pro-edu-1" class="form-label fresher">Fresher</label>
             <input type="checkbox" class="checkbox" id="fresher" value="fresher" name="fresher" onclick="Fresh(this)">
             
            </div>
          </td>
          <td class="experience">
            <div class="form-group">
              <label for="experience-1" class="form-label">Experience</label>
              <input type="text" class="form-control experience-1" id="experience-1" name="experience-1">
            </div>
          </td>
          <td>
            <div class="start-year form-group">
              <label for="exp-yos1" class="form-label yos">Start Year</label>
              <input type="date" class="year-start  form-control yos" id="exp-yos1" name="exp-yos1" max="2999-12-31">
            </div>
          </td>
          <td>
            <div class="end-year form-group">
              <label for="exp-yoe1" class="form-label yoe">End Year</label>
              <input type="date" class="year-end  form-control yoe" id="exp-yoe1" name="exp-yoe1" max="2999-12-31" onfocusout="check_Exp_Date()">
            </div>
          </td>
          <td>
           <div class="form-group">
           <label for="company-1" class="form-label company-label">Name of Organization</label>
            <input type="text" class="form-control company" id="company-1" name="company-1">
           </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table>
      <tbody>
        <tr>
          <td>

            <div class="remark">
              <h2>Description</h2><textarea id="remark-1" name="remark-1" rows="4" cols="50"></textarea>
              <div class="plus"><i class="plus bi bi-plus-circle-fill" id="exp-plus1" width="100" height="50"></i></div>
              </i>
              <div class="validation-remark">Please Divide You Remarks in points by putting slash(/)</div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    
    <div id="exp-demo2"></div>
    
    <div id="exp-demo3"></div>
    
    <div id="exp-demo4"></div>
    
    <div id="exp-demo5"></div>
    
    <div id="exp-demo6"></div>
    
    <div id="exp-demo7"></div>
    
     <div id="exp-demo8"></div>
     
    <div id="exp-demo9"></div>
    
    <div id="exp-demo10"></div>
    
     <div id="exp-demo11"></div>
    
      <div id="exp-demo12"></div>
      
    <div id="exp-demo13"></div>
     
    <div id="exp-demo14"></div>
     
  </div>
  <hr>
  <div class="hobbie-box">
    <h3>Hobbies</h3>
    <div class="hobbies">
      <label for="hobbie-1" class="form-label hobbie">1.</label>
      <input type="text" class="hobbie  form-control" id="hobbie-1" name="hobbie-1">
    </div>
    <div class="hobbies">
      <label for="hobbie-2" class="form-label hobbie">2.</label>
      <input type="text" class="hobbie  form-control" id="hobbie-2" name="hobbie-2">
    </div>
    <div class="hobbies">
      <label for="hobbie-3" class="form-label hobbie">3.</label>
      <input type="text" class="hobbie  form-control" id="hobbie-3" name="hobbie-3">
    </div>
    <div class="hobbies">
      <label for="hobbie-4" class="form-label hobbie">4.</label>
      <input type="text" class="hobbie  form-control" id="hobbie-4" name="hobbie-4">
    </div>
    <div class="hobbies">
      <label for="hobbie-5" class="form-label hobbie">5.</label>
      <input type="text" class="hobbie  form-control" id="hobbie-5" name="hobbie-5">
    </div>
  </div>
 <hr> 
  <div class="skill-box">
  <h3>Skills</h3>
                                                                     <div class="skills">
                                                                       <label for="skill-1" class="form-label hobbie">1.</label>
                                                                       <input type="text" class="skill  form-control" id="skill-1" name="skill-1">
                                                                     </div>
                                                                     <div class="skills">
                                                                       <label for="skill-2" class="form-label hobbie">2.</label>
                                                                       <input type="text" class="skill  form-control" id="skill-2" name="skill-2">
                                                                     </div>
                                                                     <div class="skills">
                                                                       <label for="skill-3" class="form-label hobbie">3.</label>
                                                                       <input type="text" class="skill  form-control" id="skill-3" name="skill-3">
                                                                     </div>
                                                                     <div class="skills">
                                                                       <label for="skill-3" class="form-label hobbie">4.</label>
                                                                       <input type="text" class="skill  form-control" id="skill-4" name="skill-4">
                                                                     </div>
                                                                     <div class="skills">
                                                                       <label for="skill-4" class="form-label hobbie">5.</label>
                                                                       <input type="text" class="skill  form-control" id="skill-5" name="skill-5">
                                                                     </div>

  </div>
  <hr>
  <div class="certificate-box">
  <h3>Certificates</h3>
                                                                     <div class="certification">
                                                                       <label for="certificate-1" class="form-label certificate">1.</label>
                                                                       <input type="text" class="certificate form-control" id="certificate-1" name="certificate-1">
                                                                     </div>
                                                                     <div class="certification">
                                                                       <label for="certificate-2" class="form-label certificate">2.</label>
                                                                       <input type="text" class="certificate  form-control" id="certificate-2" name="certificate-2">
                                                                     </div>
                                                                     <div class="certification">
                                                                       <label for="certificate-3" class="form-label certificate">3.</label>
                                                                       <input type="text" class="certificate  form-control" id="certificate-3" name="certificate-3">
                                                                     </div>
                                                                     <div class="certification">
                                                                       <label for="certificate-4" class="form-label certificate">4.</label>
                                                                       <input type="text" class="certificate  form-control" id="certificate-4" name="certificate-4">
                                                                     </div>
                                                                     <div class="certification">
                                                                       <label for="certificate-5" class="form-label certificate">5.</label>
                                                                       <input type="text" class="certificate  form-control" id="certificate-5" name="certificate-5">
                                                                     </div>
  
  </div>
  <hr>
  <div class="project-box">
  <h3>Projects</h3>
                                                                     <div class="projects">
                                                                       <label for="project-1" class="form-label hobbie">1.</label>
                                                                       <input type="text" class="project form-control" id="project-1" name="project-1">
                                                                     </div>
                                                                     <div class="projects">
                                                                       <label for="project-2" class="form-label hobbie">2.</label>
                                                                       <input type="text" class="project form-control" id="project-2" name="project-2">
                                                                     </div>
                                                                     <div class="projects">
                                                                       <label for="project-3" class="form-label hobbie">3.</label>
                                                                       <input type="text" class="project form-control" id="project-3" name="project-3">
                                                                     </div>
                                                                     <div class="projects">
                                                                       <label for="project-3" class="form-label hobbie">4.</label>
                                                                       <input type="text" class="project form-control" id="project-4" name="project-4">
                                                                     </div>
                                                                     <div class="projects">
                                                                         <div class="projects">
                                                                   <label for="project-4" class="form-label hobbie">5.</label>
                                                                       <input type="text" class="project form-control" id="project-5" name="project-5">
                                                                     </div>

  </div>
  <hr>
  <div class="languages-box">

  <h3>Languages</h3>
                                                                     <div class="languages">
                                                                       <label for="language-1" class="form-label language">1.</label>
                                                                       <input type="text" class="language form-control" id="language-1" name="language-1">
                                                                     </div>
                                                                     <div class="languages">
                                                                       <label for="language-2" class="form-label language">2.</label>
                                                                       <input type="text" class="language  form-control" id="language-2" name="language-2">
                                                                     </div>
                                                                     <div class="languages">
                                                                       <label for="language-3" class="form-label language">3.</label>
                                                                       <input type="text" class="language  form-control" id="language-3" name="language-3">
                                                                     </div>
                                                                     <div class="languages">
                                                                       <label for="language-4" class="form-label language">4.</label>
                                                                       <input type="text" class="language form-control" id="language-4" name="language-4">
                                                                     </div>
                                                                     <div class="languages" id="languages-5">
                                                                       <label for="language-5" class="form-label language">5.</label>
                                                                       <input type="text" class="language  form-control" id="language-5" name="language-5">
                                                                     </div>
  </div>
 <hr> 
  <div class="declare">
                                                                       <h3>Declartion</h3>
                                                                       <textarea class="declaration" id="declaration" name="declaration" rows="3" cols="55"></textarea>

                                                                     </div>
                                                                     <div class="objectives">
                                                                       <h3> Objectives</h3>

                                                                       <textarea id="objective" name="objective" rows="3" cols="60">
Looking to work in a fast-paced and challenging executive assistant role that allows for the application of strong organizational, support, coordination, scheduling and communication skills.
</textarea>

                                                                     </div>   
                                                                  <hr>                                   
                                                                     <div class="curr-date">
                                                                       <label for="curr-date" class="form-label curr-date">Date:</label>
                                                                       <input type="date" class="curr-date  form-control" id="curr-date" name="curr-date" value=<?php echo $curr_date ?> max="2999-12-31">
            
                                                                      </div>                                                                  

                                                                      <div class="place">
                                                                       <label for="place" class="form-label place">Place</label>
                                                                       <input type="text" class="place  form-control" id="place" name="place">
                                                                     </div>
                                                                     <input type="submit" id="generate" class="generate btn-success btn" name="generate" value="Generate">
                                                                   </div>


  </div>
  <script>
    var p=0;
function Fresh(p){
 if(p.checked==true){
  document.getElementById('experience-1').disabled ="true";
document.getElementById('exp-yos1').disabled ="true";
document.getElementById('exp-yoe1').disabled ="true";
document.getElementById('company-1').disabled ="true";
document.getElementById('remark-1').disabled ="true";

 }
else{
  document.getElementById('experience-1').disabled="";
document.getElementById('exp-yos1').disabled ="";
document.getElementById('exp-yoe1').disabled ="";
document.getElementById('company-1').disabled ="";
document.getElementById('remark-1').disabled ="";
}


 }
    








  </script>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>