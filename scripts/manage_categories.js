var addCategorie_btn = document.querySelector('.addCategorie-btn')
var show_menu = document.querySelector('.menu_icon');
var hide_menu = document.querySelector('.side_bar_logo');
var addBook_btn = document.querySelector('.addbook-btn')


//Crud Categories Form
addCategorie_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById("id_categorie").style.visibility ="hidden";
    document.getElementById("name_categorie").value="";
    document.querySelector('.crud-form-categorie').style.visibility = 'visible';
})

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
//show UpdateCategorie Form 
function showUpdateCategorieBox(id_categorie,name_categorie){

    document.getElementById("id_categorie").style.visibility ="visible";

    document.querySelector('.crud-form-categorie').style.visibility = 'visible';
    document.getElementById("id_categorie").value=id_categorie;
    document.getElementById("name_categorie").value=name_categorie;


}
function resteDashboard(){
        
    document.querySelector('.crud-form-products').style.visibility = 'hidden';



}
function resteManageCategorie(){
        
    document.querySelector('.crud-form-categorie').style.visibility = 'hidden';



}