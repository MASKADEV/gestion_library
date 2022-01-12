var addBook_btn = document.querySelector('.addbook-btn')
var addCategorie_btn = document.querySelector('.addCategorie-btn')
var show_menu = document.querySelector('.menu_icon');
var hide_menu = document.querySelector('.side_bar_logo');


//Crud Product Form
addBook_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-products').style.display = 'flex';
})

//Crud Categories Form
addCategorie_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-categorie').style.display = 'flex';
})

//Show side Bar
show_menu.addEventListener('click', (e) => {
    console.log('maska');
    e.preventDefault();
    document.querySelector('.left_container').style.left = '0px';
})

//Hide side bar
hide_menu.addEventListener('click', (e) => {
    console.log('maska');
    e.preventDefault();
    document.querySelector('.left_container').style.left = '-300px';
})