function validate() {
    let udate = document.getElementById('date').value;
    var dob = new Date(udate);
    var month = Date.now() - dob.getTime();
    var aged = new Date(month);
    var year = aged.getUTCFullYear();
    var age = Math.abs(year - 1970);
    if(age<18){
        window.alert("You are Not Eligible to donote blood");
    }
    else{
       document.getElementById("form").action = "donor.php";
    }
}
function lastdate(){
    var yes = document.getElementById("yes");
    var lastdate = document.getElementById("lastdate")
        if (yes.checked) {
            lastdate.setAttribute("required",true);
            lastdate.removeAttribute("readonly",true)
    }
    else{
        lastdate.removeAttribute("required",true);
        lastdate.setAttribute("readonly",true);
        lastdate.value = '';
    }
}
 setInterval(lastdate,1000)
   