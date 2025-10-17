<?php 
$banner_title = "404 Not Found";
require basePath("/views/partials/head.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div class="text-2xl font-bold">Sorry, No Page Found</div>
        <a href="/" class="text-blue-400 hover:underline">
            Go Back Home
        </a>
    </div>
</main>

<?php require basePath("/views/partials/footer.php"); ?>