
window.addEventListener('load', function() {
    // saySomething('It worked!');

    document.querySelector('#state-chooser').addEventListener('change', stateChanged);
    document.querySelector('#state-chooser').focus();
})

function saySomething(whatToSay) {
    console.log(whatToSay);
}


/**
 * This is the function that runs when the State is changed.
 */
function stateChanged() {
    window.location = "/cities-and-states-01/" + this.value;
}



