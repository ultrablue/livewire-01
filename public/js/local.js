
window.addEventListener('load', function() {
    saySomething('It worked!');

    document.querySelector('#grid-state').addEventListener('change', stateChanged);

})

function saySomething(whatToSay) {
    console.log(whatToSay);
}


function stateChanged() {
    // console.log("State changed!");
    // console.log(this.value);
    window.location = this.value;
}



