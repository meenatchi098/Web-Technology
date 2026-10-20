function handleMouseOver() {
    document.getElementById("myElement").style.backgroundColor = "pink";
}

function handleMouseOut() {
    document.getElementById("myElement").style.backgroundColor = "yellow";
}

function handleSubmit(event) {
    event.preventDefault();

    var input = document.getElementById("myInput").value;

    alert("Form submitted! Value entered: " + input);
}
