var addBook_btn = document.querySelector('.addbook-btn')
var addCategorie_btn = document.querySelector('.addCategorie-btn')
var show_menu = document.querySelector('.menu_icon');
var hide_menu = document.querySelector('.side_bar_logo');
var book_details = document.querySelector('.book_details');
var close_book_details = document.querySelector('.close-book-details');

//Crud Product Form
addBook_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form-products').style.visibility = 'visible';
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


// show Book Details 1
function showBookDetails(isbn,title,author,description,price,quantity,categorie,product_thumb){
    document.querySelector('.book-details').style.visibility = 'visible';
    document.getElementById("titleB").innerHTML=title;
    document.getElementById('authorB').innerHTML=author;
    document.getElementById("descriptionB").innerHTML=description;
    document.getElementById("categorieB").innerHTML=categorie;
    document.getElementById('priceB').innerHTML=price;
    document.getElementById("product_thumbB").src="../" + product_thumb;
}

//close Book Details
close_book_details.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.book-details').style.visibility = 'hidden';
})

function resteDashboard(){
    document.querySelector('.crud-form-products').style.visibility = 'hidden';
    document.getElementById("isbn").value="";
    document.getElementById("bookname").value="";
    document.getElementById("author").value="";
    document.getElementById("description").value="";
    document.getElementById("categorie").value="";
    document.getElementById("price").value=0;
    document.getElementById("quantity").value=0;
}

//show UpdateBook Form 
function showUpdateBox(isbn,title,author,description,price,quantity,categorie,product_thumb){
    document.querySelector('.crud-form-products').style.visibility = 'visible';
    document.getElementById("isbn").value=isbn;
    document.getElementById("bookname").value=title;
    document.getElementById("author").value=author;
    document.getElementById("description").value=description;
    document.getElementById("first").value="dssd";
    document.getElementById("price").value=price;
    document.getElementById("quantity").value=quantity;
    document.getElementById("product_thumb").src=product_thumb;
}
