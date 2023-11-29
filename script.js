function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

// Validasi untuk Login
function validateLoginForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Validasi Email
    if(email == ""){
        alert("Email cannot be empty");
    }
    else if(!validateEmail(email)) {
        alert("Please enter a valid email address");
    }
    //Validasi Password
    else if(password == null){
        alert("Password cannot be empty");
    }
    else if(password.length < 8) { 
        alert("Password must be at least 8 characters");
    } 
    else if(password.search(/[a-z]/) < 0) { 
        alert("Password must contain at least one lowercase letter"); 
    } 
    else if(password.search(/[A-Z]/) < 0) { 
        alert("Password must contain at least one uppercase letter");
    }
    else if(password.search(/[0-9]/) < 0) { 
        alert("Password must contain at least one number"); 
    }
    else{
        alert("Login successfully");
    }

    return true;
}

// Validasi untuk Registration
function validateRegistrationForm() {
    var name = document.getElementById('fullName').value;
    var phone = document.getElementById("phoneNumber").value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    
    // Validasi Nama
    if(name == ""){
        alert("Name cannot be empty");
    }
    // Validasi Phone Number
    else if(phone == ""){
        alert("Phone number cannot be empty")
    }
    else if(phone.length < 10){
        alert("Phone number must longer than 10 digits.")
    }
    // Validasi Email
    else if(email == ""){
        alert("Email address cannot be empty");
    }
    else if (!validateEmail(email)) {
        alert("Please enter a valid email address");
    }
    // Validasi Password
    else if(password == null){
        alert("Password cannot be empty");
    }
    else if(password.length < 8) { 
        alert("Password must be at least 8 characters"); 
    } 
    else if(password.search(/[a-z]/) < 0) { 
        alert("Password must contain at least one lowercase letter"); 
    } 
    else if(password.search(/[A-Z]/) < 0) { 
        alert("Password must contain at least one uppercase letter");
    }
    else if(password.search(/[0-9]/) < 0) { 
        alert("Password must contain at least one number"); 
    }
    else if(confirmPassword!= password) { 
        alert("The confirm password confirmation does not match"); 
    }
    else{
        alert("Register successfully");
    }
    return true;
}
