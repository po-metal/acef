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

        $('#input-text-search').keypress(function () {
            console.log('oka');
            $('#list-search-clientes').html('<h2>Cargando...</h2>').fadeToggle(10);
            $('#list-search-clientes').html('');
        });


        $('#list-search-clientes').btsListFilter('#input-text-search', {
            loadingClass: 'loading',
            sourceTmpl: '<a class="list-group-item" href="/acef/manager-cliente/main/{id}"><span>{razonSocial}</span></a>',
            cancelNode: function () {
                return '<span class="btn btn-link form-control-feedback" style="margin-right:10px; margin-top:2px; color:#7C7C80" aria-hidden="true"><b>X</b></span>';
            },
            sourceData: function (text, callback) {
                return $.getJSON('/acef/manager-cliente/get-clientes/' + text, function (json) {
                    $('#list-search-clientes').html('');
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

