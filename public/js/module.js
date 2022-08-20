const firebaseConfig = {
    apiKey: "AIzaSyCOP1kg1-MSa_Xlc617aP3_I23PwyBl3I4",
    authDomain: "minenow-fde27.firebaseapp.com",
    projectId: "minenow-fde27",
    storageBucket: "minenow-fde27.appspot.com",
    messagingSenderId: "618137597068",
    appId: "1:618137597068:web:bff134188dddc89d4537a9"
};
  
initializeApp(firebaseConfig);


function register(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var full_name = document.getElementById('full_name').value;

    if(validate_email(email) == true || validate_password(password) == true || validate_field(full_name)==false  ) {
       alert('On Your Way :) Complete We Are Waiting You!')
    }
    
    if(validate_email(email) == true || validate_password(password) == true ) {
        alert('registration Completed!')
        window.open("/");
    } 

    if(validate_email(email) == true, validate_password(password) == false , validate_field(full_name)==true  ) {
        alert('Password/Email Missing!')
    }
    if(validate_email(email) == true, validate_password(password) == true , validate_field(full_name)==false  ) {
        alert('Username Missing!')
    }
    
    
   
auth.createUserWithEmailAndPassword(email, password)
    .then(function(){
        var user=auth.currentUser

        var database_ref = database.ref()

        var user_data = {
            email:email,
            password:password,
            full_name:full_name,
            last_login:Date.now()
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
    

    if(validate_email(email).value == validate_email(email)  || validate_password(password).value == validate_password(password)) {
        alert('On Your Way')
     }
    if(validate_email(email) == true, validate_password(password) == true ) {
         alert('Logged In Completed!')
         window.open("/welcome");
    } 
    if(validate_password(password) == true, validate_email(email) == false){
        alert(' UnRegistered Account!')
    }
    if( validate_password(password) == false){
    alert('Password must be more than 6 character')
    }
    
    auth.signInWithEmailAndPassword(email, password)
    .then(function(){
        var user = auth.currentUser
        var database_ref = database.ref()
        var user_data = {
        last_login : Date.now()
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