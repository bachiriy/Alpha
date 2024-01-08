// fetch products / posts
const product_section = document.querySelector('#products_section');
fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => {
        return response.json();
    })
    .then(data => {
        data.forEach(post => {
            product_section.innerHTML += `
                <div class="min-h-screen bg-gray-100 flex justify-center items-center m-2">
                    <div class="container flex justify-center h-96">
                        <div class="max-w-sm">
                            <div class="flex">
                                <p onclick="editProduct(${post.id}, this)" class="bg-purple-500 mr-2 p-1 w-12 flex justify-center text-white my-2 rounded-lg cursor-pointer shadow-xl hover:opacity-80">EDIT</p>
                                <p onclick="deleteProduct(${post.id})" class="bg-red-500 p-1 w-20 flex justify-center text-white my-2 rounded-lg cursor-pointer shadow-xl hover:opacity-80">DELETE</p>
                            </div>
                            <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                                <div class="py-6 px-8 rounded-lg bg-white">
                                    <h1 id="title-${post.id}" class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">${post.title}</h1>
                                    <p id="body-${post.id}" class="text-gray-700 tracking-wide">${post.body}</p>
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
    })
    .catch(error => console.error(error));

// delete product
function deleteProduct(postID) {
    fetch('https://jsonplaceholder.typicode.com/posts/' + postID, {
        method: 'DELETE',
    })
        .then(response => {
            if (response.status === 200) {
                console.log(response.status);
                alert('post deleted successfully');
            }
        })
        .catch(error => console.error('DELETE request failed:', error));

}

// edit product
function editProduct(postID, btn) {
    let title = document.querySelector('#title-' + postID);
    let body = document.querySelector('#body-' + postID);

    window.document.body.innerHTML += `
                <div id="save_product_form" style="left: 50%;" class="shadow-xl fixed top-36 max-w-md mx-auto bg-white rounded p-8 shadow-md">
                    <h2 class="text-2xl font-bold mb-6">Edit Item</h2>
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                        <input id="productTitle-${postID}" type="text" value="${title.innerHTML}" name="title" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    </div>
                
                    <div class="mb-6">
                        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body:</label>
                        <label for="productBody"></label>
                        <textarea id="productBody-${postID}" name="body" rows="4" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">${body.innerHTML}</textarea>
                    </div>
                
                    <button onclick="saveProduct(${postID})" type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 focus:outline-none focus:shadow-outline-blue active:bg-yellow-800">
                        Save
                    </button>
                </div>`;

}

// save product edit
function saveProduct(postID) {
    const t = document.querySelector('#productTitle-' + postID);
    const b = document.querySelector('#productBody-' + postID);
    const dataToPost = { title: t.value, body: b.value };
    fetch('https://jsonplaceholder.typicode.com/posts/' + postID, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(dataToPost),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
        .then(data => {
            document.querySelector('#save_product_form').style.display = 'none';
            alert('Edited success');
        })
        .catch(error => console.error('POST request failed:', error));
}


// fetch users
const users_section = document.querySelector('#users_section');

fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json())
    .then(data => {
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
    })
    .catch(error => console.log(error));

// reset password section
function resetPwd() {
    const messages = document.querySelector('#messages');
    const email_pwd_reset = document.querySelector('#email_pwd_reset');
    if (email_pwd_reset.value !== '') {
        fetch('index.php?page=pwd-reset', {
            headers: {'Content-Type': 'application/json'},
            method: 'POST',
            body: JSON.stringify({email: email_pwd_reset.value})
        })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                if (data) {
                    email_pwd_reset.value = '';
                    messages.style.color = 'green';
                    messages.innerHTML = 'check your email';
                } else {
                    messages.innerHTML = 'account does not exist'
                }
            })
            .catch(error => console.log(error));
    } else {
        messages.innerHTML = 'must enter an email';
    }
}


// add product section
function addProduct(){
    const productTitle = document.querySelector('#productTitle');
    const productBody = document.querySelector('#productBody');

    if (productTitle.value !== '' && productBody.value !== '') {
        const dataToPost = { title: productTitle.value, body: productBody.value };

        fetch('https://jsonplaceholder.typicode.com/posts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataToPost),
        })
            .then(response => {
                console.log(response.status);
                return response.json();
            })
            .then(data => {
                productTitle.value = '';
                productBody.value = '';
                alert('Product Added success');
                addNtf();
                getNtfs();
                notReadNtfs();
            })
            .catch(error => console.error('POST request failed:', error));
    } else {
        alert('must fill both inputs');
    }
}
// add notification function

function addNtf() {
    fetch('index.php?page=dashboard', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({message: 'New Product', type: 'add'}),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
        .then(data => {
        })
        .catch(error => console.error(error));
}

// get notifications
function getNtfs() {
    let ntfs_section = document.querySelector('#display_ntfs_here');
    ntfs_section.innerHTML = '';
    fetch('index.php?page=dashboard', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({type: 'get'}),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
        .then(data => {
            data.forEach(ntf => {
                ntfs_section.innerHTML += `
                <div class="flex justify-between h-10 border border-blakc rounded-lg">
                    <p><span class="text-blue-600">${ntf.message}</span> <span style="font-size: 12px" class="font-bold">by ${ntf.username}</span>  <span style="font-size: 10px" class="text-gray-500 underline">at ${ntf.created_at}</span></p>
                    <button onclick="deleteNtf(${ntf.id})" class="p-2 bg-gray-600 text-white font-bold hover:opacity-70">X</button>
                </div>
                `;
            })
        })
}

getNtfs();
// delete notification
function deleteNtf(id) {
    fetch('index.php?page=dashboard', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ID: id, type: 'delete'}),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
    getNtfs();
}

// get not read ntfs count
function notReadNtfs(){
    let ntfs_count = document.querySelector('#ntfs_count');
    ntfs_count.innerHTML = '';
    fetch('index.php?page=dashboard', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({type: 'notRead'}),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
        .then(data => {
            ntfs_count.innerHTML = data.ntfs_not_read;
        })
}

notReadNtfs();

// make ntfs read function

function readNtfs() {
    fetch('index.php?page=dashboard', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({message: 'New Product', type: 'read'}),
    })
        .then(response => {
            console.log(response.status);
            return response.json();
        })
        .then(data => {
            notReadNtfs();
        })
        .catch(error => console.error(error));
}