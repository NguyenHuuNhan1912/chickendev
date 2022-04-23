// Các element input
const $ = document.querySelector.bind(document);
const contactForm = $('.contact-form');
const inputName = $('#input-name');
const inputPhone = $('#input-numberphone');
const inputEmail = $('#input-email');
const inputContent = $('#input-content');

const arrInput = [inputName, inputPhone, inputEmail, inputContent];

// Xử lý sự kiện khi người dùng focus vào thẻ input
arrInput.forEach((self) => {
    userFocus(self);
});

// Xử lý khi người dùng blur ra ngoài thẻ input
inputName.addEventListener('blur', checkNameBlur);
inputPhone.addEventListener('blur', checkPhoneBlur);
inputEmail.addEventListener('blur', checkEmailBlur);
inputContent.addEventListener('blur', checkContentBlur);

// Xử lý khi người dùng ấn submit form
contactForm.addEventListener('submit', (e) => {
    let check;
    checkNameBlur();
    checkPhoneBlur();
    checkEmailBlur();
    checkContentBlur();
    for(let i=0; i<arrInput.length; i++){
        let messNode = arrInput[i].nextElementSibling;
        check = messNode.classList.contains('hide');
        if(check === false){
            break;
        }
    }
    if(check === true){
        e.target.submit();
    }
    else{
        e.preventDefault();
    }
})