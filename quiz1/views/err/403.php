<?php 

$banner_title = "403 Unauthorized Access";
require basePath("/views/partials/head.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div class="text-2xl font-bold">You got no access upon this content contact your administrator</div>
        <a href="/" class="text-blue-400 hover:underline">
            Go Back Home
        </a>
    </div>
</main>

<?php require basePath("/views/partials/footer.php"); ?>