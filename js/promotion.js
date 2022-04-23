// Render data
var renderDiscount = () => {
    const discountParent = document.querySelector('.discount__content');
    discountParent.innerHTML = '';
    dataDiscount.forEach((self, index) => {
        discountParent.innerHTML += `
            <article class="col-12 col-md-6 col-lg-4">
                <div class="discount-ck discount-ck--${index+1}">
                    <img src=${self["ds-img"]} alt="" class="discount-ck__img">
                    <h1 class="discount-ck__name">${self["ds-name"]}</h1>
                    <p class="discount-ck__money">${formatCash(`${self["ds-money"]}`)} <sup>VNĐ</sup> </p>
                    <button class="btn btn--discount">Mua ngay</button>
                    <span class="discount-ck__percent">${self["ds-percent"]}</span>
                </div>
            </article>
        `;
    })
}   

// renderDiscount(); 
// Đã render bằng PHP

// Hàm tính tiền giảm giá
var foodDiscount = (moneyFood, percentFood) => {
    let convert = Number(percentFood.slice(0,percentFood.length-1));
    let result = (convert * moneyFood) / 100;
    return moneyFood - result;
}

// Mảng các button món ăn được giảm giá
const arrBtnFoodDiscount =  $('.btn--discount');
arrBtnFoodDiscount.each(function(index){
    $(this).click(function(){
        let nameFood = dataDiscount[index]["ds-name"];
        let moneyFood = dataDiscount[index]["ds-money"];
        let percentFood = dataDiscount[index]["ds-percent"];
        let moneyFoodDiscount = foodDiscount(moneyFood, percentFood);
        // Thêm món ăn vào giỏ hàng
        addFoodInCart(nameFood, moneyFoodDiscount);
    });
});
