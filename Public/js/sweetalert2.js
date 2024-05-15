function showalert() {
  Swal.fire('this is an alert');
}

function mostrarAlerta() {
  Swal.fire({
      icon: 'error',
      title: 'Error de autenticación',
      text: 'Usuario no existe o datos incorrectos'
  });
}