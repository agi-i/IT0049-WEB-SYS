<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?= view('nav') ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm p-4 bg-white">
                    <h2 class="mb-3 text-primary">Demo User Profile</h2>
                    <?php if (!empty($user)): ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Username:</strong> <?= esc($user['username']) ?></li>
                            <li class="list-group-item"><strong>Full Name:</strong> <?= esc($user['full_name']) ?></li>
                            <li class="list-group-item"><strong>Email:</strong> <?= esc($user['email']) ?></li>
                            <li class="list-group-item"><strong>Member Since:</strong> <?= esc($user['created_at']) ?></li>
                        </ul>
                    <?php else: ?>
                        <p class="text-danger">No demo user record found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>