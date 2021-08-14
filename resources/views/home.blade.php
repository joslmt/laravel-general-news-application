<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('results') }}" method="get">
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
                        <div class="md:w-2/3 flex flex-col mb-16 items-center text-center">
                            <div>
                                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                                    Laravel News API
                                </h1>
                                <p class="mb-8 leading-relaxed">
                                    Kickstarter biodiesel roof party wayfarers cold-pressed. Palo santo live-edge tumeric scenester copper mug flexitarian. Prism vice offal plaid everyday carry. Gluten-free chia VHS squid listicle artisan.
                                </p>
                            </div>
                            <div class="max-w-full flex lg:max-w-lg justify-center self-center items-end">

                                <div class="relative mr-4">

                                    <div class="lg:flex gap-2">
                                        <input placeholder="bitcoin price" type="text" id="new" name="new" class="lg:mb-0 w-full mb-2 bg-gray-300 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-2 leading-8 transition-colors duration-200 ease-in-out">
                                        <button type="submit" class="w-full lg:w-1/4 inline-flex text-white bg-indigo-500 border-0 py-2.5 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
                                    </div>

                                    <div class="flex justify-center flex-wrap gap-1 mt-2 w-xl">
                                        <select class="w-1/2 lg:w-1/4 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="country" id="country">
                                            <optgroup label="Countries">
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
                                            </optgroup>
                                        </select>
                                        <select class="w-1/2 lg:w-1/4 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="category" id="category">
                                            <optgroup label="Categories">
                                                <option value="business">
                                                    Business
                                                </option>
                                                <option value="entertainment">
                                                    Entertainment
                                                </option>
                                                <option value="general">
                                                    General
                                                </option>
                                                <option value="health">
                                                    Health
                                                </option>
                                                <option value="science">
                                                    Science
                                                </option>
                                                <option value="sports">
                                                    Sports
                                                </option>
                                                <option value="technology">
                                                    Technology
                                                </option>
                                            </optgroup>
                                        </select>
                                        <select class="w-1/2 lg:w-1/4 sm:w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-300 text-base outline-none text-gray-700 py-1 leading-8 transition-colors duration-200 ease-in-out" name="language" id="language">
                                            <optgroup label="Languages">
                                                <option value="fr">French</option>
                                                <option value="ar">Arabian</option>
                                                <option value="ru">Russian</option>
                                                <option value="en">English</option>
                                                <option value="es">Spanish</option>
                                                <option value="pt">Portuguese</option>
                                            </optgroup>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>

        </div>
    </div>
</x-app-layout>
