<button onclick="openForm()" class="bg-green-400 p-2 hover:opacity-70 rounded-lg fixed top-20 right-4 text-white shadow-xl">add product</button>
<div class="flex flex-wrap justify-center" id="products_section">
    <!-- display the products inside this div -->
</div>

<div id="add_product_form" style="display: none;" class="fixed top-20 right-96 max-w-md mx-auto bg-white rounded p-8 shadow-md">
    <h2 class="text-2xl font-bold mb-6">Add Item</h2>
    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
        <input type="text" id="productTitle" name="title" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-6">
        <label for="body" class="block text-gray-700 text-sm font-bold mb-2">Body:</label>
        <label for="productBody"></label><textarea id="productBody" name="body" rows="4" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
    </div>

    <button onclick="addProduct()" type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
        Add
    </button>
</div>