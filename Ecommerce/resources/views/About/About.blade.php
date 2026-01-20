<x-app-layout>
    <div class="py-[100px]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section>
                <div class="overflow-hidden">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-center mt-20">
                            <p class="bg-yellow-500 py-2 mb-9 inline-block px-3 rounded-full">Our Story</p>
                            <p class="text-5xl font-bold mb-4">Crafting Premium Shopping <br> Experiences</p>
                            <p>Founded in 2014, Luxe has been at the forefront of premium e-commerce, curating exceptional products <br> that blend quality, style, and innovation.</p>
                        </div>
                    </div>
                </div>
                <div>
                    @include('About.components.catificate')
                </div>
            </section>
            <section>
                <div>
                    @include('About.components.OurMission')
                </div>
            </section>
            <section>
                <div class="mt-5">
                    @include('About.components.OurValues')
                </div>
            </section>
            <section>
                <div class="mt-5">
                    @include('About.components.MeetOurTeam')
                </div>
            </section>

        </div>
    </div>
    @include('layouts.Footer')
</x-app-layout>
