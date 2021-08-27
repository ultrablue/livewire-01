
window.addEventListener('load', function() {
    // saySomething('It worked!');

    document.querySelector('#grid-state').addEventListener('change', stateChanged);
    document.querySelector('#grid-state').focus();
})

function saySomething(whatToSay) {
    console.log(whatToSay);
}


function stateChanged() {
    // console.log("State changed!");
    // console.log(this.value);
    window.location = "/components-02/" + this.value;
}



