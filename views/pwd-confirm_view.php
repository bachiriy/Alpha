<!-- component -->
<form method="post" action="index.php?page=pwd-confirm&token=<?= $_GET['token'] ?>"  class="h-screen md:flex">
    <div class="flex md:w-full justify-center py-10 items-center bg-white">
        <div class="bg-white">
            <p class="text-sm text-red-400" id="messages"></p>
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Reset Your Password</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Please enter the new password associated with </p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                          clip-rule="evenodd" />
                </svg>
                <label for=""></label><label for="password_confirm_in"></label><input class="pl-2 outline-none border-none" type="password" name="password_confirm" id="password_confirm_in" placeholder="Enter A New Password" />
            </div>
            <button type="submit" id="pwd_confirm_btn" name="pwd_confirm_btn" class="hover:opacity-90 block w-full bg-red-500 bg-gradient-to-r from-yellow-400 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Confirm</button>
            <span style="font-size: 12px" class="text-sm ml-2 hover:text-blue-500 cursor-pointer mx-2" onclick="window.location.href = 'index.php?page=login'">Have Account? Login! </span> |
            <span style="font-size: 12px" class="text-sm ml-2 hover:text-green-500 cursor-pointer mx-1" onclick="window.location.href = 'index.php?page=register'">Create Account?</span>
        </div>
    </div>
</form>
