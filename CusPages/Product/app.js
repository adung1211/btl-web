// JavaScript code
function sortAZ() {
    var products = document.querySelectorAll('.product-card');
    var productInfor = [];
    var needSortProductName = [];
    if(products) {
       for(var i = 0; i < products.length; i++) {
            var infor = [];
            infor[0] = products[i].querySelector('h5').innerText;
            needSortProductName.push(infor[0]);
            infor[1] = products[i].querySelector('img').getAttribute('src');
            infor[2] = products[i].querySelector('.category').innerText;
            infor[3] = products[i].querySelector('.price').innerText;
            productInfor.push(infor);
       }
    }

    //Sort
    var sortedProductName = needSortProductName.sort();
    var newProductInfor = [];
    for(var i = 0; i < sortedProductName.length; i++) {
        for(var j = 0; j < sortedProductName.length; j++) {
            if(sortedProductName[i] == productInfor[j][0]) {
                var infor = productInfor[j];
                newProductInfor.push(infor);
                break;
            }  
        } 
    }
    render(newProductInfor);
}

function render(productsInfor) {
    console.log(productsInfor);
    const container = document.querySelector('.row');
    container.innerHTML = '';
    for(var i = 0; i < productsInfor.length; i++){
        container.innerHTML += `
            <div class="col-md-3 mb-4">
            <div class="card product-card">
            <img src=${productsInfor[i][1]} class="card-img-top" alt="Product Image">
            <div class="card-body">
                <h5 class="card-title">${productsInfor[i][0]}</h5>
                <p class="card-text category">${productsInfor[i][2]}</p>
                <p class="card-text price">${productsInfor[i][3]}</p>
            </div>
            </div>
        </div>
        `;
        console.log(i);
    } 

}