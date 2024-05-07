<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS-Store | Juaranya Hp Flagship Murah</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
    <div class="bg-white text-gray-900">
        <header class="relative inset-x-0 top-0 z-50 border-b ">
            <nav class="bg-white flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="?" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <h3 class="text-gray-900 text-lg font-bold">Masoem Store</h3>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="?page=data_product" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-500 hover:transition-all ease-in-out">Produk</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900 hover:text-blue-500 hover:transition-all ease-in-out">Transaksi</a>
                </div>
                <div class="lg:flex lg:flex-row lg:flex-1 lg:justify-end">
                    <div class="flex-col">
                        <p class="text-gray-900 text-sm font-semibold ">Alvin Noval Mazzaky - 20231020027</p>
                        <p class="text-gray-900 text-sm font-semibold ">Rifqi Aqila Ma'soem - 20231020027</p>
                    </div>
                </div>
            </nav>
        </header>
        <div>
            <?php
            if (isset($_GET['page'])) {
                $pages = $_GET['page'];
                switch ($pages) {
                    case 'data_product':
                        include "./pages/product/product.php";
                        break;
                }
            } else {
                include "./pages/dashboard.php";
            }
            ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>