
$(document).ready(function () {
    window.patientSearch = new patientSearch();
});

function patientSearch() {
    this.requestAutocomplete = function (request, response) {
        jsonrpcWrapper('/desk/patients/jsonrpc', 'patientsAutocomplete', {
                'request': request
            },
            function (xhr, status) {
                answer = xhr.responseJSON.result;

                window.clientSearch.responseAutocomplete(answer.search_mode, answer.found_list);

                response(answer.found_list);
            });
    };

    this.selectItem = function (a, b) {
        $('.patient_id_value').val(b.item.id);
    };


}