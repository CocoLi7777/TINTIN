function validateForm(){
  var fullname = document.forms["contact"]["fullname"].value;
  var email = document.forms["contact"]["email"].value;
  var emailPattern = /\S+@\S+\.\S+/;
  var isValid;

  if(fullname == ""){
    document.getElementById('nameError').innnerHTML = "Name must not be blank";
    isValid = false;
  }else{
    isValid = true;
  }
  if (!emailPattern.test(email)){
     document.getElementById('emailError').innnerHTML = "Pls enter your valid email";
     isValid = false;
   }else{
     isValid = true;
   }

  return isValid;


}










function checkReset(){
  document.getElementById("contactForm").reset();
  document.getElementById("myname").focus();
}


function validateForm(){
   var fullname=document.forms["contactForm"]["name"].value.trim();
   var email=document.forms["contactForm"]["email"].value.trim();
   var message=document.forms["contactForm"]["message"].value.trim();
   var subject=document.forms["contactForm"]["subject"].value.trim();
   var emailPattern = /\S+@\S+\.\S+/;
   var isValid;


  if(fullname =="" || email =="" || emailPattern.test(email)==false || subject =="" || message == ""){
    isValid = false;
  }else{
    isValid = true;
  }
  if(fullname == ""){
     document.getElementById("nameError").innerHTML = "Name must not be blank";
  }
  if(email == ""){
     document.getElementById('emailError').innerHTML = "Email must not be blank";
  }else if(!emailPattern.test(email)){
     document.getElementById('emailFormatError').innerHTML = "Pls enter the valid email";
  }

  if(subject == ""){
     document.getElementById('subjectError').innerHTML = "Subject must not be blank";
  }
  if(message == ""){
     document.getElementById('messageError').innerHTML = "Message must not be blank";
  }

return isValid;

}




function validateForm(){
   var fullname=document.forms["contactForm"]["name"].value.trim();
   var email=document.forms["contactForm"]["email"].value.trim();
   var message=document.forms["contactForm"]["message"].value.trim();
   var subject=document.forms["contactForm"]["subject"].value.trim();
   var emailPattern = /\S+@\S+\.\S+/;
   var isValid;
   var arrInfo = [fullname,email,emailPattern.test(email),subject,message];

   for(var i=0;i<arrInfo.length;i++){
     if(arrInfo[i] == "" || arrInfo[i] == false){
       isValid = false;
     }else{
       isValid = true;
     }
   }

  if(arrInfo[0] == ""){
     document.getElementById("nameError").innerHTML = "Name must not be blank";
  }
  if(arrInfo[1] == ""){
     document.getElementById('emailError').innerHTML = "Email must not be blank";
  }else if(arrInfo[2] == false){
     document.getElementById('emailFormatError').innerHTML = "Pls enter the valid email";
  }

  if(arrInfo[3] == ""){
     document.getElementById('subjectError').innerHTML = "Subject must not be blank";
  }
  if(arrInfo[4] == ""){
     document.getElementById('messageError').innerHTML = "Message must not be blank";
  }

return isValid;

}
