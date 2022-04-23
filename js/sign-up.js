// Chọn các element input
const $ = document.querySelector.bind(document);
const inputName = $('#input-name');
const inputPhone = $('#input-numberphone');
const inputEmail = $('#input-email');
const password = $('#input-password');
const inputPassAgain = $('#input-password--again');
const formSignUp = $('.form-sign-up');

// Tạo mảng
const arrInput = [inputName, inputPhone, inputEmail, password, inputPassAgain];

// Xử lý sự kiện khi người dùng focus vào các thẻ input
arrInput.forEach((self) => {
    userFocus(self);
});

// Xử lý sự kiện blur
inputName.addEventListener('blur', checkNameBlur);
inputPhone.addEventListener('blur', checkPhoneBlur);
inputEmail.addEventListener('blur', checkEmailBlur);
password.addEventListener('blur', checkPassBlur);
inputPassAgain.addEventListener('blur', checkPassAgainBlur);

// Xử lý khi người dùng submit form
formSignUp.addEventListener('submit', (e) => {
    let check;
    checkNameBlur();
    checkPhoneBlur();
    checkEmailBlur();
    checkPassBlur();
    checkPassAgainBlur();
    for(let i=0;i<arrInput.length;i++){
        let messNode = arrInput[i].nextElementSibling;
        check = messNode.classList.contains('hide');
        if(check===false){
            break;
        }
    }
    if(check === true){
        e.target.submit();
    }
    else{
        e.preventDefault();
    }
});
