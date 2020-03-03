let openLoginRight = document.querySelector('.h1');
let loginwrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
    loginwrapper.classList.toggle('open');
});