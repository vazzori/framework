<div class="container ">
    <?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
            <div class="card mb-3">
                <div class="card-header"><?= $post['name'] ?></div>
                <div class="card-body">
                    <h5 class="card-title"><?= $post['id']?></h5>
                    <p class="card-text"><?= $post['slug'] ?></p>
                </div>
            </div>
    <?php endforeach; ?>
    <?php endif;?>
</div>
