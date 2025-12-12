<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product - E-commerce</title>
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <script src="/assets/js/bootstrap/bootstrap.bundle.js" nonce="<?= htmlspecialchars($csp_nonce) ?>"></script>
</head>
<body>
    <?php include("inc/header.php"); ?>

    <main class="container form">
        <h1>Modifier Produit</h1>
        <form action="/product/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">

            <div>
                <label for="name">Nom :</label>
                <input type="text" name="p_name" id="p_name" value="<?= htmlspecialchars($product['p_name']) ?>" required>
            </div>
            <div>
                <label for="price">Prix :</label>
                <input type="number" name="p_price" id="p_price" value="<?= htmlspecialchars($product['p_price']) ?>" required>
            </div>
            <div>
                <label for="description">Description :</label>
                <textarea name="p_description" id="p_description" rows="4"><?= htmlspecialchars($product['p_description']) ?></textarea>
            </div>
            <div>
                <label for="p_image">Image :</label>
                <input type="file" name="p_image" id="p_image" accept="image/*">
            </div>
            <button type="submit">Mettre à jour</button>
        </form>
    </main>

    <?php include("inc/footer.php"); ?>
</body>
</html>
