function verifyLogin(){
  var user = document.getElementsByName("login").value;
  var pass = document.getElementsByName("password").value;
  console.log("oi")
  if (user == ""){
    alert("Preencha o Login")
    user.focus()
    return false
  }
  else if(pass == ""){
    alert("Preencha sua senha")
    pass.focus()
    return false

  }
  
  return true
  

 
}