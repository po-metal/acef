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
        $('#btn-search-clientes').click(function (e) {
            $('#input-text-search').slideToggle(100);
        });

        $('#list-search-clientes').btsListFilter('#input-text-search', {
            loadingClass: 'loading',
            sourceTmpl: '<a class="list-group-item" href="/acef/manager-cliente/main/{id}"><span>{razonSocial}</span></a>',
            sourceData: function (text, callback) {
                $('#list-search-clientes').html('<div><img src="img/loading.gif"/></div>');
                return $.getJSON('/acef/manager-cliente/get-clientes/' + text, function (json) {
                    
                    console.log(json);
                    callback(json);
                });
            }
        });

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

