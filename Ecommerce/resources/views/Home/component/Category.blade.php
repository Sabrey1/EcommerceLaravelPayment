<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="mt-20">
        <div class="text-center">
            <p class="mt-4 bg-yellow-300 inline-block py-1 px-3 mb-4 rounded-full font-bold">Browse by Category</p>
            <p class="text-6xl mt-2 font-bold ">Shop by Room</p>
            <p class="mt-4">Find the perfect pieces to complete any space in your home.</p>
        </div>
        <div class="grid grid-cols-4 mt-10 gap-2">
            <div class="relative Card w-full h-64">
                <a href="{{route('shop')}}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5UtekBF2OHTxfnDj4RuFNOtcDHHysCq8o7g&s" class="img1 w-full h-full object-cover rounded-lg" alt="">
                    <div class="absolute bottom-1 left-4 text-white p-2">
                    <p class="font-bold">Hello</p>
                    <p>20 Product</p>
                </div>
                </a>
                
            </div>
            <div class="relative Card w-full h-64">
                <a href="{{route('shop')}}">
                    <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/14235/production/_100058428_mediaitem100058424.jpg" class="w-full h-full img1 object-cover rounded-lg" alt="">
                    <div class="absolute bottom-1 left-4 text-white p-2">
                    <p class="font-bold">Hello</p>
                    <p>20 Product</p>
                </div>
                </a>
            </div>
            <div class="relative w-full Card h-64">
                <a href="{{route('shop')}}">
                    <img src="https://img.freepik.com/free-photo/nature-landscape-with-hand-holding-frame_23-2149389976.jpg?semt=ais_hybrid&w=740&q=80" class="w-full h-full img1 object-cover rounded-lg" alt="">
                    <div class="absolute bottom-1 left-4 text-white p-2">
                        <p class="font-bold">Hello</p>
                        <p>20 Product</p>
                    </div>
                </a> 
            </div>
            <div class="relative w-full Card h-64">
                <a href="{{route('shop')}}">
                   <img src="https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png" class="w-full h-full object-cover rounded-lg img1" alt="">
                    <div class="absolute bottom-1 left-4 text-white p-2">
                        <p class="font-bold">Hello</p>
                        <p>20 Product</p>
                    </div> 
                </a>
            </div>
        </div>
    </div>
</body>
</html>