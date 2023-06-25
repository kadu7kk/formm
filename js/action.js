function validaEmail(){
    email = $("#exampleFormControlInput1").val();
    if(isValidEmail(email) === false|| email ===""){
        $(".invalid-feedback").show();
        $("#exampleFormControlInput1").addClass("is-invalid");
        console.log("email invalido")
        return false
    }
    else{
      $("#div_oca").load("thanks.php", {email: email})
    }
}

let reg = /^[\w.\+]+@\w+.\w{2,}(?:.\w{2})?$/;
function isValidEmail(email){
  return reg.test(email);
}

