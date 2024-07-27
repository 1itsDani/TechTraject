<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jaïr - Equipment</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="max-w-screen px-1">
    <div class="overflow-hidden">
        <svg viewBox="0 0 814 834" width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 z-0">
            <!-- SVG content here -->
        </svg>
    </div>

    <div class="absolute left-0 top-0 z-10 sm:z-50 w-full">
        <header class="container mx-auto mt-4">
            <?php
            include "includes/ui/menu.inc.php";
            ?>
        </header>
    </div>

    <div class="container mx-auto mt-32">
        <h1 class="text-center text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-black font-bold mb-8">Mijn Equipment</h1>
        <p class="text-xl text-center mb-8">
            Hier is een lijst van de apparatuur die ik gebruik voor mijn projecten en video's. Door deze links te gebruiken, ondersteun je mijn kanaal zonder extra kosten voor jou!
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Camera</h2>
    <a href="https://www.amazon.com/dp/B08QZTV7V4?tag=youraffiliatetag" target="_blank">
        <img src="https://example.com/path/to/camera_image.jpg" alt="Camera" class="mb-4">
        <p class="text-lg text-blue-600 underline">Koop nu op Amazon</p>
    </a>
</div>
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Microfoon</h2>
    <a href="https://www.amazon.com/dp/B07J9XCYZ6?tag=youraffiliatetag" target="_blank">
        <img src="https://example.com/path/to/microphone_image.jpg" alt="Microfoon" class="mb-4">
        <p class="text-lg text-blue-600 underline">Koop nu op Amazon</p>
    </a>
</div>
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Licht</h2>
    <a href="https://www.amazon.com/dp/B07B715Z33?tag=youraffiliatetag" target="_blank">
        <img src="https://example.com/path/to/light_image.jpg" alt="Licht" class="mb-4">
        <p class="text-lg text-blue-600 underline">Koop nu op Amazon</p>
    </a>
</div>

            <!-- Voeg meer items toe als nodig -->
        </div>
    </div>

    <script src="/assets/js/typewrite.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
