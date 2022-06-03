$(document).ready(function () {
    $('#inventario').DataTable();
});


let element = document.querySelectorAll('.view');
for (let i = 0; i < element.length; i++) {
    element[i].addEventListener('click', function (e) {
        e.preventDefault();

    });
}

let editForm = document.querySelectorAll('.edit');

for (let i = 0; i < editForm.length; i++) {
    editForm[i].addEventListener('click', function (e) {
        e.preventDefault();

    });
}



function view(link) {
    data = fetch(link)
        .then(response => response.json())
        .then(function (data) {
            document.querySelector('.modeloView').value = data.modelo;
            document.querySelector('.placaView').value = data.placa;
            document.querySelector('.propietarioView').value = data.propietario;
            document.querySelector('.marcaView').value = data.marca;
            document.querySelector('.precioView').value = data.precio;
            document.getElementById("imageView").src = data.imagen;
        });

}

function edit(link) {
    data = fetch(link)
        .then(response => response.json())
        .then(function (data) {
            document.querySelector('.imageEdit').src = `${data.imagen}`;
            document.querySelector('.modeloEdit').value = data.modelo;
            document.querySelector('.placaEdit').value = data.placa;
            document.querySelector('.propietarioEdit').value = data.propietario;
            document.querySelector('.marcaEdit').value = data.marca;
            document.querySelector('.precioEdit').value = data.precio;
            document.getElementById("formEdit").action = link;
            console.log(data);
        });
}

function destroy(link) {
    data = fetch(link)
        .then(response => response.json())
        .then(function (data) {
            console.log(data);
        });
}


document.querySelector('.fileImage').addEventListener('change', function(e) {
    let img = document.querySelector('.fileImage').files[0];
    urlImg = URL.createObjectURL(img);
    document.getElementById('imageEdit').src = urlImg;
});
document.querySelector('.fileAdd').addEventListener('change', function(e) {
    let img = document.querySelector('.fileAdd').files[0];
    urlImg = URL.createObjectURL(img);
    document.getElementById('imageAdd').src = urlImg;
});


//ALERT


jQuery(document).ready(function(){
    jQuery('.toast__close').click(function(e){
      e.preventDefault();
      var parent = $(this).parent('.toast');
      parent.fadeOut("slow", function() { $(this).remove(); } );
    });
  });
