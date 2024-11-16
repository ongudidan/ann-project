<?php
include('components/head.php');
include('components/navbar.php');

?>



<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">SUM</h3>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter your phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>


        <div class="mt-3 text-center">
            <p class="mb-0">Don't have an account? <a href="#">Sign up</a></p>
        </div>
    </div>
</div>

<?php
include('components/footer.php');
?>

<?php

if (isset($_POST['submit'])) {
    $number = $_POST['number1'];
}

?>