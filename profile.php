<?php
session_start();
require_once 'config.php';
$pdo = connectDB();

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$pdo = connectDB();
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Profil de <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?></h1>

        <div class="profile-info">
            <p><strong>Nom :</strong> <?php echo htmlspecialchars($user['nom']); ?></p>
            <p><strong>Prénom :</strong> <?php echo htmlspecialchars($user['prenom']); ?></p>
            <p><strong>Email :</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>Membre depuis :</strong> <?php echo date('d/m/Y', strtotime($user['created_at'])); ?></p>
        </div>

        <div class="actions">
            <a href="logout.php" class="button">Se déconnecter</a>
        </div>
    </div>
</body>
</html>