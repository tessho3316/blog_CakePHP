<h2>記事一覧</h2>

<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <?php
            debug($post);
            ?>
        </li>
    <?php endforeach; ?>
</ul>