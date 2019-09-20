// register
function createUser() {

    var email=document.getElementById("userEmail").value;
    var password=document.getElementById("userPassword").value;
    var confirmPassword=document.getElementById("confirmPassword").value;

    console.log(password);
    console.log(confirmPassword);

    if(password==confirmPassword)
    {

        firebase.auth().createUserWithEmailAndPassword(email,password).then(function() {
            window.location="/login";
        
        }).catch(function(error) {

            var errorMessage=error.message;
            alert(errorMessage);

        })

    }else{

        alert("password tidak sama");

    }

}

// login
function loginUser() {

    var email=document.getElementById("u_email").value;
    var password=document.getElementById("u_password").value;

    firebase.auth().signInWithEmailAndPassword(email,password).then(function() {

        window.location="/loginAdmin"

    }).catch(function(error) {

        var errorMessage=error.message;
        alert(errorMessage);

    });

}