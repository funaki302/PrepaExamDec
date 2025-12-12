<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - E-commerce</title>
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <script src="/assets/js/bootstrap/bootstrap.bundle.js" nonce="<?= htmlspecialchars($csp_nonce) ?>"></script>
</head>
<body>
    <?php include ("inc/header.php"); ?>

    <main class="container">
        <h1>Bienvenue sur notre boutique</h1>
        <section class="product-list">
            <?php foreach($products as $p){ ?>
                <article class="product-card">
                    <img src="/images/<?= $p['p_image'] ?>" alt="<?= $p['p_name'] ?>">
                    <div class="details">
                        <div class="d-flex justify-content-end gap-3 align-items-center px-3 py-2">
                            <a href="product/show-<?= $p['id'] ?>"><i class="bi bi-eye-fill text-dark"></i></a>
                            <a href="/update-<?=  $p['id'] ?>"><i class="bi bi-pencil-fill text-dark"></i></a>
                            <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $p['id'] ?>">
                                <i class="bi bi-trash3-fill text-danger"></i>
                            </button>
                        </div>
                        <h2><?= $p['p_name'] ?></h2>
                        <p>Prix : <?= number_format($p['p_price'], 0, ',', ' ') ?> Ar</p>                    
                    </div>
                </article>

                <div class="modal fade" id="deleteModal<?= $p['id'] ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $p['id'] ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel<?= $p['id'] ?>">Confirmer la suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer le produit <strong><?= htmlspecialchars($p['p_name']) ?></strong> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <a href="/product/delete-<?= $p['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                    </div>
                </div>
                </div>

            <?php } ?>
        </section>
    </main>

    <?php include ("inc/footer.php"); ?>
</body>
</html>

