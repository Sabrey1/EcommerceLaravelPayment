<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body>
    <div class="grid grid-cols-4 gap-4">
        <div class="flex items-center gap-4">
            <div class="bg-amber-100 rounded-full w-20 h-20 flex items-center justify-center">
                <i class="bi bi-truck text-4xl text-blue-600 "></i>
            </div>
            <!-- Text -->
            <div>
                <span class="font-bold text-xl">Free Shipping</span><br>
                <span class="text-sm text-gray-600">On orders over $100</span>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <div class="bg-amber-100 rounded-full w-20 h-20 flex items-center justify-center">
                <i class="bi bi-shield-check text-4xl text-blue-600 " ></i>
            </div>
            <div>
                <span class="font-bold text-xl">Free Shipping</span><br>
                <span>On orders over $100</span>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="bg-amber-100 rounded-full w-20 h-20 flex items-center justify-center">
                <i class="bi bi-arrow-repeat text-4xl text-blue-600 "></i> 
            </div>
            <div>
                <span class="font-bold text-xl">Free Shipping</span><br>
                <span>On orders over $100</span>
            </div>        
        </div>
        <div class="flex items-center gap-4">
            <div class="bg-amber-100 rounded-full w-20 h-20 flex items-center justify-center">
                <i class="bi bi-headphones text-4xl text-blue-600 "></i> 
            </div>
            <div>
                <span class="font-bold text-xl">Free Shipping</span><br>
                <span>On orders over $100</span>
            </div>  
        </div>
    </div>
</body>
</html>