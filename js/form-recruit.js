// Các element input
const $ = document.querySelector.bind(document);
const inputName = $('#input-name');
const inputBirth = $('#input-birth');
const inputPhone = $('#input-numberphone');
const inputAddress = $('#input-address');
const inputLink = $('#input-link');
const inputExper = $('#input-exper');
const form_recruitment = document.querySelector('.form-recruitment');
const arrInput = [inputName, inputBirth, inputPhone, inputAddress, inputLink, inputExper];

// Xử lý sự kiện khi người dùng focus vào các thẻ input
arrInput.forEach((self) => {
    self.addEventListener('focus', userFocus(self));
});

// input - fullName
inputName.addEventListener('blur', checkNameBlur);

// input - birth
inputBirth.addEventListener('blur', checkBirthBlur);

// input - numberphone
inputPhone.addEventListener('blur', checkPhoneBlur);

//input - address
inputAddress.addEventListener('blur', checkAddressBlur);

//input - link
inputLink.addEventListener('blur', checkLinkBlur);

//input - exper
inputExper.addEventListener('blur', checkExperBlur);

// Xử lý khi người dùng submit form
form_recruitment.addEventListener('submit', (e) => {
    let check;
    checkNameBlur();
    checkBirthBlur();
    checkPhoneBlur();
    checkAddressBlur();
    checkLinkBlur();
    checkExperBlur();
    for(let i=0; i<arrInput.length;i++){
        let messNode = arrInput[i].nextElementSibling;
        check = messNode.classList.contains('hide');
        if(check === false){
            break;
        }
    }
    if(check===true){
        e.target.submit();
    }
    else{
        e.preventDefault();
    }
});



