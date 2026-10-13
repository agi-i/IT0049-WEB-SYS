<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks - Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?= view('nav') ?>
    <div class="container">
        <div class="card shadow-sm p-4 bg-white">
            <h2 class="mb-3 text-primary">Full Task List</h2>
            <p class="text-muted">Showing all recorded tasks ordered by date.</p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Task Date</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($tasks)): ?>
                            <?php foreach ($tasks as $task): ?>
                                <tr>
                                    <td><?= esc($task['id']) ?></td>
                                    <td><?= esc($task['title']) ?></td>
                                    <td>
                                        <span class="badge bg-<?= $task['status'] == 'completed' ? 'success' : 'warning' ?>">
                                            <?= esc($task['status']) ?>
                                        </span>
                                    </td>
                                    <td><?= esc($task['task_date']) ?></td>
                                    <td><?= esc($task['created_at']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="5" class="text-center">No tasks found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>