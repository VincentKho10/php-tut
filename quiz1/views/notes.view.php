<?php

require "partials/head.php";
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <ul>
            <?php foreach ($notes as $note): ?>
                <a href="/note?id=<?= $note['idnotes']; ?>">
                    <li class="text-blue-300 hover:underline"><?= $note["body"] ?></li>
                </a>
            <?php endforeach; ?>

        </ul>
    </div>
</main>
<?php
require "partials/footer.php";
