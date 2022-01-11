var addBook_btn = document.querySelector('.addbook-btn')

addBook_btn.addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.crud-form').style.display = 'flex';
})