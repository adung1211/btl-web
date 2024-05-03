let PriceNotComma = -1;

function Show(num){
    for (var i = 0; i < 2; i++){
        if (num != i){
            let temp = "#P" + i;
            $(temp).hide()
        }
        else{
            let temp = "#P" + num;
            $(temp).show()
        }
    }
}
Show('1')

function handleDel(id){
    let isConfirmed = confirm('Are you sure you want to delete this item?');

    if (isConfirmed == false){
        return
    }

    $.ajax({
        url: '../script/del.php', 
        method: 'GET', 
        data: { id: id, }, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}

function handleAdd(){
    let Name = document.querySelector("#Name").value;
    let Cate = document.querySelector("#Cate").value;
    let Img = document.querySelector("#Img").value;
    let Price = PriceNotComma;
    let Manuf = document.querySelector("#Manuf").value;
    let Warrant = document.querySelector("#Warrant").value + " tháng";
    let Desc = document.querySelector("#Desc").value;


    if (Name.length == 0 || Cate.length == 0 || Img.length == 0 || Price == -1){
        alert("Please fill all blank");
        return;
    }

    $.ajax({
        url: '../script/add.php', 
        method: 'GET', 
        data: { Name: Name, Cate: Cate, Img: Img, Price: Price, Manuf: Manuf, Warrant: Warrant, Desc: Desc}, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}


// Price formfill auto seperate after 3 digits
document.querySelector('#Price').addEventListener('input', function(event) {
    PriceNotComma = -1;
    let value = event.target.value.replace(/[^\d]/g, '');
    event.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");;

    if (value.length > 0){
        PriceNotComma = parseInt(value, 10);
    }
});


let ID;
function handleEdit(id, name, category, img, price, manufacturer, warrant, description){
    $("#Name1").val(name);
    $('#Cate1').val(category);
    $("#Img1").val(img);
    $("#Price1").val(price.replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    PriceNotComma = parseInt(price, 10);
    $("#Manuf1").val(manufacturer);
    $("#Warrant1").val(warrant.replace(/[^\d]/g, ''));
    // $("#Desc1").val(description);

    ID = id;
}

function handleEdit1(){
    let Name = document.querySelector("#Name1").value;
    let Cate = document.querySelector("#Cate1").value;
    let Img = document.querySelector("#Img1").value;
    let Price = PriceNotComma;
    let Manuf = document.querySelector("#Manuf1").value;
    let Warrant = document.querySelector("#Warrant1").value + " tháng";
    let Desc = document.querySelector("#Desc1").value;


    if (Name.length == 0 || Cate.length == 0 || Img.length == 0 || Price == -1){
        alert("Please fill all blank");
        return;
    }

    $.ajax({
        url: '../script/edit.php', 
        method: 'GET', 
        data: { id: ID, Name: Name, Cate: Cate, Img: Img, Price: Price, Manuf: Manuf, Warrant: Warrant, Desc: Desc}, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}

document.querySelector('#Price1').addEventListener('input', function(event) {
    PriceNotComma = -1;
    let value = event.target.value.replace(/[^\d]/g, '');
    event.target.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");;

    if (value.length > 0){
        PriceNotComma = parseInt(value, 10);
    }
});
