<?php session_start(); ?>
<!-- header section -->
<header class="header">
    <div class="title" onclick="window.location.href='/bus-ticketing/view'">MahaBus</div>

    <?php if($_SESSION && $_SESSION['loggedin']==true) { ?>
        <div class="buttons">
            <span class="username">Hi, <?php echo $_SESSION['username']; ?>!</span>
            <span class="booking-history-txt" onclick="window.location.href='./bookings.php'">Booking history</span>
            <button onclick="window.location.href='./../backend/logout.php'">Log out</button>
        </div>
    <?php } else { ?>
        <div class="buttons">
            <button onclick="window.location.href='login.php'">Login</button>
            <button onclick="window.location.href='signup.php'">Sign Up</button>
        </div>
    <?php } ?>
</header>