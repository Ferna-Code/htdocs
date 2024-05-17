function showalert() {
  Swal.fire('this is an alert');
}

function alertaErrorAutenticacion() {
  Swal.fire({
      icon: 'error',
      title: 'Error de autenticación',
      text: 'Usuario no existe o datos incorrectos'
  });
}

function publicacionCreada(){
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Publicación realizada exitosamente",
    showConfirmButton: false,
    timer: 1500
  });
}

function publicacionNoCreada(){
  Swal.fire({
    position: "top-end",
    icon: "error",
    title: "Has alcanzado el límite diario de publicaciones.",
    showConfirmButton: false,
    timer: 1500
  });
}

