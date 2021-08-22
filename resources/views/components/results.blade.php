<x-app-layout>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="text-4xl max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            Total news {{ count($news['articles']) }}
        </div>
        <div class="container px-5 pb-24 pt-8 mx-auto">

            @foreach ($news['articles'] as $new)
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <span class="font-semibold title-font text-gray-700">Source: {{ $new['source']['name'] }}</span>
                        <a href="{{ $new['urlToImage'] }}">
                            <img src="{{ $new['urlToImage'] }}" class="w-20 my-3 md:w-32 lg:w-56 border rounded" alt="news">
                        </a>
                        <span class="mt-1 text-gray-500 text-sm">
                            {{ substr($new['publishedAt'], 0, 10) }}
                        </span>
                    </div>
                    <div class="md:flex-grow">
                        <div class="flex self-align gap-3">
                            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                                {{ $new['title'] }}
                            </h2>
                        </div>
                        <p class="leading-relaxed">
                            {{ $new['description'] }}
                        </p>
                        <a href="{{ $new['url'] }}" class="text-indigo-500 inline-flex items-center mt-4">See More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="flex justify-end">
                <button onclick="window.history.back()" type="submit" class="mt-2 lg:w-1/4 inline-flex text-white bg-gray-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg">Back</button>
            </div>
        </div>
    </section>
</x-app-layout>
