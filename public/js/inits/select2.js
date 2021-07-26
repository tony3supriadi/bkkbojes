$(function () {
    $('.select2-basic').select2({
        theme: "bootstrap-5",
    });

    $('.select2-nosearch').select2({
        theme: "bootstrap-5",
        minimumResultsForSearch: -1
    });
})