<?= $renderer->render('header', ['title' => $slug]) ?>

    <h1>Bienvenue sur l'article <?= $slug; ?></h1>

    <ul>
        <li><a href="<?= $router->generateUri('blog.show', ['slug' => 'a9df-98ef-987c-c12e']); ?>">Article 1</a></li>
        <li>Article N°*</li>
        <li>Article N°*</li>
        <li>Article N°*</li>
        <li>Article N°*</li>
        <li>Article N°*</li>
    </ul>

<?= $renderer->render('footer') ?>