function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "" || password == "") {
        alert("Por favor, ingrese su nombre de usuario y contraseña.");
    } else if (username == "usuario" && password == "contraseña") {
        alert("Inicio de sesión exitoso.");
    } else {
        alert("Nombre de usuario o contraseña incorrectos. Inténtalo de nuevo.");
    }
}