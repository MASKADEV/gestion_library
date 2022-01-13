var addBook_btn = document.querySelector('.addbook-btn')
var addCategorie_btn = document.querySelector('.addCategorie-btn')
var show_menu = document.querySelector('.menu_icon');
var hide_menu = document.querySelector('.side_bar_logo');


//Crud Product Form
addBook_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-products').style.display = 'flex';
    document.getElementById("isbn").value="";
    document.getElementById("bookname").value="";
    document.getElementById("author").value="";
    document.getElementById("description").value="";
    document.getElementById("categorie").value="";
    document.getElementById("price").value="";
    document.getElementById("quantity").value=" ";
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


function showUpdateBox(isbn,title,author,description,quantity,price,categorie){
    document.querySelector('.crud-form-products').style.display = 'flex';


    document.getElementById("isbn").value=isbn;
    document.getElementById("bookname").value=title;
    document.getElementById("author").value=author;
    document.getElementById("description").value=description;
    document.getElementById("categorie").value=categorie;
    document.getElementById("price").value=price;
    document.getElementById("quantity").value=quantity;
}
function resteDashboard(){
        
    document.querySelector('.crud-form-products').style.display = 'none';



}