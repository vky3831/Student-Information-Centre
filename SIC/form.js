function validate_pass(){
  var pass = document.getElementById('password').value;
  var cnf_pass = document.getElementById('cnf_password').value;

  document.getElementById("alert_pass").style.display = "none";
  document.getElementById("alert_lower").style.display = "none";
  document.getElementById("alert_upper").style.display = "none";
  document.getElementById("alert_num").style.display = "none";
  document.getElementById("alert_special").style.display = "none";
  document.getElementById("alert_len").style.display = "none";
  document.getElementById("alert_cnf_pass").style.display = "none";

  if(pass == ""){
    document.getElementById("alert_pass").style.display = "block";
    return false;
  }

  var lowerCaseLetters = /[a-z]/g;
  if(!(pass.match(lowerCaseLetters))){
    document.getElementById("alert_lower").style.display = "block";
    return false;
  }

  var upperCaseLetters = /[A-Z]/g;
  if(!(pass.match(upperCaseLetters))){
    document.getElementById("alert_upper").style.display = "block";
    return false;
  }

  var digits = /[0-9]/g;
  if(!(pass.match(digits))){
    document.getElementById("alert_num").style.display = "block";
    return false;
  }

  var special = /[!"#$%&'()*+,-./:;<=>?@^_`{|}~]/g;
  if(!(pass.match(special))){
    document.getElementById("alert_special").style.display = "block";
    return false;
  }

  if(!(pass.length >= 8)){
    document.getElementById("alert_len").style.display = "block";
    return false;
  }


  if(!(pass == cnf_pass)){
    document.getElementById("alert_cnf_pass").style.display = "block";
    return false;
  }

return true;
}

function validate_name(){

  document.getElementById("alert_name").style.display = "none";
  var name = document.getElementById('name').value;
  var digits = /[0-9]/g;
  if(name == "" || name.match(digits)){
    document.getElementById("alert_name").style.display = "block";
    return false;
  }
  return true;
}

function validate_roll(){

  document.getElementById("alert_roll").style.display = "none";
  var name = document.getElementById('roll');
  var roll_ex = /(16|17|18|15)(CS|IT|CH|EE|CY|ME|MM|EC|CE|BT)(80|10)[0-9]{2,3}/g
  if(name.value == "" || !(name.value.match(roll_ex))){
    document.getElementById("alert_roll").style.display = "block";
    return false;
  }
  return true;
}


function validate_reg(){

  document.getElementById("alert_reg").style.display = "none";
  var name = document.getElementById('reg');
  var reg_ex = /(16|17|15|18)U10[0-9]{3}/g
  if(name.value == "" || !(name.value.match(reg_ex))){
    document.getElementById("alert_reg").style.display = "block";
    return false;
  }
  return true;
}

function validate_address(){

  document.getElementById("alert_address").style.display = "none";
  var name = document.getElementById('address');
  if(name.value == ""){
    document.getElementById("alert_address").style.display = "block";
    return false;
  }
  return true;
}

function validate_contact(){

  document.getElementById("alert_contact").style.display = "none";
  document.getElementById("alert_contact_invalid").style.display = "none";
  var name = document.getElementById('contact');
  if(name.value == ""){
    document.getElementById("alert_contact").style.display = "block";
    return false;
  } else if ((name.value < 0) || (name.value.length != 10)) {
    document.getElementById("alert_contact_invalid").style.display = "block";
  }
  return true;
}

function validate_email(){

  document.getElementById("alert_email").style.display = "none";
  var name = document.getElementById('email');
  var email_ex = /[A-Za-z0-9.]{6,}@[a-z]{3,}.[a-z]{2,}/g
  if(name.value == "" || !(name.value.match(email_ex))){
    document.getElementById("alert_email").style.display = "block";
    return false;
  }
  return true;
}

function validate_user(){
  document.getElementById("alert_user").style.display = "none";
  var name = document.getElementById('user');
  if(name.value == ""){
    document.getElementById("alert_user").style.display = "block";
  }
}


function validate_sec(){
  document.getElementById("alert_sec").style.display = "none";
  var name = document.getElementById('sec_ans');
  if(name.value == ""){
    document.getElementById("alert_sec").style.display = "block";
    return false;
  }
  return true;
}

function validate_hobby(){

  document.getElementById("alert_hobby").style.display = "none";
  var name = document.getElementById('hobby');
  if(name.value == ""){
    document.getElementById("alert_hobby").style.display = "block";
    return false;
  }
  return true;
}

function validate_dob(){

  document.getElementById("alert_dob").style.display = "none";
  var name = document.getElementById('dob');
  if(name.value == ""){
    document.getElementById("alert_dob").style.display = "block";
    return false;
  }
  return true;
}

function validate_form(){
  var temp;

  temp = validate_name();
  if(temp == false)
  return false;

  temp = validate_roll();
  if(temp == false)
  return false;

  temp = validate_reg();
  if(temp == false)
  return false;

  temp = validate_address();
  if(temp == false)
  return false;

  temp = validate_contact();
  if(temp == false)
  return false;

  temp = validate_email();
  if(temp == false)
  return false;

  temp = validate_pass();
  if(temp == false)
  return false;

  temp = validate_dob();
  if(temp == false)
  return false;

  temp = validate_hobby();
  if(temp == false)
  return false;

  temp = validate_sec();
  if(temp == false)
  return false;

  return true;
}
function cal_age(){
  var dob = document.getElementById('dob').value;
  // var dob = new Date(1978, 10, 3);
  dob = new Date(dob);
  var age = document.getElementById('age');
  var d = new Date();
  var value;
  var diff = d.getTime() - dob.getTime();

  temp =  Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
  age.value = temp;

}
