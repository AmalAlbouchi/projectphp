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
    function price_change(newVal) {
        document.getElementById("price_show").innerHTML= newVal;
        console.log(newVal);
    }

    function showProducts() {
        p = document.getElementById("price_range").value;
        catg = document.getElementsByName("radio").value;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","shopdemo.php?p="+p+"?catg="+catg,true);
            xmlhttp.send();
        }