$(document).ready(function(){
    $('#myTable').DataTable({
        "dom": '<"top"f>rt<"bottom"lp><"clear">',
        "pagingType":"simple",
        oLanguage: {
            oPaginate: {
               sNext: '<span class="pagination-default"></span><span class="pagination-fa"><i class="fa fa-chevron-right" ></i></span>',
            sPrevious: '<span class="pagination-default"></span><span class="pagination-fa"><i class="fa fa-chevron-left" ></i></span>'
            }
        },
        language: {
            info: '',
            infoEmpty: 'Aucun enregistrement disponible',
            infoFiltered: '',
            lengthMenu: '  Afficher _MENU_ entités',
            zeroRecords: 'Rien trouvé - désolé',
            search: 'Recherche: ',

        },

    })
})
/*
new DataTable('#myTable', {
    "dom": '<"top"f>rt<"bottom"lp><"clear">',
    language: {
        info: '',
        infoEmpty: 'Aucun enregistrement disponible',
        infoFiltered: '',
        lengthMenu: '  Afficher _MENU_ entités',
        zeroRecords: 'Rien trouvé - désolé',
        search: 'Recherche: ',

    },
"pagingType":"simple",


});*/
