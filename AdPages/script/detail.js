function handledStatus(id, uid, status){
    let isConfirmed = confirm('Are you sure you want to change status of this order ?');

    if (isConfirmed == false){
        return;
    }

    if (status == "Processing"){
        title = "Đơn hàng đã được xác nhận";
        msg = "Shop đã nhận được đơn đặt hàng và đang đưa tới bạn trong thời gian sớm nhất";
    }
    else if (status == "Shipped"){
        title = "Đơn hàng đã được giao thanh công";
        msg = "Cảm ơn quý khách đã tin tưởng mua hàng tại website chúng tôi";
    }
    else{
        title = "Đơn hàng đã bị huỷ";
        msg = "Rất tiếc đơn hàng của bạn đã bị huỷ";
    }

    $.ajax({
        url: '../script/status.php', 
        method: 'GET', 
        data: { id: id, uid: uid, status: status, title: title, msg: msg}, // Parameters to be passed
        success: function() {
            location.reload();
        }
    });
}