<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                        <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                        <form class="grid mt-2" action="#">
                            <label for="">send by email</label>
                            <button class="w-1/2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Send
                            </button>
                        </form>
                    </div>
                    <div class="md:flex-grow">
                        <div class="flex self-align gap-3">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                            <form action="#" method="post">
                                @csrf
                                <button type="submit"">
                                    <svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                        <a href="{{ route('learn') }}" class="text-indigo-500 inline-flex items-center mt-4">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="mt-2 lg:w-1/4 inline-flex text-white bg-gray-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg">Back</button>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
