<?php
session_start();

if (!isset($_SESSION['users'])) {
    $baseURL = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/landing_page/index.php";
    header("Location: $baseURL");
    exit;
}

$current_page = basename($_SERVER['PHP_SELF']); // Obtiene el nombre del archivo actual
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- jQuery y DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
</head>
<body class="flex">

    <?php include "components/sidebar.php"; ?>

    <div class="flex-1 flex flex-col min-h-screen">
        <?php include "components/nav.php"; ?>

        <main class="px-2 lg:px-32">
            <div class="container mx-auto">
                <h1 class="text-2xl font-bold my-3">Contactos</h1>
                <div class="overflow-hidden">
                    <table id="clientes-table" class="min-w-full border-collapse border border-gray-300 display responsive nowrap">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border p-2"></th>
                                <th class="border p-2">ID</th>
                                <th class="border p-2">Nombre</th>
                                <th class="border p-2">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- El contenido se cargará dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <?php include "components/footer.php"; ?>
    </div>

    <script>
        $(document).ready(function () {
            let table = $('#clientes-table').DataTable({
                responsive: true,
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                dom: 'Bfrtip', // Habilita los botones
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: 'Exportar a Excel',
                        className: 'bg-green-500 text-white px-4 py-2 rounded-lg',
                        title: 'Reporte de Contactos'
                    }
                ],
                language: {
                    "decimal": ",",
                    "thousands": ".",
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    }
                },
                columns: [
                    { data: null, defaultContent: '<button class="expand-btn bg-blue-500 text-white rounded-full px-3 py-1">+</button>', orderable: false },
                    { data: "id" },
                    { data: "nombre" },
                    { data: "email" }
                ]
            });

            fetch("../../../Controllers/admin/ContactController.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" }
            })
            .then(response => response.json())
            .then(data => {
                table.clear();
                data.forEach(contact => {
                    table.row.add(contact).draw(false);
                });
            })
            .catch(error => console.error("Error al obtener los datos:", error));

            // Evento para expandir detalles
            $('#clientes-table tbody').on('click', '.expand-btn', function () {
                let tr = $(this).closest('tr');
                let row = table.row(tr);

                if (row.child.isShown()) {
                    row.child.hide();
                    $(this).text('+').removeClass("bg-red-500").addClass("bg-blue-500");
                } else {
                    let contact = row.data();
                    let details = `
                        <div class="p-4 bg-gray-100">
                            <p><strong>Teléfono:</strong> ${contact.telefono}</p>
                            <p><strong>País:</strong> ${contact.pais}</p>
                            <p><strong>Ciudad:</strong> ${contact.ciudad}</p>
                            <p><strong>Mensaje:</strong> ${contact.mensaje}</p>
                            <p><strong>Fecha:</strong> ${contact.fecha}</p>
                        </div>
                    `;
                    row.child(details).show();
                    $(this).text('-').removeClass("bg-blue-500").addClass("bg-red-500");
                }
            });

            // Activar el botón de exportar a Excel
            $('#export-excel').click(function () {
                table.button('.buttons-excel').trigger();
            });
        });


    </script>

</body>
</html>
