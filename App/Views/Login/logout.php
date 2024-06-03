<?php
// Espera 1 segundos antes de redirigir a la página de inicio
header('refresh:1; url=http://localhost:8080/');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
<script>
    let timerInterval;
Swal.fire({
  title: "Cierre de sesión",
  html: "Serás redirigido al portal en <b>1</b> segundo.",
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading();
    const timer = Swal.getPopup().querySelector("b");
    timerInterval = setInterval(() => {
      timer.textContent = `${Swal.getTimerLeft()}`;
    }, 100);
  },
  willClose: () => {
    clearInterval(timerInterval);
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log("I was closed by the timer");
  }
});
</script>
</body>
</html>