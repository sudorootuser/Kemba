$(document).ready(function () {

    function showPopup() {
        $('.pop-up').addClass('show');
        $('.pop-up-wrap').addClass('show');

        $("#close").click(function () {
            $('.pop-up').removeClass('show');
            $('.pop-up-wrap').removeClass('show');
        });

        $(".btn-abrir").click(openForm);
    }

    function openForm() {

        $('.pop-up').removeClass('show');
        $('.pop-up-wrap').removeClass('show');

        setTimeout(showForm, 500);
    }

    function showForm() {
    
        $('.pop-up-form').addClass('show');
        $('.pop-up-wrap-form').addClass('show');

        $("#close-form").click(function () {
            $('.pop-up-form').removeClass('show');
            $('.pop-up-wrap-form').removeClass('show');
        });
    };

    setTimeout(showPopup, 2000);
  
});
