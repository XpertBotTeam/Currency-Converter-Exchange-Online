const firebaseConfig = {
    apiKey: "AIzaSyApr2spnX_B6EDxkqV8NADZ_9JHo5mvyQ4",
    authDomain: "auth-5534d.firebaseapp.com",
    databaseURL: "https://auth-5534d-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "auth-5534d",
    storageBucket: "auth-5534d.appspot.com",
    messagingSenderId: "322797482160",
    appId: "1:322797482160:web:b70447c6daf3333a56cb75"
};
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

function register(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var full_name = document.getElementById('full_name').value;

    if(validate_email(email).valueOf(email) == true || validate_password(password).valueOf(password) == true || validate_field(full_name).valueOf(full_name)==false  ) {
       alert('On Your Way :) Complete We Are Waiting You!')
    }
    
    if(validate_email(email).valueOf(email) == true || validate_password(password).valueOf(password) == true ) {
        alert('registration Completed!')
        window.open("/");
    } 

    if(validate_email(email) == true.valueOf(email), validate_password(password).valueOf(password) == false , validate_field(full_name).valueOf(full_name)==true  ) {
        alert('Password/Email Missing!')
    }
    if(validate_email(email).valueOf(email) == true, validate_password(password).valueOf(password) == true , validate_field(full_name).valueOf(full_name)==false  ) {
        alert('Username Missing!')
    }
    
    
   
auth.createUserWithEmailAndPassword(auth, email, password)
    .then(function(){
        var user=auth.currentUser

        var database_ref = database.ref()

        var user_data = {
            email:email,
            password:password,
            full_name:full_name,
        }
        database_ref.child('users/'+ user.uid).set(user_data)

        alert('Account Created! Sign In Now, We are happy to see you here !!')
    })
    .catch(function(error){
        var error_code = error.code
        var error_message = error.message

        alert(error_message)
    })
}
function login(){
    
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
    if(validate_email(email).valueOf(register) == true, validate_password(password).valueOf(register) == true ) {
         alert('Logged In Complete!')
         window.open("/welcome");
    } 
    if(validate_password(password).valueOf(register) == true, validate_email(email).valueOf(register) == false){
        alert(' UnRegistered Account!')
    }
    if( validate_password(password).valueOf(register) == false){
    alert('Password must be more than 6 character')
    }
    
    auth.signInWithEmailAndPassword(email, password)
    .then(function(){
        var user = auth.currentUser
        var database_ref = database.ref()
        var user_data = {
        }
        database_ref.child('users/'+ user.uid).update(user_data)
        alert('Welcome to Our Website !! We are Happy to see you Here!')
        window.open("/welcome");
})
    .catch(function(error){
        var error_code = error.code
        var error_message = error.message

        alert(error_message)
    })
}

function validate_email(email){
    expression= /^[^@]+@\w}(\.\w+)+\w$/
    if(expression.test(email) == true){
        return true
    } else{
        return false
    }
}
 
function validate_password(password){
    if(password < 6){
        return false
    } else{
        return true
    }
}

function validate_field(field) {
    if(field == null){
        return false
    } 
    
    if(field.length <= 0){
        return false
    }else {
        return true
    }
}