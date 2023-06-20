
   var count=2,num=1,c=2,n=1;
   var p=1,q=1;
  //************************************ Function To Check Validation in Personel Information ******************* */ 
   document.getElementById("generate").addEventListener('click',function(){
    personelValid();
   })


//  ***********************************************Function to Chexck Valid Number ****************************************************
document.getElementById("phno").addEventListener('focusout',function(){checkInt(this.value)});
document.getElementById("aadhar").addEventListener('input',function(){checkInt(this.value)});
function checkInt(val){
if(isNaN(val)){
alert("Please Enter a Valid Number");
return ;
  }

}
// *************************************************************************************************************
   function personelValid(){
  
    let name=document.getElementById("full-name").value;
    let gender=document.getElementById("gender").value;
    let aadhar=document.getElementById("aadhar").value
    let dob =document.getElementById("dob").value;
    let profile =document.getElementById("profile").value;
    let phno = document.getElementById("phno").value;
    let desg = document.getElementById("designation").value;
    let add= document.getElementById("address").value;

  if(profile=="" || name=="" || dob=="" || gender=="" ||phno=="" || desg=="" ||add=="" || email=="" || aadhar==""){
      alert("Please Fill Out Required Information");
      return false;
    }
   }
  // ****************************************************************************************************************************************************** // 
  // ************************************************************************** Function To Check The Validation in Profile Photo **************************//
  
  function photoCheck(){
    var file_name=document.getElementById("profile").files[0];
    var val =document.getElementById("profile").value;
    var len=val.length;
    var ext=val.substr(len-4);
 if(ext=='jpeg' || ext==".jpg"){
  document.getElementById("profile-alert").style.display="none";
 }
 else{
  document.getElementById("profile-alert").style.display="block";
  document.getElementById("profile").value="";
  return;
}

if(parseInt(file_name.size)>153600){console.log(file_name.size);
  document.getElementById("profile-alert").innerHTML="Profile Size Must be less than 150 K.b";
  document.getElementById("profile-alert").style.display='inline-block';
  document.getElementById("profile-alert").style.margin='-10px 120px 0px 0px';
  document.getElementById("profile").value="";
  return;
 }else{
  document.getElementById("profile-alert").style.display='none';
  return;

 }
}
// ********************************************************************************************************************************************//

     
   // *************************************************************** **********************************************************************************    




  //************************************************************************************validation of Qualification***************************************************
    document.getElementById("plus-"+num).addEventListener('click',function(){
      let qualification= document.getElementById("qualification-"+num).value;
       let start_date = document.getElementById('yos-'+num).value;
       let end_date =document.getElementById('yoe-'+num).value;
       let institute=document.getElementById('institute-'+num).value;
      if(qualification!=""){
        if(start_date!='' && end_date!=''){
          if(institute!=''){
            addEducation();
  
          }else{
            alert("Please Fill the Name of Instution");
          return;
          }
        }else{
          alert("Start Date and End Date Must be Filled Out");
          return;
        }
      }
      else{
        
    alert(`Please Fill Out ${num} Qualification Information First`);
    return;
  
  }
  });
 
 
  // *******************************************************************************Experienece4 Validation *********************************************************
  document.getElementById("exp-plus"+n).addEventListener('click',function(){
      let exp= document.getElementById("experience-"+n).value;
       let start_date = document.getElementById('exp-yos'+n).value;
       let end_date =document.getElementById('exp-yoe'+n).value;
       let company =document.getElementById('company-'+n).value;
      if(exp!=""){
        if(start_date!='' && end_date!=''){
          if(company!=''){
            addExperience();
         
          }else{
            alert("Please Fill the Name of Company");
            document.getElementById("experience-"+n).focus();
          return;
          }
        }else{
          alert("Start Date and End Date Must be Filled Out ");
          document.getElementById("exp-yos"+n).focus();
          return;
        }
      }
      else{
        
    alert("Please Fill Out "+ n +" Experience Information First");
    return;
  
  }
  });
 










   function addEducation(){
document.getElementById("demo"+count).innerHTML=`<table class="education-table">
  <thead>
   </thead>
   <tbody>
      <tr> 
      <td class="checkbox-educ">
      <div class="form-group">
          <label  for="pro-edu-${count}" class="form-label professional">Proffesional</label>
           <input type="checkbox" class="checkbox" id="pro-educ-${count}" value="professional" name="pro-edu-${count}"/>
           
          </div>
        </td>
        <td class="qualification">
        <div class="form-group">
        <label for="qualification-${count}" class="form-label">Qualification</label>
        <input type="text" class="form-control" id="qualification-${count}" name="qualification-${count}" />
     </div>
     </td>
       <td>
           <div class="start-year form-group">
               <label for="yos-${count}" class="form-label yos">Start Year</label>
          <input type="date" class="year-start  form-control yos" id="yos-${count}"  name="yos-${count}"  max="2999-12-31">
           </div>
       </td>
       <td>   
       <div class="end-year form-group">
           <label for="yoe-${count}" class="form-label yoe">End Year</label>
           <input type="date" class="year-end  form-control yoe" id="yoe-${count}"  name="yoe-${count}"  max="2999-12-31" onfocusout="checkDate();">
       </div>
          
       </td>
       <td>
           <div class="form-group">
           <label for="institute-${count}" class="form-label institute">Name of Organization</label>
           <input type="text" class="form-control institute" id="institute-${count}" name="institute-${count}">
           </div>
        
       </td>
   </tr>
</tbody>
</table> 
<table>

<tbody>   
<tr>
<td>

<div class="remark"> <h2>Education Remark</h2><textarea id="education-remark-${count}" name="education-remark-${count}" rows="4" cols="50"></textarea>
 <div class="validation-remark">Please Divide You Remarks in points by putting slash(/)</div>
</div>
</td> 
</tr>

<!------------------------------------------------------------------- Adding More Fields in Qualification --------------------------------------->
</tbody>
</table> 
     <hr>    `; p=count;
         ++count;
         ++num;
         
}

// ****************************************************************************************************************************************************************** //
// ************************************************* Function To Generate More Fields in Experience Field *********************************************************** //


function addExperience(){
document.getElementById("exp-demo"+c).innerHTML=`<table class="experience-table">
  <thead>
   </thead>
   <tbody>
      <tr> 
       <td>
          <label for="experience-${c}" class="form-label">Experience</label>
          <input type="text" class="form-control" id="experience-${c}"  name="experience-${c}"> 
       </td>
       <td>
           <div class="start-year">
               <label for="exp-yos${c}" class="form-label yos">Start Year</label>
          <input type="date" class="year-start  form-control yos" id="exp-yos${c}"  name="exp-yos${c}" max="2999-12-31">
           </div>
       </td>
       <td>   
       <div class="end-year">
           <label for="exp-yoe${c}" class="form-label yoe">End Year</label>
           <input type="date" class="year-end  form-control yoe" id="exp-yoe${c}"  name="exp-yoe${c}"  max="2999-12-31" onfocusout="check_Exp_Date()">
       </div>
          
       </td>
       <td>
           <label for="company-${c}" class="form-label institute">Comapny / Organization Name</label>
           <input type="text" class="form-control institute" id="company-${c}" name="company-${c}" >
        
       </td>
   </tr>
</tbody>
</table> 
<table>

<tbody>   
<tr>
<td>

<div class="remark"> <h2>Experience Remark</h2><textarea id="remark-${c}" name="remark-${c}" rows="4" cols="50"></textarea>
<div class="validation-remark">Please Divide You Remarks in points by putting slash(/)</div>


</div>
</td> 
</tr>

</tbody>
</table> 
         `;
         q=c;;
         ++c;
         ++n;
    }
// ************************************************************************************************************************************************************

 
  

// ***************************************************************** Function to Ckeck End Date *******************************************************************   





   
  //  ********************************************************************************************************************
  // *********************************************************************** Experience Check Function *************************************************

function check_Exp_Date(){
  document.getElementById("exp-yoe"+q).addEventListener('focusout',function(){
    check_Exp_Date();
    
       })
  var start_date= new Date(document.getElementById("exp-yos"+q).value);
  var end_date=new Date(document.getElementById("exp-yoe"+q).value);
if(start_date>=end_date){
alert("End Date Must Be  Greater Than Start Date");
document.getElementById("exp-yoe"+q).value="";
}
return ;
}; 




 
  
 
    
   /*if(start_date.getFullYear()<=end_date.getFullYear()){
    if(start_date.getMonth()+1<=end_date.getMonth()+1){
 if(start_date.getDate()<=end_date.getDate()){

 }else{
  alert("End Date Must Be  Greater Than Start Date");
  document.getElementById("exp-yoe"+n).value="";
  return ;
 }
    }else{
      alert("End Date Must Be Greater Than than Start Date");
      document.getElementById("exp-yoe"+n).value="";
     return;
    }
    
 }else{
 
  alert("End Date Must Be Greater Than than Start Date");
  document.getElementById("exp-yoe"+n).value="";
  return ;
 }
}
*/


// ************************************************ Start Date *******************************************


function checkDate(){ 
  document.getElementById("yoe-"+p).addEventListener('focusout',function(){
    checkDate();
    
       })
  var start_date= new Date(document.getElementById("yos-"+num).value);
      var end_date=new Date(document.getElementById("yoe-"+num).value);
      if(start_date>=end_date){
        alert("End Date Must Be  Greater Than Start Date");
        document.getElementById("yoe-"+num).value="";
        return ;
      } 
    }     
    






   // ********************************************************************  Function of Jquery *************************************************************** 

    $("docuemnt").ready(function(){ $("#cv-form").submit(
      function(event){
       event.preventDefault();
 let data = new FormData(this);
 $.ajax(
   { method:"POST",
     url:"insert_data.php",
     data:data,
     contentType:false,
     processData:false,
     success:function(response){
        if(response=="fail"){
       alert("Your C.V  Not   Generated");
       return false;
      }else if(response =="same email"){
       alert("Your C.V  Already  Generated");
       return false;
      }
      else{
       alert("C.V Generated Successfully");
      window.location.href="localhost/cv_generator/cv_view.php";
     
     }

   }
  }
 )
      }

   )}
  
  )

