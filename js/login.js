// Chọn các element input
const $ = document.querySelector.bind(document);
const username = $('#input-username');
const password = $('#input-password');
const userIcon = $('.user-icon');
const passIcon = $('.pass-icon');
const formLogin = $('.form-login');

// Tạo mảng
const arrInput = [username, password];

// Hàm này đặc biệt hơn userFocus đã có, chỉ focus dành riêng cho mảng arrInput phía trên
var userFocus2 = (inputNode, iconNode) => {
    inputNode.addEventListener('keydown', (e) => {
        let messNode = e.target.nextElementSibling;
        messNode.textContent = '';
        inputNode.style.border = '2px solid rgb(4, 171, 226)';
        messNode.classList.add('hide');
        iconNode.style.color = 'grey';
    });
}

// Gọi hàm
userFocus2(username,userIcon);
userFocus2(password, passIcon);

// Hàm xử lý khi người dùng blur ra khỏi thẻ username
var checkUserBlur = () => {
    if(username.value === ''){
        errorMessage(username, 'Tên người dùng không hợp lệ');
        userIcon.style.color = 'red';
    }
    else{
        successMessage(username);
        userIcon.style.color = 'green';
    }
}

// Hàm xử lý khi người dùng blur ra khỏi thẻ password
var checkPassBlur = () => {
    if(password.value === ''){
        errorMessage(password, 'Mật khẩu không thể để trống');
        passIcon.style.color = 'red';
    }
    else if(!validatePass(password.value)){
        errorMessage(password, 'Mật khẩu không hợp lệ');
        passIcon.style.color = 'red';
    }
    else if(validatePass(password.value)){
        successMessage(password);
        passIcon.style.color = 'green';
    }
    else{
        successMessage(password);
        passIcon.style.color = 'green';
    }
}
// Gọi hàm
username.addEventListener('blur', checkUserBlur);
password.addEventListener('blur', checkPassBlur);

// Xử lý khi người dùng submit form
formLogin.addEventListener('submit', (e) => {
   let check;
   checkUserBlur();
   checkPassBlur();
   for(let i=0; i< arrInput.length; i++){
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
