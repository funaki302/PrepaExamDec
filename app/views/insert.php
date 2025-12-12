<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product - E-commerce</title>
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <script src="/assets/js/bootstrap/bootstrap.bundle.js" nonce="<?= htmlspecialchars($csp_nonce) ?>"></script>
</head>
<body>
    <?php include("inc/header.php"); ?>

    <main class="container form">
        <h1>Ajouter un Produit</h1>
        <form action="/product/insert" method="POST" enctype="multipart/form-data">
            <div>
                <label for="p_name">Nom :</label>
                <input type="text" name="p_name" id="p_name" required>
            </div>
            <div>
                <label for="p_price">Prix :</label>
                <input type="number" name="p_price" id="p_price" required>
            </div>
            <div>
                <label for="p_description">Description :</label>
                <textarea name="p_description" id="p_description" rows="4"></textarea>
            </div>
            <div>
                <label for="p_image">Image :</label>
                <input type="file" name="p_image" id="p_image" accept="image/*">
            </div>
            <button type="submit">Ajouter</button>
        </form>
    </main>

    <?php include("inc/footer.php"); ?>
</body>
</html>
