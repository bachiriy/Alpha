<!-- component -->
<div class="h-screen md:flex">
    <div
        class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-red-800 to-purple-700 i justify-around items-center hidden">
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">Alpha</h1>
            <p class="text-white mt-1">The most popular peer to peer lending at SEA</p>
            <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
        </div>
        <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <div class="bg-white">
            <p class="text-sm text-red-400" id="messages"></p>
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Forgot Your Password?</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">We get it, stuff happens. Just enter your email address <br> below and we'll send you a link to reset your password!</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input class="pl-2 outline-none border-none" type="email" name="email" id="email_pwd_reset" placeholder="Email Address" />
            </div>
            <button type="submit" id="pwd_reset_btn" name="pwd_reset_btn" class="hover:opacity-90 block w-full bg-red-700 bg-gradient-to-r from-indigo-700 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Reset Password</button>
            <span style="font-size: 12px" class="text-sm ml-2 hover:text-blue-500 cursor-pointer mx-2" onclick="window.location.href = 'index.php?page=login'">Have Account? Login! </span> |
            <span style="font-size: 12px" class="text-sm ml-2 hover:text-green-500 cursor-pointer mx-1" onclick="window.location.href = 'index.php?page=register'">Create Account?</span>
        </div>
    </div>
</div>
