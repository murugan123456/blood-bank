let psd2 = document.getElementById('pwd1');
let psd1 = document.getElementById('pwd');
function password() {
    let checkbox = document.getElementById("show");
         if ( checkbox.checked == true ) {
            document.getElementById('picon').classList.remove('fa-eye-slash');
            document.getElementById('picon').classList.add('fa-eye');
         }
         else{
            document.getElementById('picon').classList.add('fa-eye-slash');
         }
    if(psd1.type=='password'){
        psd1.type='text';
    }
    else{
        psd1.type='password';
    }
}
function confirmpassword() {
    let checkbox1 = document.getElementById("icon");
         if ( checkbox1.checked == true ) {
            document.getElementById('cpicon').classList.remove('fa-eye-slash');
            document.getElementById('cpicon').classList.add('fa-eye');
         }
         else{
            document.getElementById('cpicon').classList.add('fa-eye-slash');
         }
    if(psd2.type=='password'){
        psd2.type='text';
    }
    else{
        psd2.type='password';
    }
}