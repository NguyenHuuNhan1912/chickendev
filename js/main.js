// Get các element để xử lý
const $1 = document.querySelector.bind(document);
const callMe = $1('.callme');
const barIconNode = $1('.bars-icon');
const menuOther = $1('.nav-header-other');
const closeMenuOther = $1('.nav-close');
const overlayNode = $1('.overlay');
const bodyNode = $1('.body');
const callIcon = $1('.call-icon');

// Hàm chèn thêm dấu chấm ngăn cách vào giá tiền
var formatCash = (str) => {
    return str.split('').reverse().reduce((prev, next, index) => {
        return ((index % 3) ? next : (next + '.')) + prev
    })
}

// Lấy số lượng món ăn hoặc thứ uống từ localstor nếu tồn tại thì lấy số lượng còn không thì lấy 0
const countNode = $1(".count");
let cartCount = localStorage.getItem('cart-count') || 0;
countNode.textContent = cartCount;

// Xử lý menu responsive
overlayNode.addEventListener('click', () => {
    menuOther.classList.remove('show-menu-other');
    overlayNode.classList.remove('overlay--show');
})

barIconNode.addEventListener('click', () => {
    menuOther.classList.toggle('show-menu-other');
    overlayNode.classList.toggle('overlay--show');
})

closeMenuOther.addEventListener('click', () => {
    menuOther.classList.toggle('show-menu-other');
    overlayNode.classList.toggle('overlay--show');
})

//Xử lý sự kiện click của phần liên hệ
callMe.addEventListener('click', () => {
    swal(`0342040063 - 0944412303`, "Hãy gọi chúng tôi qua các số điện thoại trên", "info");
});

// Phần người dùng thả tym yêu thích cho trang web
const clickHeart = document.querySelector('.click-heart');
const showHeart = document.querySelector('.show-heart');

var count = localStorage.getItem('tym') || 0;
showHeart.textContent = count;

clickHeart.addEventListener('click', () => {
    count++;
    showHeart.textContent = count;
    localStorage.setItem('tym', count);
})


// Xử lý phần người dùng cuộn chuột để trở về header nhanh hơn
const backClick = $1('.btn--backtotop');
var userScroll = () => {
    window.addEventListener('scroll', () => {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            backClick.style.display = 'block';
        }
        else {
            backClick.style.display = 'none';
        }
    })
}

var userClick = () => {
    backClick.addEventListener('click', () => {
        backClick.style.animation = 'smoothBackUp 0.7s linear';
        setTimeout(() => {
            backClick.style.animation = 'smoothBack 2s linear';
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }, 700);
    });
}

userScroll();
userClick();

// Phần xử lý logout của trang web
const logoutNode = $1('.logout');
const logoutMenuNode = $1('.logout-menu');

if(logoutNode !== null){
    logoutNode.addEventListener('click', () =>{
        localStorage.removeItem('username');
        location.replace('./homepage.php?action=logout');
    });
}
if(logoutMenuNode !== null){
    logoutMenuNode.addEventListener('click', () =>{
        localStorage.removeItem('username');
    });
}