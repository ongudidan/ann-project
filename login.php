<?php
include('components/head.php');
include('components/navbar.php');

?>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Submitted Form Data</h4>
        </div>
        <div class="card-body">
            <?php
            // Assuming form submission with POST method
            $email = $_POST['email'] ?? 'N/A';
            $password = $_POST['password'] ?? 'N/A';
            $phone = $_POST['phone'] ?? 'N/A';
            ?>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Email:</strong> <?php echo htmlspecialchars($email); ?>
                </li>
                <li class="list-group-item">
                    <strong>Password:</strong> <?php echo htmlspecialchars($password); ?>
                </li>
                <li class="list-group-item">
                    <strong>Phone Number:</strong> <?php echo htmlspecialchars($phone); ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include('components/footer.php');
?>