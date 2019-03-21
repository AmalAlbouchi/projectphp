function check(){

    if (document.myform.pass1.value != document.myform.pass2.value)
    {alert("Invalid Password"); return false;}
    
    return true;
    }

function check2(){

        if (document.myform.code.value != "0000")
        {alert("Invalid code"); return false;}
        return true;
        }
    
    