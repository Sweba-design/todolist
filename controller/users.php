<?php
$pdo = getDb();

$sql = "select * from users";
$result = $pdo->query($sql);
$users = $result->fetchAll(PDO::FETCH_ASSOC);

renderView('users', 'admin', compact('users'));

