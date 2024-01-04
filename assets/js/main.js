// fetch products / posts
const product_section = document.querySelector('#products_section');
fetch('https://jsonplaceholder.typicode.com/posts', {
    method: 'GET',
    headers: {'Content-Type': 'application/json'},
})
    .then(response => response.json())
    .then(data => {
        console.log(data);
        data.forEach(post => {
            product_section.innerHTML += `
                <div class="min-h-screen bg-gray-100 flex justify-center items-center m-2">
                    <div class="container flex justify-center h-96">
                        <div class="max-w-sm">
                            <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                                <div class="py-6 px-8 rounded-lg bg-white">
                                    <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">${post.title}</h1>
                                    <p class="text-gray-700 tracking-wide">${post.body}</p>
                                    <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                                </div>
                                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                                    <span class="text-md">${post.id}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        })
    });


// fetch users
const users_section = document.querySelector('#users_section');

fetch('https://jsonplaceholder.typicode.com/users', {
    headers: {'Content-Type': 'application/json'},
    method: 'GET'
})
    .then(response => response.json())
    .then(data => {
        console.log(data);
        data.forEach(user => {
            users_section.innerHTML += `
            <div class="card min-w-sm border rounded-lg bg-gray-700 text-gray-50 shadow-xl min-w-max my-20">
        <!---->
        <div class="w-full card__media"><img src="https://image.freepik.com/free-vector/abstract-binary-code-techno-background_1048-12836.jpg" class="h-48 w-96" alt="cover"></div>
        <div class="flex items-center p-4">
            <div class="relative flex flex-col items-center w-full">
                <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-purple-400 min-w-max absolute -top-16 flex bg-purple-200 text-purple-100 row-start-1 row-end-3 text-purple-650 ring-1 ring-white">
                    <img class="h-24 w-24 md rounded-full relative" src="assets/img/default_profile.png" alt="">
                    <div class="absolute"></div>
                </div>
                <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                    <span class="text-xl whitespace-nowrap text-gray-50 font-semibold">${user.name}</span><span class="text-md whitespace-nowrap text-gray-100">@${user.username}</span>
                    <p class="text-sm text-gray-200">
                       <span class="px-1 text-gray-300 underline" style="font-size: 12px;"> ${user.phone} </span>  | <span class="px-1"> ${user.email} </span>
                    </p>
                    <div class="py-2 flex space-x-2">
                        <button class="flex justify-center  max-h-max whitespace-nowrap focus:outline-none  focus:ring  focus:border-blue-300 rounded max-w-max border bg-transparent border-purple-400 text-purple-400 hover:border-purple-800 hover:border-purple-500 px-4 py-1 flex items-center hover:shadow-lg"><span class="mr-2"></span>MODIFY<span class="ml-2"></span></button>
                    </div>
                    <p class="text-sm text-purple-400 ">Company : ${user.company.name}</p>
                    <p class="cursor-pointer text-blue-300 underline hover:opacity-40">${user.website}</p>
                    <p class="italic text-gray-300" style="font-size: 10px">${'street : ' + user.address.street + ', suite : ' + user.address.suite + ', city : ' + user.address.city + ', zipcode : ' + user.address.zipcode}</p>
                </div>
            </div>
        </div>
        <!---->
    </div>
        `;
        })
    });

// reset password section

const pwd_reset_btn = document.querySelector('#pwd_reset_btn');

pwd_reset_btn.addEventListener('click', ()=>{
    const email_pwd_reset = document.querySelector('#email_pwd_reset');
    fetch('index.php?page=pwd-reset', {
        headers: {'Content-Type': 'application/json'},
        method: 'POST',
        body: JSON.stringify({email: email_pwd_reset.value})
    })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            if (data === true) {
                email_pwd_reset.value = '';
                email_pwd_reset.placeholder = 'check your email';
            } else {
                email_pwd_reset.innerHTML = 'account does not exist'
            }
        });
})
