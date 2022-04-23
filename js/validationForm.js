// Điều kiện kiểm tra form
const regexNumber = /((09|03|07|08|05)+([0-9]{8})\b)/g;
const regexEmail = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
const regexPass = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/g;


// Tập các hàm xử lý ràng buộc form
var validatePhone = (myNumber) => {
    return regexNumber.test(myNumber);
}
var validateEmail = (myEmail) => {
    return regexEmail.test(myEmail);
}
var validatePass = (myPass) => {
    return regexPass.test(myPass);
}
var errorMessage = (inputNode, message) => {
    let messNode = inputNode.nextElementSibling;
    messNode.textContent = message;
    messNode.style.color = 'red';
    inputNode.style.border = '2px solid red';
    messNode.classList.remove('hide');
}
var successMessage = (inputNode) => {
    let messNode = inputNode.nextElementSibling;
    messNode.textContent = '';
    inputNode.style.border = '2px solid rgb(51, 204, 51)';
    messNode.classList.add('hide');
}
var checkNameBlur = () => {
    return (inputName.value==='') 
            ?errorMessage(inputName, 'Họ tên không thể để trống')
            :successMessage(inputName);
}
var checkBirthBlur = () => {
    return (inputBirth.value === '')
            ? errorMessage(inputBirth, 'Năm sinh không thể để trống')
            : successMessage(inputBirth);
}
var checkDeliveryBlur = () => {
    return (inputDelivery.value === '')
            ? errorMessage(inputDelivery, 'Địa chỉ giao hàng không thể để trống')
            : successMessage(inputDelivery);
}
var checkSelectBlur = () => {
    return (inputSelect.options[inputSelect.selectedIndex].text === 'Khu vực giao hàng')
            ? errorMessage(inputSelect, 'Khu vực giao hàng không thể để trống')
            : successMessage(inputSelect);
}
var checkPhoneBlur = () => {
    if(inputPhone.value === ''){
        errorMessage(inputPhone, 'Số điện thoại không được để trống');
    }
    else if(!validatePhone(inputPhone.value)){
        errorMessage(inputPhone, 'Số điện thoại không hợp lệ');
    }
    else if(validatePhone(inputPhone.value)){
        successMessage(inputPhone);
    }
    else{
        successMessage(inputPhone);
    }
}
var checkPassBlur = () => {
    if(password.value === ''){
        errorMessage(password, 'Mật khẩu không thể để trống');
        
    }
    else if(!validatePass(password.value)){
        errorMessage(password, 'Mật khẩu không hợp lệ');
        
    }
    else if(validatePass(password.value)){
        successMessage(password);
        
    }
    else{
        successMessage(password);
        
    }
}
var checkPassAgainBlur = () => {
    if(inputPassAgain.value === ''){
        errorMessage(inputPassAgain, 'Mật khẩu không thể để trống');
    }
    else if(password.value !== inputPassAgain.value){
        errorMessage(inputPassAgain, 'Mật khẩu nhập lại không khớp');
    }
    else{
        successMessage(inputPassAgain);
    }
}
var checkEmailBlur = () => {
    if(inputEmail.value === ''){
        errorMessage(inputEmail, 'Email không được bỏ trống');
    }
    else if(!validateEmail(inputEmail.value)){
        errorMessage(inputEmail, 'Địa chỉ Email không hợp lệ');
    }
    else if(validateEmail(inputEmail.value)){
        successMessage(inputEmail);
    }
    else{
        successMessage(inputEmail);
    }
}
var checkAddressBlur = () => {
    return (inputAddress.value === '')
            ? errorMessage(inputAddress, 'Địa chỉ không thể để trống')
            : successMessage(inputAddress);
}
var checkLinkBlur = () => {
    return (inputLink.value === '')
            ? errorMessage(inputLink, 'Link Facebook không thể để trống')
            : successMessage(inputLink);
}
var checkExperBlur = () => {
    return (inputExper.value === '')
            ? errorMessage(inputExper, 'Kinh nghiệm không thể để trống')
            : successMessage(inputExper);
}
var checkContentBlur = () => {
    return (inputContent.value === '')
            ? errorMessage(inputContent, 'Nội dung không thể để trống')
            : successMessage(inputContent);
}
var userFocus = (inputNode) => {
    inputNode.addEventListener('keydown', (e) => {
        let messNode = e.target.nextElementSibling;
        messNode.textContent = '';
        inputNode.style.border = '2px solid rgb(4, 171, 226)';
        messNode.classList.add('hide');
    });
}
var resetValueInput = () => {
    arrInput.forEach((self) => {
        self.value = '';
    });
}