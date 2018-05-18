$(document).ready(function () {
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    //validaciones cliente submit
    $("input,select,textarea").not("[type=submit], [id*=Tmp]").jqBootstrapValidation({
        submitError: function () {
            $('html,body').animate({scrollTop: 0}, 'slow');
        }
    });

    if ($("#PublicacionContenido").length > 0) {
        tinymce.init({
            selector: "textarea#PublicacionContenido",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

        });
    }

});
