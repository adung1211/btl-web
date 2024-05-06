<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    require_once '../script/function.php';
    $notifications = getNotificationsByUserId($_SESSION['userid']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body style="background-color: #ececec;">

    <?php include "../components/header.php" ?>
    <div class="container">
        <div class="mt-4 bg-white rounded p-4 border border-gray">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Your Notifications</h1>
                <a href="../components/mark_all_read.php" class="btn btn-primary">Mark all as read</a>
            </div>
            <div style="max-height: 700px; overflow-y: auto;" class="px-3">
                <?php
                    foreach ($notifications as $notification) {
                        ?>
                            <div class="<?php echo $notification['read_status'] == 0 ? 'alert alert-primary' : 'alert alert-light'; ?> p-2 mb-3 row align-items-center">
                                <div class="col-1">
                                    <?php echo (new DateTime($notification['created_at']))->format('m/d/Y h:i A'); ?>
                                </div>
                                <div class="col-9"> 
                                    <h5><?php echo $notification['title']; ?></h5>
                                    <p><?php echo $notification['msg']; ?></p>
                                </div>
                                <div class="col-2 text-end">
                                    <?php if ($notification['read_status'] == 0): ?>
                                        <a href="../components/mark_read.php?id=<?php echo $notification['id']; ?>" class="btn btn-primary">Mark as read</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

</body>
</html>