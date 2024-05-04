function handledConfirm(id, uid){
    let isConfirmed = confirm('Are you sure you want to conform this order ?');

    if (isConfirmed == false){
        return
    }

    $.ajax({
        url: '../script/confirm.php', 
        method: 'GET', 
        data: { id: id, uid: uid}, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}