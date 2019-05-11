"use strict";

$(document).ready(function () {
    $("textarea.editor-cls").wysihtml5({
        toolbar: {
            "fa": true
        }
    });
    if ($.fn.summernote !== undefined) {

        $('#summernote').summernote({
            height: 300
        });
    }
    $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100
    });
    $("#summernote").summernote();
    $('.note-link-url').on('keyup', function () {
        if ($('.note-link-text').val() != '') {
            $('.note-link-btn').attr('disabled', false).removeClass('disabled');
        }
    });
    $.trumbowyg.svgPath = 'vendors/trumbowyg/css/ui/icons.svg';
    $("#split_editor").trumbowyg(
        {
            svgPath: false,
            hideButtonTexts: true
        }
    );
    jQuery.trumbowyg.langs.fr = {
        _dir: "ltr", // This line is optionnal, but usefull to override the `dir` option

        bold: "Gras",
        close: "Fermer"
    };

    if ($(window).width() < 700) {
        $("<br>").insertAfter(".summer_noted .dropdown-menu li .btn-group");
    }
    $(".note-icon-arrows-alt").on('click',function () {

        $(".note-editor .note-toolbar-wrapper").addClass('note-format');

    });
});