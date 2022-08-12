window.onload = obtenerHorariosDisponibles();

async function obtenerHorariosDisponibles() {
  let table = document.getElementById("horarios-tabla");
  let horarios = [];

  await axios
    .get(
      "http://localhost/formulario_recoleccion_datos/routes.php?action=obtener_horarios"
    )
    .then((response) => {
      horarios = response.data.horarios;

      table.innerHTML = "";

      if (horarios.length > 0) {
        horarios.forEach((element, index) => {
          let tr = document.createElement("tr");
          tr.classList.add("horario");
          tr.setAttribute("data-value", element.id);
          tr.setAttribute("onclick", "abrirModalRegistrarCita(this)");

          let td = document.createElement("td");

          td.innerHTML = element.hora_inicial + " - " + element.hora_final;

          tr.appendChild(td);

          table.appendChild(tr);
        });
      } else {
        let tr = document.createElement("tr");

        let td = document.createElement("td");

        td.innerHTML =
          '<div style="text-align:center;color:#ccc;">No se Encontraron Horarios Disponibles</div>';

        tr.appendChild(td);

        table.appendChild(tr);
      }
    })
    .catch((response) => {
      console.log(response);
    });

  //   await axios
  //     .get(
  //       "http://localhost/formulario_recoleccion_datos/routes.php?action=obtener_citas"
  //     )
  //     .then((response) => {
  //       citas = response.data.resultados_citas_actuales;

  //       if (horarios.length > 0) {
  //         if (citas.length > 0) {
  //           // console.log(table.rows[0].getAttribute('data-value'))

  //           for (let index = 0; index < table.rows.length; index++) {
  //             let desactivado = 0;
  //             citas.forEach((element) => {

  //                 if(table.rows[index].getAttribute('data-value') == element.id_horario){

  //                     desactivado = 1;
  //                 }
  //             });
  //             if(desactivado == 1){

  //                 table.rows[index].classList.add('desactivado-horario');
  //             }
  //           }
  //         }
  //       }
  //     })
  //     .catch((response) => {
  //       console.log(response);
  //     });
}

function abrirModalRegistrarCita(id_horario) {
  let myModal = new bootstrap.Modal(
    document.getElementById("exampleModal"),
    {}
  );
  myModal.show();
}
