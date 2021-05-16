addPlaceholder(10);

setTimeout(()=> {
    removePlaceholder();
    addCats(10);
}, 1420);

document.querySelector('.nav-logo').addEventListener('click', function() {
    document.location.href = 'index.php';
});
document.querySelector('.nav-logo').addEventListener('mouseenter', function() {
    document.body.style.cursor = 'pointer';
});
document.querySelector('.nav-logo').addEventListener('mouseleave', function() {
    document.body.style.cursor = 'default';
});

async function myFunc(){
    const options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    }
    //https://ptsv2.com/t/andreja/post
    fetch('https://ptsv2.com/t/andreja/post', options)
    .then(response => response.json())
    .then(data => console.log(data));
}


function addCats(number){
    for(let i = 0; i < number; i++){
        addNewCat('title '+ (i+1), 'img/sale-test.jpg');
    }
}
function addPlaceholder(number){
    for(let i = 0; i < number; i++){
        placeholderDiv();
    }
}
function removePlaceholder(){
    var childeren = document.querySelector('.main-category').querySelectorAll(".placeholder-cat");
    childeren.forEach( el => el.remove());
}
// Function AddNewCat is called after data fetch has finished. Data from server is passed as arguments, and elements are created
function addNewCat(title, img){
    //main static div from page
    const mainDiv = document.querySelector('.main-category');

    //dynamic div holding img, title and text
    const dynamicDiv = document.createElement('div');
    dynamicDiv.className = 'category-element';

    //image element
    const dynamicImg = document.createElement('img');
    dynamicImg.className = 'category-image';
    dynamicImg.setAttribute('src', img);
    dynamicImg.setAttribute('alt', 'Image of category ' + title);
    dynamicImg.setAttribute('height', '80%');
    dynamicImg.setAttribute('width', '100%');

    //title element
    const dynamicPar = document.createElement('h3');
    dynamicPar.appendChild(document.createTextNode(title));
    dynamicPar.className = 'category-title';

    //adding elements to each other
    dynamicDiv.appendChild(dynamicImg);
    dynamicDiv.appendChild(dynamicPar);
    mainDiv.appendChild(dynamicDiv);
}

function placeholderDiv(){
    const maindiv = document.querySelector('.main-category');

    const parentDiv = document.createElement('div');
    const imgDiv = document.createElement('div');
    const titleDiv = document.createElement('div');
    const textDiv = document.createElement('div');

    parentDiv.className = 'placeholder-cat';
    imgDiv.className = 'placeholder-img';
    titleDiv.className = 'placeholder-title';
    textDiv.className = 'placeholder-text';

    parentDiv.setAttribute('height', '100px');
    parentDiv.setAttribute('width', '100%');
    parentDiv.setAttribute('background-color', 'red');

    imgDiv.setAttribute('height', '60%');
    imgDiv.setAttribute('width', '100%');
    imgDiv.setAttribute('background-color', 'white');

    titleDiv.setAttribute('height', '20%');
    titleDiv.setAttribute('width', '100%');
    titleDiv.setAttribute('background-color', 'white');

    parentDiv.appendChild(imgDiv);
    parentDiv.appendChild(titleDiv);
    maindiv.appendChild(parentDiv);

}
