let regbtn = document.querySelector('.regbtn');
let logbtn = document.querySelector('.logbtn');
let nameField = document.querySelector('.nameField');
let title = document.querySelector('.title');
let conField = document.querySelector('.conField');
let contField = document.querySelector('.contField');
let text = document.querySelector('.text');


logbtn.addEventListener('click',()=>{
    nameField.style.maxHeight= '0';
    conField.style.maxHeight= '0';
    contField.style.maxHeight= '0';
    title.innerHTML = 'Login';
    text.innerHTML = 'Forgot Password';
    regbtn.classList.add('disable');
    logbtn.classList.remove('disable');
    
});
regbtn.addEventListener('click',()=>{
    nameField.style.maxHeight= '50px';
    conField.style.maxHeight= '50px';
    contField.style.maxHeight= '50px';
    title.innerHTML = 'Registration';
    text.innerHTML = 'Password suggetions';
    regbtn.classList.remove('disable');
    logbtn.classList.add('disable');
    
});



