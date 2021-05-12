
async function myFunc(){
    fetch('https://api.mocki.io/v1/ddb6d39b', { method: 'POST', mode : "no-cors" })
    .then(response => response.json())
    .then(data => console.log(data));
}
