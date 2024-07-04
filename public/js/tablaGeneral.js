    new gridjs.Grid({
        pagination: true,
        search: true,
        sort: true,
        from: document.getElementById('tablaGeneral'),
        language: {
            'search': {
                'placeholder': 'Buscar'
            },
            'pagination': {
                'previous': 'Anterior',
                'next': 'Siguiente',
                'showing': 'Mostrando',
                'results': () => 'Registros'
            }
        }
    }).render(document.getElementById('table-wraper'));