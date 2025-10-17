<?php

require basePath("/views/partials/head.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div class="flex flex-row justify-between">
            <p><?= $note["body"] ?></p>
            <form action="" method="POST">
                <input type="hidden" name="delete_id" value="<?= $note["idnotes"] ?>">
                <button type="submit" class="px-4 py-2 bg-red-300 rounded">Delete</button>
            </form>
        </div>
        <a href="/notes" class="text-blue-300 hover:underline">Go Back</a>
    </div>
</main>
<?php
require basePath("/views/partials/footer.php");
