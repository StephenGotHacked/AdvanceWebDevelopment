<?php
    include('HeaderAndFooter/header.html');
?>

<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" href="Css/Registration.css">
</head>

<body>
    <div class="container">
        <form method="post" id="form" action="Connection.php">
            <h1>REGISTER HERE</h1>
            <label for="first_name">First Name:</label>
            <input type="text" name="Fname_textbox" class="textbox" placeholder="First Name" required>
            
            <br><br>

            <label for="last_name">Last Name:</label>
            <input type="text" name="Lname_textbox" class="textbox" placeholder="Last Name" required>

            <br> <br>
            <label for="birthdate">Birthday:</label>
            <input type="date" name="Date_textbox" class="textbox" id="birthdate">
            
            <label for="age"> Age:</label>
            <input type="text" name="Age_textbox" class="textbox" id="age" placeholder="Age" readonly>
            
            <br><br>

            <label for="gender">Gender: </label>

            <select class="textbox" name="Gender_textbox" style="padding-right: 5pt;">
                <option>Male</option>
                <option>Female</option>
                <option>Prefer not say</option>
            </select>

            <br><br>

            <label for="email">Email: </label><input type="email" name="Email_textbox" class="textbox" placeholder="Email" required>

            <br><br>

            <label for="contacts">Contact Number: </label><input type="number" name="Connum_textbox" class="textbox" id="contacts"
            placeholder="Mobile Number" required>

            <br><br>

            <label for="username">Username: </label><input type="text" name="Username_textbox" placeholder="Username" class="textbox" required>

            <br><br>

            <label for="password">Password: </label><input type="password" name="Password_textbox" placeholder="Password" id="password" class="textbox" required>

            <input type="checkbox" id="checkbox"><label id="checkbox">Show Password</label>

            <br><br>

            <label for="conpassword">Confirm Password: </label><input type="password" name="Conpass_textbox" placeholder="Confirm Password" id="conpass" class="textbox" required>

            <br><br>
            <center>
                <input type="submit" value="REGISTER" id="register">
            </center>
        </form>
        </div>
        
<script>
const birthdateinput = document.getElementById('birthdate');
const agevalue = document.getElementById('age');
const form = document.getElementById('form');
var contact = document.getElementById('contacts');
var password = document.getElementById('password');
var conpassword = document.getElementById('conpass');
var checkbox =document.getElementById('checkbox');


form.addEventListener('submit', function(event){
const age = parseInt(agevalue.value);
    if(isNaN(age) || age < 18){
        if(isNaN(age)){
            alert("You must enter your age to proceed!");
            event.preventDefault();
        }else{
            alert("You must be at least 18 years old to proceed!");
            agevalue.value = "";
            birthdateinput.value = "mm/dd/yyyy";
            event.preventDefault();
        }
    event.preventDefault();
    }
});

birthdateinput.addEventListener('change', displaycurrentage);

function displaycurrentage(){
    const birthdate = new Date(birthdateinput.value);
    const todaysdate = new Date();
    let age = todaysdate.getFullYear() - birthdate.getFullYear();
    const monthdiff = todaysdate.getMonth() - birthdate.getMonth();

    if (monthdiff < 0 || (monthdiff === 0 && todaysdate.getDate() < birthdate.getDate())){
        age--;
    }
        agevalue.value = age;
    }

contact.addEventListener('blur', function(){
    var contactnum = this.value;
    if(contactnum.length < 11){
        alert("You need to enter at least 11 digit numbers.");
        this.value="";
    }else if(contactnum.length > 11){
        alert("You need to enter at least 11 digit numbers.");
        this.value="";          
    }
});

form.addEventListener('submit', function(event){
    if(password.value !== conpassword.value){
        alert("Password didn't matched!");
        password.value="";
        conpassword.value="";
        event.preventDefault();
        password.classList.add('error');
        conpassword.classList.add('error');
    }
});

checkbox.addEventListener('change', function(){
    if(this.checked){
        password.type='text';
        conpassword.type='text';
    }else{
        password.type='password';
        conpassword.type='password';
        }
});
</script>
</body>
</html>

<?php
    include('HeaderAndFooter/footer.html');
?>