const close_or_open = document.querySelector('#add_product_btn');
const add_product_form = document.querySelector('#add_product_form');
function openForm() {
    add_product_form.style.display === 'none' ? add_product_form.style.display = 'block' : add_product_form.style.display = 'none';
}
