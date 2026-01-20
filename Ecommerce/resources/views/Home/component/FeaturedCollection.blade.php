<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
</head>
<body>
    <div class="text-center mt-5">
        <p class="text-1xl font-bold text-yellow-500 bg-yellow-100 px-5 py-1 inline-block rounded-full ">Feature Collection</p>
        <p class="text-6xl mt-4 font-bold">Curated for You</p>
        <p class="mt-4 text-xl">Hand-picked pieces that blend timeless elegance with modern sophistication.</p>
    </div>
    <div class="grid grid-cols-4 mt-10">
        <div class="Card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlndpwDalSNF8TzBG6T7kGv73l0IOReNJpKw&s" class="w-full img" alt="">
            <div class="grid grid-cols-2">
                <div class="p-3">
              <p>Name</p>
              <p>Description</p>
              <p>$300 <s>$500</s></p>
            </div>
            <div>
                ss
            </div>
            </div>
            
        </div>
        <div class="Card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlndpwDalSNF8TzBG6T7kGv73l0IOReNJpKw&s" class="w-full img" alt="">
            <div class="p-3">
                <p>Name</p>
              <p>Description</p>
              <p>$300</p>
            </div>  
        </div>
        <div class="Card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlndpwDalSNF8TzBG6T7kGv73l0IOReNJpKw&s" class="w-full img" alt="">
            <div class="p-3">
               <p>Name</p>
              <p>Description</p> 
              <p>$300 </p>
            </div> 
        </div>
        <div class="Card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlndpwDalSNF8TzBG6T7kGv73l0IOReNJpKw&s" class="w-full img" alt="">
            <div class="p-3">
               <p>Name</p>
              <p>Description</p>
               <p>$300 </p>
            </div>
        </div>
    </div>
    <div class="text-center mt-10">
        <a href="{{route('shop')}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mt-4">
            View All Product
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</body>
</html>