$( document ).ready(function() {


    $.trumbowyg.svgPath = '/ddcms/public/js/trumbowyg/dist/ui/icons.svg';
    
    //trumbowyg
    $('textarea').trumbowyg({
        prefix: 'trumbowyg-',
        lang: 'de'
    });    


});