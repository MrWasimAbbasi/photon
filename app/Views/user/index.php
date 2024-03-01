<!-- /app/Views/user/index.php -->
<html>
<head><title>User List</title></head>
<body>
<h1>User List</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user['name'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
