// add 
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("add_contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Primero, limpiar mensajes de error previos
        document.querySelectorAll(".error").forEach(span => {
            span.innerText = "";
        });

        if (data.status === "error") {
            if (Array.isArray(data.errors)) {
                let errorContainer = document.getElementById("error-container");
                errorContainer.innerHTML = data.errors.map(err => `<p class="error">${err}</p>`).join("");

                // Muestra SweetAlert de error
                Swal.fire({
                    icon: "error",
                    background: "#58ac8a", // Color fondo
                    title: "Errores en el formulario",
                    color: "#fff",
                    html: data.errors.join("<br>"),
                    confirmButtonText: "Entendido"
                });
            } else {
                Object.keys(data.errors).forEach(key => {
                    let errorSpan = document.getElementById(`error-${key}`);
                    if (errorSpan) {
                        errorSpan.innerText = data.errors[key];
                    }
                });

                // Muestra SweetAlert de error con errores específicos
                Swal.fire({
                    icon: "error",
                    title: "Campos incorrectos",
                    text: "Por favor revisa los campos y corrige los errores.",
                    confirmButtonText: "Entendido"
                });
            }
        } else if (data.status === "success") {
            Swal.fire({
                icon: "success",
                title: "¡Enviado con éxito!",
                background: "#58ac8a", // Color fondo
                text: "En breve nos pondremos en contacto contigo.",
                color: "#fff", // Color del texto
                confirmButtonText: "OK"
            }).then(() => {
                document.getElementById("contactForm").reset(); // Limpia el formulario
                document.getElementById("error-container").innerHTML = ""; // Borra mensajes de error previos
            });
        }
    })
    .catch(error => {
        console.error("Error en la solicitud:", error);
        Swal.fire({
            icon: "error",
            title: "Error de conexión",
            text: "Hubo un problema al conectar con el servidor.",
            confirmButtonText: "Intentar de nuevo"
        });
    });
});