<?php
$page = @$_GET["page"];

if ($page == 'booking') {
    include "page/booking.php";
} elseif ($page == 'login') {
    include "login.php";
} else {
    echo '
        <div>
        <form action="?page=login" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input id="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
    ';
}
?>

