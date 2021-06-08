function verifyLogin(){
  var userEl = document.getElementById("login");
  var passEl = document.getElementById("password");
  var user = document.getElementById("login").value;
  var pass = document.getElementById("password").value;
  console.log(user);
  console.log(pass);
  if (user === ""){
    alert("Preencha o Login");
    userEl.focus();
    return false;
  }
  else if(pass === ""){
    alert("Preencha sua senha");
    passEl.focus();
    return false;

  }
  
  return true;
  

 
}