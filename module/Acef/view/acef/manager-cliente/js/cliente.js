(function () {
    $(document).on('ready', function () {
        var clienteId = $('#clienteId').text();
        if (clienteId) {
            $.get("/acef/manager-cliente/productos/" + clienteId).done(function (data) {
                $("#productos-content").html(data);
            });

            $.get("/acef/manager-cliente/bitacoras/" + clienteId).done(function (data) {
               $("#bitacora-content").html(data);
            });
        }

    });

})();

function submitFormCliente(clienteId) {
    var data = $('#Cliente').serialize();
    $.post("/acef/manager-cliente/editar-cliente/" + clienteId, data).done(function (data) {
        $("#cliente-content").html(data);
    });
}

function verCliente(clienteId) {
    $.get("/acef/manager-cliente/ver-cliente/" + clienteId).done(function (data) {
        $("#cliente-content").html(data);
    });
}

function editarCliente(clienteId) {
    $.get("/acef/manager-cliente/editar-cliente/" + clienteId).done(function (data) {
        $("#cliente-content").html(data);
    });
}