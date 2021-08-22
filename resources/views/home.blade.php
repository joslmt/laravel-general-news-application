<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex flex-col px-5 py-24 justify-center  items-center">
                    <div class="md:w-2/3 flex flex-col mb-16 text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                            Laravel News API
                        </h1>
                        <div class="px-auto h-full bg-gray-100 p-5 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                            </svg>
                            <p class="leading-relaxed mb-6">
                                Today's gossip is tomorrow's headline.
                            </p>
                            <a class="inline-flex items-center">
                                <span class="flex-grow flex flex-col pl-4">
                                    <span class="title-font font-medium text-gray-900">Walter Winchell</span>
                                    <span class="text-gray-500 text-sm">Journalist</span>
                                </span>
                            </a>
                        </div>

                        <div class="relative mr-4">
                            <div x-data="setup()">
                                <ul class="flex justify-center items-center my-4">
                                    <template x-for="(tab, index) in tabs" :key="index">
                                        <li class="cursor-pointer py-3 px-4 text-gray-800 border-b" :class="activeTab===index ? 'text-indigo-500 border-indigo-500' : ''" @click="activeTab = index" x-text="tab"></li>
                                    </template>
                                </ul>
                                <!-- 
                                    Tabs
                                 -->
                                <div class="px-16 pb-16 pt-5 mx-auto">

                                    <div x-show="activeTab===0">

                                        <!-- 
                                        Search form
                                     -->
                                        <form action="{{ route('search') }}" method="get">
                                            <div class="lg:flex gap-2">
                                                <input placeholder="bitcoin price" type="text" id="new" name="new" class="lg:mb-0 w-full mb-2 bg-gray-300 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-2 leading-8 transition-colors duration-200 ease-in-out">

                                                <button type="submit" class="w-full lg:w-1/4 flex justify-center inline-flex text-white bg-indigo-500 border-0 p-4 focus:outline-none hover:bg-indigo-600 rounded text-md">Search</button>
                                            </div>

                                            <div class="flex justify-center flex-wrap gap-1 mt-2 w-xl">
                                                <!-- 
                                                    Sort by
                                             -->
                                                <select class="w-full sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="sort" id="sort">
                                                    <option disabled="disabled" selected label="Sort by"></option>
                                                    <option value="relevancy">
                                                        Relevancy
                                                    </option>
                                                    <option value="popularity">
                                                        Popular
                                                    </option>
                                                    <option value="publishedAt">
                                                        News articles
                                                    </option>
                                                </select>
                                                <!-- 
                                                    Language
                                                 -->
                                                <select class="w-full sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="language" id="language">
                                                    <option disabled="disabled" selected label="Languages"></option>
                                                    <option value="fr">French</option>
                                                    <option value="ar">Arabian</option>
                                                    <option value="ru">Russian</option>
                                                    <option value="en">English</option>
                                                    <option value="es">Spanish</option>
                                                    <option value="pt">Portuguese</option>
                                                </select>
                                            </div>
                                        </form>

                                    </div>

                                    <div x-show="activeTab===1">

                                        <!-- 
                                        Breaking News form
                                     -->
                                        <form action="{{ route('latest') }}" method="get">
                                            <div class="lg:flex gap-2">
                                                <button type="submit" class="w-full mb-5 h-12 px-5 text-white transition-colors duration-100 bg-red-500 rounded-lg focus:shadow-outline hover:bg-red-600 text-md">Search latest</button>
                                            </div>

                                            <div class="flex justify-center flex-wrap gap-1 mt-2 w-2xl">
                                                <!-- 
                                                    Countries
                                                 -->
                                                <select class="w-full lg:w-1/3 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="country" id="country">
                                                    <option disabled="disabled" selected label="Country"></option>
                                                    <option value="ar">Argentina </option>
                                                    <option value="au">Australia</option>
                                                    <option value="at">Austria</option>
                                                    <option value="be">Belgium</option>
                                                    <option value="br">Brazil</option>
                                                    <option value="bg">Bulgaria</option>
                                                    <option value="ca">Canada</option>
                                                    <option value="cn">China</option>
                                                    <option value="co">Colombia</option>
                                                    <option value="cz">Czech Republic</option>
                                                    <option value="eg">Egypt</option>
                                                    <option value="fr">France</option>
                                                    <option value="de">Germany</option>
                                                    <option value="gr">Greece</option>
                                                    <option value="hk">Hong Kong</option>
                                                    <option value="hu">Hungary</option>
                                                    <option value="in">India</option>
                                                    <option value="id">Indonesia</option>
                                                    <option value="ie">Ireland</option>
                                                    <option value="il">Israel</option>
                                                    <option value="it">Italy</option>
                                                    <option value="lv">Latvia</option>
                                                    <option value="lt">Lithuania</option>
                                                    <option value="my">Malaysia</option>
                                                    <option value="mx">Mexico</option>
                                                    <option value="ma">Morocco</option>
                                                    <option value="nl">Netherlands</option>
                                                    <option value="nz">New Zealand</option>
                                                    <option value="ng">Nigeria</option>
                                                    <option value="no">Norway</option>
                                                    <option value="ph">Philippines</option>
                                                    <option value="pl">Poland</option>
                                                    <option value="pt">Portugal</option>
                                                    <option value="ro">Romania</option>
                                                    <option value="ru">Russia</option>
                                                    <option value="sa">Saudi Arabia</option>
                                                    <option value="rs">Serbia</option>
                                                    <option value="sg">Singapore</option>
                                                    <option value="sk">Slovakia</option>
                                                    <option value="si">Slovenia</option>
                                                    <option value="za">South Africa</option>
                                                    <option value="kr">South Korea</option>
                                                    <option value="se">Sweden</option>
                                                    <option value="ch">Switzerland</option>
                                                    <option value="tw">Taiwan</option>
                                                    <option value="th">Thailand</option>
                                                    <option value="tr">Turkey</option>
                                                    <option value="ua">Ukrain</option>
                                                    <option value="uk">United Kingdom</option>
                                                    <option value="us">United States</option>
                                                    <option value="ve">Venezuela</option>
                                                </select>

                                                <!-- 
                                                    Categories
                                                 -->
                                                <select class="w-full lg:w-1/2 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="categories" id="categories">
                                                    <option disabled="disabled" selected label="Category"></option>
                                                    <option value="business">Business</option>
                                                    <option value="entertainment">Entertainment</option>
                                                    <option value="general">General</option>
                                                    <option value="health">Health</option>
                                                    <option value="science">Science</option>
                                                    <option value="sports">Sports</option>
                                                    <option value="technology">Technology</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-app-layout>




<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script>
    function setup() {
        return {
            activeTab: 0,
            tabs: [
                "Search",
                "Breaking News",
            ]
        };
    };
</script>
