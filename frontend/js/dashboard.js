document.addEventListener("DOMContentLoaded", function () {
    const token = localStorage.getItem("token");

    function decodificarToken(token) {
        try {
            const base64Url = token.split('.')[1]; 
            const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/'); 
            return JSON.parse(atob(base64)); 
        } catch (error) {
            console.error("Error al decodificar el token:", error);
            return null;
        }
    }

    const usuario = decodificarToken(token);

    if (!usuario) {
        Swal.fire({
            icon: 'warning',
            title: 'Acceso restringido',
            text: 'Debes iniciar sesión para continuar.',
            confirmButtonText: 'Entendido'
        }).then(() => {
            window.location.href = "index.php";
        });
        return;
    }

    document.getElementById("nombreUsuario").textContent = `¡Bienvenido! , ${usuario.nombre || 'Usuario'}`;

    document.getElementById("cerrarSesion").addEventListener("click", function () {
        localStorage.removeItem("token");
        window.location.href = "index.php";
    });
});
