<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <!-- Sidebar -->
        <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                            <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                        </a>
                    </li>
                    <li class="px-5 hidden md:block">
                        <div class="flex flex-row items-center mt-5 h-8">
                            <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                        </a>
                    </li>
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024 MBsy</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 mt-6">
                <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">1,257</p>
                        <p>Visitors</p>
                    </div>
                </div>
                <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">557</p>
                        <p>Orders</p>
                    </div>
                </div>
                <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">$11,257</p>
                        <p>Sales</p>
                    </div>
                </div>
                <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">$75,257</p>
                        <p>Balances</p>
                    </div>
                </div>
            </div>
            <!-- ./Statistics Cards -->


            <!-- bar chart -->
            <!-- Component Start -->
            <div class="flex flex-col items-center w-full max-w-screen-md p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8 mt-4" style="">
                <h2 class="text-xl font-bold">Monthly Revenue</h2>
                <span class="text-sm font-semibold text-gray-500">2020</span>
                <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$37,500</span>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-16 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Jan</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Feb</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Mar</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Apr</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">May</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Jun</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-16 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Jul</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Aug</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-32 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Sep</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Oct</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Nov</span>
                    </div>
                    <div class="relative flex flex-col items-center flex-grow pb-5 group">
                        <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$75,000</span>
                        <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                        <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                        <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
                        <span class="absolute bottom-0 text-xs font-bold">Dec</span>
                    </div>
                </div>
                <div class="flex w-full mt-3">
                    <div class="flex items-center ml-auto">
                        <span class="block w-4 h-4 bg-indigo-400"></span>
                        <span class="ml-1 text-xs font-medium">Existing</span>
                    </div>
                    <div class="flex items-center ml-4">
                        <span class="block w-4 h-4 bg-indigo-300"></span>
                        <span class="ml-1 text-xs font-medium">Upgrades</span>
                    </div>
                    <div class="flex items-center ml-4">
                        <span class="block w-4 h-4 bg-indigo-200"></span>
                        <span class="ml-1 text-xs font-medium">New</span>
                    </div>
                </div>
            </div>
            <!-- Component End  -->
            <!-- ./bar chart -->


            <!-- Contact Form -->
            <div class="mt-8 mx-4">
                <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                    <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Get in touch</h1>
                    <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Fill in the form to submit any query</p>

                    <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">Dhaka, Street, State, Postal Code</div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">+880 1234567890</div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">info@demo.com</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

