var addBook_btn = document.querySelector('.addbook-btn')
var addCategorie_btn = document.querySelector('.addCategorie-btn')

addBook_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-products').style.display = 'flex';
})
addCategorie_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-categorie').style.display = 'flex';
})