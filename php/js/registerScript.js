//Validation Code For Inputs

const nameReg =  /^[a-zA-Z ]{2,30}$/;
const lastnameReg = /^[a-zA-Z ]{2,30}$/;
const usernameReg = /^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$/;
const emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const passReg = /^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;


function validate(){
  var nameValidation = document.getElementById("name").value;
  var lastnameValidation = document.getElementById("surname").value;
  var usernameValidaion =  document.getElementById("username").value;
  var emailValidation = document.getElementById("email").value;
  var passValidation =  document.getElementById("pass").value;
  var repeatPassValidation= document.getElementById("passRepeat").value;

  if(nameValidation==''|| lastnameValidation==''|| usernameValidaion==''|| emailValidation==''|| passValidation==''|| repeatPassValidation==''){
    alert('Mbushni fushat e zbrazta');
  }
  else if (!nameReg.test(nameValidation)){
    alert('Emri eshte gabim');
  }
  else if(!lastnameReg.test(lastnameValidation)){
    alert('Mbiemri eshte gabim');
  }
  //else if(!usernameReg.test(usernameValidaion)){
   // alert('Username eshte gabim');
  //}
  else if(!emailReg.test(emailValidation)){
    alert('Email eshte gabim');
  }
  else if (!passReg.test(passValidation)){
    alert('Pass eshte gabim');
  }
  else if (passValidation!=repeatPassValidation){
    alert('Pass duhet te jete i njajte');
  }
  else {
    alert('Jeni kyqur me sukses')
  }
}