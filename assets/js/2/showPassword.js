function showPassword(){
    let password=document.getElementById("exampleInputPassword1");
   // let password2=document.getElementById("password2");
   // if(password.type==="password"||password2.type==="password"){
    if(password.type==="password"){
        passworddocument.getElementById("exampleInputPassword1");
        //password2.type="text";
    }else{
        password.type="password";
       // password2.type="password";
    }
}
function showloginPassword(){
    let password=document.getElementById("password");
    
    if(password.type==="password"){
        password.type="text";
      
    }else{
        password.type="password";
       
    }
}

