document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loginForm").addEventListener("submit", async function (event) {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const contrasena = document.getElementById("contrasena").value;
        const loadingScreen = document.getElementById("loading");

        const datos = { email, contrasena };

        // Mostrar la animación de carga
        loadingScreen.style.visibility = "visible";

        try {
            const respuesta = await fetch("../../prueba_tecnica/backend/proceso_login.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(datos)
            });

            const resultado = await respuesta.json();
            console.log(resultado);

            setTimeout(() => {
                // Ocultar la animación de carga
                loadingScreen.style.visibility = "hidden";

                if (resultado.token) {
                    console.log("Token:", resultado.token);
                    localStorage.setItem("token", resultado.token);
                    window.location.href = "dashboard.php";
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error en el inicio de sesión',
                        text: 'No se ha podido iniciar sesión. Por favor, verifica tus credenciales e inténtalo nuevamente.',
                        confirmButtonText: 'Aceptar'
                    });
                }
            }, 3000);
        } catch (error) {
            console.error("Error en la solicitud:", error);
            alert("Ocurrió un error al intentar iniciar sesión");
            loadingScreen.style.visibility = "hidden"; // Ocultar en caso de error
        }
    });
});
