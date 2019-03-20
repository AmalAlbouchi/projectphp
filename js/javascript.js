function check(){

    if (document.myform.pass1.value != document.myform.pass2.value)
    {alert("Invalid Password"); return false;}
    
    return true;
    }