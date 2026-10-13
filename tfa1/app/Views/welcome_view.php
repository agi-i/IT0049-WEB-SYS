<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome - Tasks For Today</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?= view('nav') ?>
    <div class="container">
        <div class="card shadow-sm p-4 bg-white">
            <h2 class="mb-3 text-primary">Today's Tasks</h2>
            <p class="text-muted">Showing tasks scheduled for: <strong><?= esc($today) ?></strong></p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
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
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="4" class="text-center">No tasks scheduled for today.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>