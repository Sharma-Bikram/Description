/* login form and navbar */


/*

let loginForm = document.querySelector('.popup-container');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

*/

/*
function toggleLoginPopup(){
    var popup = document.getElementById("signIn");
    if(popup.style.display === "block"){
        popup.style.display = "none";
    }
    else{
        popup.style.display = "block";
    }
}




const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');

const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');

signUpButton.addEventListener('click',function(){
signInForm.style.display="none";
signUpForm.style.display="block";
})

signInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
    })

    */


    function popup(popup_name){
        get_popup=document.getElementById(popup_name);
        if(get_popup.style.display=="flex"){
            get_popup.style.display="none";
        }
        else{
            get_popup.style.display="flex"
        }
    }