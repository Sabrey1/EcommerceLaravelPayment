<x-app-layout>
    <div class="h-screen w-full flex items-center justify-center ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <div class="p-6 text-gray-900 dark:text-gray-100 ">
                        <div class="grid grid-cols-2 gap-4">
                            <div class=" ">
                                <div class="rounded-full bg-amber-100 inline-block p-2 mb-3">
                                    <p class="text-yellow-500 font-semibold">New Collection 2026</p>
                                </div>
                                <p class="text-6xl font-bold mb-3">
                                    Elevate Your <br> <span class="text-yellow-500">Living Space</span>
                                </p>
                                <p>Discover our curated collection of luxury home essentials. Crafted with precision, designed for elegance.</p>
                                <div class="mb-10">
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mt-4">
                                        Shop Now
                                    </button>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mt-4">
                                        Explore Categories
                                    </button>
                                </div>
                                <div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div>
                                            <p class="text-2xl font-bold">
                                                200+
                                            </p>
                                            <p>Premium Products</p>
                                        </div>
                                        <div>
                                            <p class="text-2xl font-bold">
                                                15k+
                                            </p>
                                            <p>Happy Customers</p>
                                        </div>
                                        <div>
                                            <p class="text-2xl font-bold">
                                                4.9
                                            </p>
                                            <p>Average Rating</p>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-[100%]">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUp36dgcf5MiJPUfyGhVWUlgVK_SbgeJ3fzA&s" alt="sofa" class="w-full">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    @include('Home.component.insure')
                </div>
                <div>
                    @include('Home.component.FeaturedCollection')
                </div>
        </div>
    </div>
</x-app-layout>
