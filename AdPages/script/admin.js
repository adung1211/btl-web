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

    if (Name.length == 0 || Cate.length == 0 || Img.length == 0){
        alert("Please fill all information");
        return;
    }

    $.ajax({
        url: '../script/add.php', 
        method: 'GET', 
        data: { Name: Name, Cate: Cate, Img: Img}, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}