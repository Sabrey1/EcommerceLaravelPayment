<x-app-layout>
    <section class="h-screen w-full flex items-center justify-center ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <div class="p-6 text-gray-900 dark:text-gray-100 ">
                        <div class="grid grid-cols-2 gap-4">
                            <div class=" ">
                                <div class="rounded-full bg-amber-100 inline-block p-2 mb-3">
                                    <p class="text-yellow-500 font-semibold">New Collection 2026</p>
                                </div>
                                <p class="text-7xl font-bold mb-3">
                                    Elevate Your <br> <span class="text-yellow-500">Living Space</span>
                                </p>
                                <p>Discover our curated collection of luxury home essentials. Crafted with precision, designed for elegance.</p>
                                <div class="mb-10 flex gap-4">
                                    <a href="{{route('shop')}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mt-4">
                                        Shop Now
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{route('category')}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded mt-4">
                                        Explore Categories
                                    </a>
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
                            <div >
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUp36dgcf5MiJPUfyGhVWUlgVK_SbgeJ3fzA&s" alt="sofa" class="w-full rounded-lg banner">
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <section>
        <div class="border border-gray-400 py-12 ">
            @include('Home.component.insure')
        </div>
    </section>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <section>
        <div class="mt-20">
            @include('Home.component.FeaturedCollection')
        </div>
    </section>
    <section>
        <div class="mt-10">
            @include('Home.component.Category')
        </div>
    </section>
    <section>
        <div class="my-20">
            @include('Home.component.LimitedTimeOffer')
        </div>
    </section>
    </div>
    <div>
        @include('layouts.Footer')
    </div>

</x-app-layout>
