<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['p_name']) ?> - E-commerce</title>
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <script src="/assets/js/bootstrap/bootstrap.bundle.js" nonce="<?= htmlspecialchars($csp_nonce) ?>"></script>
</head>
<body>
    <?php include ("inc/header.php"); ?>

    <main class="container">
        <section class="product-detail">
            <img src="/images/<?= htmlspecialchars($product['p_image']) ?>" height="300" 
                 alt="<?= htmlspecialchars($product['p_name']) ?>">

            <div class="info">
                <h1><?= htmlspecialchars($product['p_name']) ?></h1>

                <p><?= htmlspecialchars($product['p_description']) ?></p>

                <p><strong>Prix :</strong> 
                    <?= number_format($product['p_price'], 0, ',', ' ') ?> Ar
                </p>
            </div>
        </section>
    </main>
    
    <?php include ("inc/footer.php"); ?>
</body>
</html>
