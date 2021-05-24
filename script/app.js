let currentPage = document.location.href; //getting page url
let str = currentPage.split("/"); //spliting url to get current page
let num = str.length;
let url = str[num -1];

if(url.toString() == "index.php"){
}
if(url.toString() == "kategorije.php" || url.toString() == "kategorije.php#"){
    let selCat = document.querySelector(".main-category").addEventListener( 'click', function(e) {
        //console.log(e.target.className);
        let x = e.target.className;
        if(x == 'category-img' || x == 'category-element' || x == 'category-title'){
            console.log('yaaa');
        }
    }); 

}
function clicked(){
    alert('h');
}

document.querySelector('.nav-logo').addEventListener('click', function() {
    document.location.href = 'index.php';
});
document.querySelector('.nav-logo').addEventListener('mouseenter', function() {
    document.body.style.cursor = 'pointer';
});
document.querySelector('.nav-logo').addEventListener('mouseleave', function() {
    document.body.style.cursor = 'default';
});

