<x-app-layout>
    <div class="py-[100px]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center mt-5">
                        <p class="bg-yellow-300 inline-block py-1 px-5 rounded-full font-bold">Browse Collection</p>
                        <p class="text-5xl font-bold py-4">Shop by Category</p>
                        <p>Explore our curated collections for every room in your home</p>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-4 mt-10 gap-2">
                        <div class="relative Card w-full h-64">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5UtekBF2OHTxfnDj4RuFNOtcDHHysCq8o7g&s" class="img1 w-full h-full object-cover rounded-lg" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>
                        <div class="relative Card w-full h-64">
                            <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/14235/production/_100058428_mediaitem100058424.jpg" class="w-full h-full img1 object-cover rounded-lg" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>
                        <div class="relative w-full Card h-64">
                            <img src="https://img.freepik.com/free-photo/nature-landscape-with-hand-holding-frame_23-2149389976.jpg?semt=ais_hybrid&w=740&q=80" class="w-full h-full img1 object-cover rounded-lg" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>
                        <div class="relative w-full Card h-64">
                            <img src="https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png" class="w-full h-full object-cover rounded-lg img1" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>
                        <div class="relative w-full Card h-64">
                            <img src="https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png" class="w-full h-full object-cover rounded-lg img1" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>
                        <div class="relative w-full Card h-64">
                            <img src="https://cdn.pixabay.com/photo/2018/08/04/11/30/draw-3583548_1280.png" class="w-full h-full object-cover rounded-lg img1" alt="">
                            <div class="absolute bottom-1 left-4 text-white p-2">
                                <p class="font-bold">Hello</p>
                                <p>20 Product</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('layouts.Footer')
    </div>
</x-app-layout>
