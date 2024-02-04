function ValidationAppearance() {
    var FName = document.getElementById("FName");
    var LName = document.getElementById("LName");
    var Age = document.getElementById("BDMY");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var emailvalid = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/

    //First name & Last name if Valid, TRUE
    if (FName.value.match(/[0-9]/) || LName.value.match(/[0-9]/)) {
        $(document).ready(function () {
            $("#F_LNameREQ").css('color', 'red');
        });
    }
    else {
        $(document).ready(function () {
            $("#F_LNameREQ").css('color', 'green');
        });
    }
    //Age if Valid, TRUE
    if (Age.value < 16) {
        $(document).ready(function () {
            $("#AgeREQ").css('color', 'red');
        });
    }
    else {
        $(document).ready(function () {
            $("#AgeREQ").css('color', 'green');
        });
    }
    //Password if Valid, True
    if (password.value.match(/[0-9]/)) {
        $(document).ready(function () {
            $("#OneNumValid").css('color', 'green');
        });
    }
    else {
        $(document).ready(function () {
            $("#OneNumValid").css('color', 'red');
        });
    }
    if (password.value.length > 8) {
        $(document).ready(function () {
            $("#CharNumValid").css('color', 'green');
        });
    }
    else {
        $(document).ready(function () {
            $("#CharNumValid").css('color', 'red');
        });
    }
    if (password.value.match(/[a-z]/)) {
        $(document).ready(function () {
            $("#LowercaseValid").css('color', 'green');
        });

    }
    else {
        $(document).ready(function () {
            $("#LowercaseValid").css('color', 'red');
        });
    }
    if (password.value.match(/[!@#$%^&*()]/)) {
        $(document).ready(function () {
            $("#SpecialCharValid").css('color', 'green');
        });
    }
    else {
        $(document).ready(function () {
            $("#SpecialCharValid").css('color', 'red');
        });
    }
}
function UpdateValidations() {
    var FName = document.getElementById("FName");
    var LName = document.getElementById("LName");
    var Age = document.getElementById("BDMY");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var emailvalid = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
    //First & Last name Validation 
    if (FName.value.length == 0) {
        FName.setCustomValidity("First name shouldn't be empty.");
    }
    else {
        FName.setCustomValidity('');
    }
    if (FName.value.match(/[0-9]/)) {
        FName.setCustomValidity("First name shouldn't contain numbers.");
    }
    if (LName.value.length == 0) {
        LName.setCustomValidity("Last name shouldn't be empty.");
    }
    else {
        LName.setCustomValidity('');
    }
    if (LName.value.match(/[0-9]/)) {
        LName.setCustomValidity("Last name shouldn't contain numbers.");
    }

    //Age Validation
    if (Age.value.length == 0) {
        Age.setCustomValidity("Age shouldn't be empty.");
    }
    else {
        Age.setCustomValidity('');
    }
    if (Age.value < 16) {
        Age.setCustomValidity("You must be 16 years or older.");
    }
    else {
        Age.setCustomValidity('');
    }
    if (Age.value > 99) {
        Age.setCustomValidity("Age must be less than 100.");
    }
    else {
        Age.setCustomValidity('');
    }

    //Phone Number Validation 
    if (phone.value.length != 11) {
        phone.setCustomValidity("Phone Number must be 11 digits and cannot be empty.");
    }
    else {
        phone.setCustomValidity('');
    }

    //Email Validation
    if (email.value.length == 0) {
        email.setCustomValidity("Please enter your E-mail Address");
    }
    else {
        email.setCustomValidity('');
    }

    if (password.value.length > 8) {
        password.setCustomValidity('');
    }
    else {
        password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
    }

    if (password.value.match(/[A-Z]/)) {
        password.setCustomValidity('');
    }
    else {
        password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
    }
    if (password.value.match(/[a-z]/)) {
        password.setCustomValidity('');

    }
    else {
        password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
    }
    if (password.value.match(/[0-9]/)) {
        password.setCustomValidity('');
    }
    else {
        password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
    }
    if (password.value.match(/[!@#$%^&*()]/)) {
        password.setCustomValidity('');
    }
    else {
        password.setCustomValidity("Password Should have at least 8 characters , capital letters , small letters , digits and special characters.");
    }
}
