var fila = document.getElementsByClassName("horario")
var modal = document.getElementById("modal")

function show(x) {

    var classIndex = x.classList;
    let desactivado = 1;

    for (let index = 0; index < classIndex.length; index++) {
        if (classIndex[index] == "desactivado-horario") {
            desactivado = 0;
        }
    }

    if (desactivado == 1) {
        modal.classList.toggle('inactivo')
    }

    console.log(desactivado)
}

function save() {
}