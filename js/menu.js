// Chọn các loại menu
const headMenu = [...$('.types-menu > div')];

// Chọn các nút tròn để đánh dấu khi người dùng chọn lọai menu
const arrSpan = [...$("[class^='type-menu-']> span")];

// Chọn các menu chính
const arrBodyMenu = [...$("[class^='menu-body-']")];

// Mặc định ban đầu chấm tròn ở menu số 1
headMenu[0].style = 'background-color: red';

//Thêm class hide lên toàn bộ các element menu
arrBodyMenu.forEach((self, index) => {
    if (index !== 0) {
        self.classList.add('hide');
        arrSpan[index].classList.add('hide');
    }
});

// Duyệt menu và xử lý sự kiện(các hiệu ứng khi người dùng chọn sản phẩm)
headMenu.forEach((type, typeIndex) => {
    type.addEventListener('click', () => {
        arrBodyMenu[typeIndex].classList.toggle('hide');
        arrSpan[typeIndex].classList.toggle('hide');
        headMenu.forEach((self, index) => {
            if (typeIndex === index) {
                self.style = 'background-color: red';
            }
            else {
                self.style = 'background-color: #840906';
            }
        });
        let bodyMenuRest = arrBodyMenu.filter((self, index) => {
            if (index !== typeIndex) {
                return self;
            }
        });
        let spanRest = arrSpan.filter((self, index) => {
            if (index !== typeIndex) {
                return self;
            }
        });
        bodyMenuRest.forEach((self) => {
            self.classList.add('hide');
        })
        spanRest.forEach((self) => {
            self.classList.add('hide');
        })
    });
})

// Render Data
var renderMenu = (elementNode, dataMenu) => {
    const parentMenu = elementNode.firstElementChild;
    parentMenu.innerHTML = '';
    dataMenu.forEach((self) => {
        parentMenu.innerHTML += `
            <div class="col-12 col-lg-4 col-md-6">
                <article class="chicken-item">
                    <div class="chicken-head">
                        <img src=${self["ck-img"]} alt="" class="ck-img">
                    </div>
                    <div class="chicken-body">
                        <h1 class="ck-name">${self["ck-name"]}</h1>
                        <p class="ck-des">${self["ck-des"][0]}</p>
                        <p class="ck-des">${self["ck-des"][1]}</p>   
                        <p class="ck-des">${self["ck-des"][2]}</p>
                        <div class="payment">
                            <p class="payment__money">${formatCash(`${self["ck-money"]}`)} <sup>VNĐ</sup> </p>
                            <button class="btn btn--food">Mua liền</button>
                        </div>
                    </div>
                </article>
            </div>
        `;
    });
}
// Gọi hàm render để render qua html
// renderMenu(bodyMenu1, dataMenu1);
// renderMenu(bodyMenu2, dataMenu2);
// renderMenu(bodyMenu3, dataMenu3);
// renderMenu(bodyMenu4, dataMenu4);
// Đã render bằng PHP

// Mảng các button menu1
const arrBtnFoodMenu1 = [...$('.menu-body-1 .btn--food')];

// Mảng các button menu2
const arrBtnFoodMenu2 = [...$('.menu-body-2 .btn--food')];

// Mảng các button menu3
const arrBtnFoodMenu3 = [...$('.menu-body-3 .btn--food')];

// Mảng các button menu4
const arrBtnFoodMenu4 = [...$('.menu-body-4 .btn--food')];

// Hàm thêm sản phẩm vào giỏ hàng
var addFood = (arrBtnFoodMenu, dataMenu) => {
    arrBtnFoodMenu.forEach((btnFood, index) => {
        btnFood.addEventListener('click', () => {
            let nameFood = dataMenu[index]["ck-name"];
            let moneyFood = dataMenu[index]["ck-money"];
            addFoodInCart(nameFood, moneyFood);
        });
    });    
}

// Gọi hàm thêm sản phẩm
addFood(arrBtnFoodMenu1, dataMenu1);
addFood(arrBtnFoodMenu2, dataMenu2);
addFood(arrBtnFoodMenu3, dataMenu3);
addFood(arrBtnFoodMenu4, dataMenu4);
