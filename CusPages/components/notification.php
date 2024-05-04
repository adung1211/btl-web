<?php
    require_once '../script/function.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $notifications = getNotificationsByUserId($_SESSION['userid']);
    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style/bootstrap.min.css" rel="stylesheet">
        <script src="../script/bootstrap.bundle.min.js"></script>
        <script src="../script/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>
    <body>
        <a href="../pages/notifications.php" id="notificationButton" class=" me-4">
            <i class="fas fa-bell text-white fa-lg"></i>
        </a>
    </body>
    <script>
    function check_notification(){
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                const data = JSON.parse(this.responseText);
                if (data.unreadCount > 0) {
                    if ($('#notificationBadge').length === 0) {
                        const badgeHtml = `
                            <div id="notificationBadge" class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger border border-light mt-4">
                                <div id="unreadCount"> ${data.unreadCount} </div>
                            </div>`;
                        $('#notificationButton').append(badgeHtml);
                    }
                    else {
                        document.getElementById('unreadCount').innerText = data.unreadCount;
                    }
                } else {
                    $('#notificationBadge').remove();
                }
            }
        };
        xhttp.open('GET', '../components/check_notifications.php', true);
        xhttp.send();
        setInterval(() => {
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const data = JSON.parse(this.responseText);
                    if (data.unreadCount > 0) {
                        if ($('#notificationBadge').length === 0) {
                            const badgeHtml = `
                                <span id="notificationBadge" class="position-absolute top-0 start-90 translate-middle badge rounded-pill bg-danger border border-light mt-4">
                                    <span id="unreadCount"> ${data.unreadCount} </span>
                                </span>`;
                            $('#notificationButton').append(badgeHtml);
                        }
                        else {
                            document.getElementById('unreadCount').innerText = data.unreadCount;
                        }
                    } else {
                        $('#notificationBadge').remove();
                    }
                }
            };
            xhttp.open('GET', '../components/check_notifications.php', true);
            xhttp.send();
            
        }, 1000);
        
    }
    check_notification();
    </script>
</html>