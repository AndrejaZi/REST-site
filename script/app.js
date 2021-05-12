
async function myFunc(){
    const options = {
        method: 'POST',
        mode: "no-cors",
        headers: {
            'Content-Type': 'application/json'
        }
    }
    //https://ptsv2.com/t/andreja/post
    fetch('https://ptsv2.com/t/andreja/post', options)
    .then(response => response.json())
    .then(data => console.log(data));
}
