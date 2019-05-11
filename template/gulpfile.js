var gulp = require("gulp");
var bower = require("gulp-bower");
var uncss = require('gulp-uncss');
var elixir = require("laravel-elixir");
var del = require("del");

gulp.task('bower', function () {
    return bower();
});

//delete files and folders

gulp.task('delete', function () {
    del.sync([
        '!css', '!css/.gitignore',
        '!fonts', '!fonts/.gitignore',
        '!images', '!images/.gitignore',
        '!img', '!img/.gitignore',
        '!js', '!js/.gitignore',
        '!vendors', '!vendors/.gitignore'

    ]);
});


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 */
//over-riding laravel-elixir configuration
config.assetsPath = 'src';
config.publicPath = '';

//source path configuration
var vendors = 'src/vendors/';
var nodevendors = 'node_modules/';
var resourcesAssets = 'src/';
var srcCss = resourcesAssets + 'css/';
var srcJs = resourcesAssets + 'js/';

//destination path configuration
var dest = '';
var destFonts = dest + 'fonts/';
var destCss = dest + 'css/';
var destJs = dest + 'js/';
var destImg = dest + 'img/';
var destVendors = dest + 'vendors/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendors resources.
 |
 */
var paths = {
    'animate': nodevendors + 'animate.css/',
    'fileUpload': nodevendors + 'blueimp-file-upload/',
    'imgLoad': nodevendors + 'blueimp-load-image/',
    'bootstrap': nodevendors + 'bootstrap/dist/',
    'blueimpgallery': nodevendors + 'blueimp-gallery-with-desc/',
    'blueimpcanvas': nodevendors + 'blueimp-canvas-to-blob/',
    'blueimptmpl': nodevendors + 'blueimp-tmpl/',
    'touchspin': nodevendors + 'bootstrap-touchspin/dist/',
    'wysihtml5': nodevendors + 'bootstrap3-wysihtml5-bower/dist/',
    'daterangepicker': nodevendors + 'bootstrap-daterangepicker/',
    'magnify': nodevendors + 'bootstrap-magnify/',
    'maxlength': nodevendors + 'bootstrap-maxlength/src/',
    'multiselect': nodevendors + 'bootstrap-multiselect/dist/',
    'switch': nodevendors + 'bootstrap-switch/dist/',
    'jvectormap': nodevendors + 'bower-jvectormap/',
    'buttons': nodevendors + 'Buttons/',
    'chartjs': nodevendors + 'chart.js/dist/',
    'clockface': nodevendors + 'clockface.js/',
    'fontawesome': nodevendors + 'font-awesome/',
    'flotchart': nodevendors + 'flotchart/',
    'flotspline': nodevendors + 'flot-spline/js/',
    'flottooltip': nodevendors + 'jquery.flot.tooltip/js/',
    'countUp': vendors + 'countUp.js/dist/',
    'dataTables': vendors + 'datatables/media',
    'fancybox': nodevendors + 'fancybox/',
    'gmaps': nodevendors + 'gmaps/',
    'holderjs': nodevendors + 'holderjs/',
    'jquery': vendors + 'jquery/',
    'inputmask': nodevendors + 'inputmask/dist/',
    'knob': nodevendors + 'jquery-knob/js/',
    'select2': nodevendors + 'select2/dist/',
    'selectize': nodevendors + 'selectize/dist/',
    'datetimepicker': nodevendors + 'eonasdan-bootstrap-datetimepicker/build/',
    'fullcalendar': nodevendors + 'fullcalendar/dist/',
    'summernote': nodevendors + 'summernote/dist/',
    'icheck': nodevendors + 'iCheck/',
    'jasnyBootstrap': nodevendors + 'jasny-bootstrap/dist/',
    'toastr': nodevendors + 'toastr/',
    'bootstrapValidator': nodevendors + 'bootstrapvalidator/dist/',
    'select2BootstrapTheme': nodevendors + 'select2-bootstrap-theme/dist/',
    'c3': nodevendors + 'c3/',
    'jqueryui': nodevendors + 'components-jqueryui/',
    'colorpicker': nodevendors + 'bootstrap-colorpicker/dist/',
    'moment': nodevendors + 'moment/',
    'nestable': nodevendors + 'nestable/',
    'trumbowyg': nodevendors + 'trumbowyg/dist/',
    'transitionize': vendors + 'transitionize/dist',
    'twtrBootstrapWizard': nodevendors + 'twitter-bootstrap-wizard/',
    'underscore': nodevendors + 'underscore/',
    'wysihtml5x': vendors + 'wysihtml5x/dist/',
    'xeditable': nodevendors + 'X-editable/dist/',
    'nestablelist': nodevendors + 'nestable/',
    'datatables' : nodevendors + 'datatables.net/',
    'datatablesbs4' : nodevendors + 'datatables.net-bs4/',
    'datatablesbutton' : nodevendors + 'datatables.net-buttons/',
    'datatablesbuttonsbs4' : nodevendors + 'datatables.net-buttons-bs4/',
    'datatablescolreorder' : nodevendors + 'datatables.net-colreorder/',
    'datatablescolreorderbs4' : nodevendors + 'datatables.net-colreorder-bs4/',
    'datatablesresponsive' : nodevendors + 'datatables.net-responsive/',
    'datatablesrowreorder' : nodevendors + 'datatables.net-rowreorder/',
    'datatablesrowreorderbs4' : nodevendors + 'datatables.net-rowreorder-bs4/',
    'datatablesscroll' : nodevendors + 'datatables.net-scroller/',
    'datatablesscrollbs4' : nodevendors + 'datatables.net-scroller-bs4/',

    'tablednd': nodevendors + 'tablednd/',
    'datepicker': vendors + 'bootstrap-datepicker/dist/',
    'jqvmap': nodevendors + 'jqvmap/',
    'jquerymockjax': nodevendors + 'jquery-mockjax/dist/',
    'raphael': nodevendors + 'raphael/',
    'pickadate': vendors + 'pickadate/lib/',
    'microplugin': vendors + 'microplugin/src/',
    'hover': nodevendors + 'hover.css/css/',
    'd3': nodevendors + 'd3/',
    'd3v4': nodevendors + 'd3v4/',
    'morrisjs': nodevendors + 'morris.js/',
    'wow': nodevendors + 'wowjs/dist/',
    'metisMenu': nodevendors + 'metismenu/dist/',
    'countupcircle': nodevendors + 'CoutUpCircle/',
    'nvd3': nodevendors + 'nvd3/',
    'bootstrapfileinput': nodevendors + 'bootstrap-fileinput/',
    'clockpicker': nodevendors + 'clockpicker/dist/',
    'chartist': nodevendors + 'chartist/dist/',
    'datedropper': nodevendors + 'datedropper/',
    'timedropper': nodevendors + 'timedropper/',
    'countdown': vendors + 'jquery.countdown/dist/',
    'jquerydaterangepicker': nodevendors + 'jquery-date-range-picker/dist/',
    'toolbar': nodevendors + 'toolbar/',
    'selectric': nodevendors + 'selectric/public/',
    'granim': nodevendors + 'granim/dist/',
    'datetime': nodevendors + 'jquery-datetimepicker/',
    'dropify': nodevendors + 'dropify/dist/',
    'gridforms': nodevendors + 'gridforms/gridforms/',
    'pnotify': nodevendors + 'pnotify/',
    'awesomebootstrapcheckbox': nodevendors + 'awesome-bootstrap-checkbox/',
    'airdatepicker': nodevendors + 'air-datepicker/dist/',
    'prettycheckable': nodevendors + 'prettyCheckable/',
    'bootstrapcalendar': vendors + 'bootstrap-calendar/',
    'jquerylabel': nodevendors + 'labelauty/source/',
    'dimple': nodevendors + 'dimple/dist/',
    'imagehover': nodevendors + 'imagehover/css/',
    'editable': nodevendors + 'editable/',
    'amcharts': nodevendors + 'amcharts/dist/',
    'bootstraptable': nodevendors + 'bootstrap-table/dist/',
    'tableExportjqueryplugin': nodevendors + 'tableexport.jquery.plugin/',
    'markjs': nodevendors + 'mark.js/dist/',
    'datatablesmarkjs': nodevendors + 'datatables.mark.js/dist/',
    'gridstack': nodevendors + 'gridstack/dist/',
    'lodash': nodevendors + 'lodash/',
    'laddabootstrap': nodevendors + 'ladda-bootstrap/dist/',
    'sweetalert2': nodevendors + 'sweetalert2/dist/',
    'insignia': nodevendors + 'insignia/dist/',
    'leaflet': nodevendors + 'leaflet/dist/',
    'simplelineicons': nodevendors + 'simple-line-icons/',
    'cssgram': nodevendors + 'cssgram/source/',
    'weathericons': nodevendors + 'weather-icons/',
    'newsticker': nodevendors + 'jquery-advanced-news-ticker/',
    'slimmenu': nodevendors + 'slimmenu/dist/'
};

elixir.config.sourcemaps = false;

elixir(function (mix) {

    // Run bower install
    mix.task('bower');

    //delete all files first
    mix.task('delete');

    //copy start

// Copy fonts straight to public
    mix.copy(paths.bootstrap + 'js/bootstrap.min.js', destJs);
    mix.copy(paths.bootstrap + 'css/bootstrap.min.css', destCss);
    mix.copy(paths.fontawesome + 'fonts', destFonts);

//COPY CSS,JS AND IMAGES TO PUBLIC
    mix.copy(srcCss, destCss, false);
    mix.copy(resourcesAssets + 'img', destImg, false);
    mix.copy(srcJs, destJs, false);
    mix.copy(resourcesAssets + 'data', dest + 'chart_data');

//slimmenu
    mix.copy(paths.slimmenu + 'css/slimmenu.min.css', destVendors + 'slimmenu/css');
    mix.copy(paths.slimmenu + 'js/jquery.slimmenu.min.js', destVendors + 'slimmenu/js');

// weather icon
    mix.copy(paths.weathericons + 'css/weather-icons.min.css', destVendors + 'weathericon/css');
    mix.copy(paths.weathericons + 'font', destVendors + 'weathericon/font');

//advanced news ticker
    mix.copy(paths.newsticker + 'jquery.newsTicker.js', destVendors + 'advanced_newsTicker/js');
// mix.copy(paths.newsticker + 'css/newsticker.css', destVendors + 'advanced_newsTicker/css');

//chartist
    mix.copy(paths.chartist + 'chartist.min.css', destVendors + 'chartist/css');
    mix.copy(paths.chartist + 'chartist.min.js', destVendors + 'chartist/js');

//gridstack
    mix.copy(paths.gridstack + 'gridstack.min.css', destVendors + 'gridstack/css');
    mix.copy(paths.gridstack + 'gridstack.js', destVendors + 'gridstack/js');
    mix.copy(paths.gridstack + 'gridstack.jQueryUI.js', destVendors + 'gridstack/js');


// laddabootstrap
    mix.copy(paths.laddabootstrap + 'ladda-themeless.min.css', destVendors + 'laddabootstrap/css');
    mix.copy(paths.laddabootstrap + 'spin.min.js', destVendors + 'laddabootstrap/js');
    mix.copy(paths.laddabootstrap + 'ladda.min.js', destVendors + 'laddabootstrap/js');

//leaflet
    mix.copy(paths.leaflet + 'leaflet.css', destVendors + 'leaflet/css');
    mix.copy(paths.leaflet + 'images', destVendors + 'leaflet/css/images');
    mix.copy(paths.leaflet + 'leaflet-src.js', destVendors + 'leaflet/js');

//lodash
    mix.copy(paths.lodash + 'lodash.min.js', destVendors + 'lodash/js');

// dimple
    mix.copy(paths.dimple + 'dimple.latest.min.js', destVendors + 'dimple/js');
    mix.copy(paths.d3v4 + 'build/d3.min.js', destVendors + 'd3v4');

// amcharts
    mix.copy(paths.amcharts + 'amcharts/plugins/export/export.css', destVendors + 'amcharts/css');
    mix.copy(paths.amcharts + 'amcharts/amcharts.js', destVendors + 'amcharts/js');
    mix.copy(paths.amcharts + 'amcharts/serial.js', destVendors + 'amcharts/js');
    mix.copy(paths.amcharts + 'amcharts/plugins/export/export.min.js', destVendors + 'amcharts/js');
    mix.copy(paths.amcharts + 'amcharts/themes/light.js', destVendors + 'amcharts/js');

// insignia
    mix.copy(paths.insignia + 'insignia.css', destVendors + 'insignia/css');
    mix.copy(paths.insignia + 'insignia.js', destVendors + 'insignia/js');

//gridforms
    mix.copy(paths.gridforms + 'gridforms.css', destVendors + 'gridforms/css');
    mix.copy(paths.gridforms + 'gridforms.js', destVendors + 'gridforms/js');

//cssgram
    mix.copy(paths.cssgram + 'css', destVendors + 'cssgram/css');

//jquery date range picker
    mix.copy(paths.jquerydaterangepicker + 'daterangepicker.min.css', destVendors + 'jquerydaterangepicker/css');
    mix.copy(paths.jquerydaterangepicker + 'jquery.daterangepicker.min.js', destVendors + 'jquerydaterangepicker/js');

//pnotify
// pnotify css
    mix.copy(paths.pnotify + 'src/pnotify.css', destVendors + 'pnotify/css');
    mix.copy(paths.pnotify + 'dist/pnotify.brighttheme.css', destVendors + 'pnotify/css');
    mix.copy(paths.pnotify + 'dist/pnotify.buttons.css', destVendors + 'pnotify/css');
    mix.copy(paths.pnotify + 'dist/pnotify.mobile.css', destVendors + 'pnotify/css');
    mix.copy(paths.pnotify + 'dist/pnotify.history.css', destVendors + 'pnotify/css');

// pnotify js
    mix.copy(paths.pnotify + 'dist/pnotify.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.animate.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.buttons.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.confirm.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.nonblock.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.mobile.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.desktop.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.history.js', destVendors + 'pnotify/js');
    mix.copy(paths.pnotify + 'dist/pnotify.callbacks.js', destVendors + 'pnotify/js');

//granim
    mix.copy(paths.granim + 'granim.min.js', destVendors + 'granim/js');

//jquery-labelauty
    mix.copy(paths.jquerylabel + 'jquery-labelauty.js', destVendors + 'jquerylabel/js');
    mix.copy(paths.jquerylabel + 'jquery-labelauty.css', destVendors + 'jquerylabel/css');
    mix.copy(paths.jquerylabel + 'images', destVendors + 'jquerylabel/css/images');

//dropify
    mix.copy(paths.dropify + 'css/dropify.css', destVendors + 'dropify/css');
    mix.copy(paths.dropify + 'js/dropify.js', destVendors + 'dropify/js');
    mix.copy(paths.dropify + 'fonts', destVendors + 'dropify/fonts');

// Sweet Alert
    mix.copy(paths.sweetalert2 + 'sweetalert2.min.css', destVendors + 'sweetalert2/css');
    mix.copy(paths.sweetalert2 + 'sweetalert2.min.js', destVendors + 'sweetalert2/js');

// toolbar
    mix.copy(paths.toolbar + 'jquery.toolbar.css', destVendors + 'toolbar/css');
    mix.copy(paths.toolbar + 'jquery.toolbar.min.js', destVendors + 'toolbar/js');

// air datepicker
    mix.copy(paths.airdatepicker + 'css/datepicker.min.css', destVendors + 'airdatepicker/css');
    mix.copy(paths.airdatepicker + 'js/datepicker.min.js', destVendors + 'airdatepicker/js');
    mix.copy(paths.airdatepicker + 'js/i18n/datepicker.en.js', destVendors + 'airdatepicker/js');

// selectric
    mix.copy(paths.selectric + 'selectric.css', destVendors + 'selectric/css');
    mix.copy(paths.selectric + 'jquery.selectric.min.js', destVendors + 'selectric/js');

// awesomebootstrapcheckbox
    mix.copy(paths.awesomebootstrapcheckbox + 'awesome-bootstrap-checkbox.css', destVendors + 'awesomebootstrapcheckbox/css');
    mix.copy(paths.awesomebootstrapcheckbox + 'demo/build.css', destVendors + 'awesomebootstrapcheckbox/css');


// datedropper
    mix.copy(paths.datedropper + 'datedropper.css', destVendors + 'datedropper');
    mix.copy(paths.datedropper + 'datedropper.js', destVendors + 'datedropper');
    mix.copy(paths.datedropper + 'dd-icon', destVendors + 'datedropper/dd-icon');

// timedropper
    mix.copy(paths.timedropper + 'timedropper.css', destVendors + 'timedropper/css');
    mix.copy(paths.timedropper + 'timedropper.js', destVendors + 'timedropper/js');

//imagehover
    mix.copy(paths.imagehover + 'imagehover.min.css', destVendors + 'imagehover/css');

//mark.js
    mix.copy(paths.markjs + 'jquery.mark.js', destVendors + 'mark_js/js');

//datatables.mark.js
    mix.copy(paths.datatablesmarkjs + 'datatables.mark.min.js', destVendors + 'datatablesmark.js/js');
    mix.copy(paths.datatablesmarkjs + 'datatables.mark.min.css', destVendors + 'datatablesmark.js/css');

//nvd3
    mix.copy(paths.nvd3 + 'build/nv.d3.min.css', destVendors + 'nvd3/css');
    mix.copy(paths.nvd3 + 'build/nv.d3.min.js', destVendors + 'nvd3/js');

//pretty Checkable
    mix.copy(paths.prettycheckable + 'dist/prettyCheckable.css', destVendors + 'prettycheckable/css');
    mix.copy(paths.prettycheckable + 'dist/prettyCheckable.min.js', destVendors + 'prettycheckable/js');
    mix.copy(paths.prettycheckable + 'img/sprites-sfa68604977.png', destVendors + 'prettycheckable/img');

// bootstrap-calendar
    mix.copy(paths.bootstrapcalendar + 'css/calendar.min.css', destVendors + 'bootstrap-calendar/css');
    mix.copy(paths.bootstrapcalendar + 'js/calendar.min.js', destVendors + 'bootstrap-calendar/js');
    mix.copy(paths.bootstrapcalendar + 'js/language', destVendors + 'bootstrap-calendar/js/language');
    mix.copy(paths.bootstrapcalendar + 'tmpls', destVendors + 'bootstrap-calendar/tmpls');
    mix.copy(paths.bootstrapcalendar + 'img', destVendors + 'bootstrap-calendar/img');

//editable-table
    mix.copy(paths.editable + 'mindmup-editabletable.js', destVendors + 'editable-table/js');

//bootstrap-table
    mix.copy(paths.bootstraptable + 'bootstrap-table.min.css', destVendors + 'bootstrap-table/css');
    mix.copy(paths.bootstraptable + 'bootstrap-table.min.js', destVendors + 'bootstrap-table/js');

// underscore
    mix.copy(paths.underscore + 'underscore-min.js', destVendors + 'underscore/js');

//clockpicker
    mix.copy(paths.clockpicker + 'bootstrap-clockpicker.min.css', destVendors + 'clockpicker/css');
    mix.copy(paths.clockpicker + 'bootstrap-clockpicker.min.js', destVendors + 'clockpicker/js');

// daterange picker
    mix.copy(paths.daterangepicker + 'daterangepicker.js', destVendors + 'daterangepicker/js');
    mix.copy(paths.daterangepicker + 'daterangepicker.css', destVendors + 'daterangepicker/css');

// metis menu
    mix.copy(srcJs + 'metisMenu.js', destJs);

// jquery file upload
    mix.copy(paths.fileUpload + 'css/jquery.fileupload.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.fileUpload + 'css/jquery.fileupload-ui.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.fileUpload + 'css/jquery.fileupload-noscript.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.fileUpload + '/css/jquery.fileupload-ui-noscript.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.fileUpload + 'js/vendor/jquery.ui.widget.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.iframe-transport.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-process.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-image.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-image.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-audio.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-video.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-validate.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'js/jquery.fileupload-ui.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.fileUpload + 'img/loading.gif', destVendors + 'blueimp-file-upload/img');
    mix.copy(paths.fileUpload + 'img/loading.gif', dest + 'img');

// blueimp-tmpl
    mix.copy(paths.blueimptmpl + 'js/tmpl.min.js', destVendors + 'blueimp-tmpl/js');

// blueimp-load-image
    mix.copy(paths.imgLoad + 'js/load-image.all.min.js', destVendors + 'blueimploadimage/js');
    mix.copy(paths.imgLoad + 'js/load-image.js', destVendors + 'blueimploadimage/js');

// blueimp-canvas-to-blob
    mix.copy(paths.blueimpcanvas + 'js/canvas-to-blob.min.js', destVendors + 'blueimp-canvas-to-blob/js');

// blueimp-gallery-with-desc
    mix.copy(paths.blueimpgallery + 'css/blueimp-gallery.min.css',  destVendors + 'blueimpgallery/css');
    mix.copy(paths.blueimpgallery + 'js/jquery.blueimp-gallery.min.js',  destVendors + 'blueimpgallery/js');
    mix.copy(paths.blueimpgallery + 'img',  destVendors + 'blueimpgallery/img',false);

// //fancybox
// mix.copy(paths.fancybox + 'source', destVendors + 'fancybox', false);
    mix.copy(paths.fancybox + 'dist/js/jquery.fancybox.js', destVendors + 'fancybox/css');
    mix.copy(paths.fancybox + 'dist/css/jquery.fancybox.css', destVendors + 'fancybox/css');
    mix.copy(paths.fancybox + 'dist/img', destVendors + 'fancybox/img');



    mix.copy(paths.fancybox + 'lib/jquery.mousewheel.pack.js', destVendors + 'fancybox/js');
    mix.copy(paths.fancybox + 'dist/js/jquery.fancybox.js', destVendors + 'fancybox/js');
    mix.copy(paths.fancybox + 'dist/helpers/js/jquery.fancybox-buttons.js', destVendors + 'fancybox/js');


//jasny-bootstrap
    mix.copy(paths.jasnyBootstrap + 'css/jasny-bootstrap.css', destVendors + 'jasny-bootstrap/css');
    mix.copy(paths.jasnyBootstrap + 'js/jasny-bootstrap.js', destVendors + 'jasny-bootstrap/js');

// bootstrap3-wysihtml5-bower
    mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.min.css', destVendors + 'bootstrap3-wysihtml5-bower/css');
    mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.all.min.js', destVendors + 'bootstrap3-wysihtml5-bower/js');
    mix.copy(paths.wysihtml5 + 'bootstrap3-wysihtml5.min.js', destVendors + 'bootstrap3-wysihtml5-bower/js');

// summer note
    mix.copy(paths.summernote + 'summernote-bs4.css', destVendors + 'summernote');
    mix.copy(paths.summernote + 'summernote-bs4.js', destVendors + 'summernote');
    mix.copy(paths.summernote + 'font', destVendors + 'summernote/font');


// datetime
    mix.copy(paths.datetime + 'jquery.datetimepicker.css', destVendors + 'datetime/css');
    mix.copy(paths.datetime + 'build/jquery.datetimepicker.full.min.js', destVendors + 'datetime/js');

// bootstrap-fileinput
    mix.copy(paths.bootstrapfileinput + 'css/fileinput.css', destVendors + 'bootstrap-fileinput/css/');
    mix.copy(paths.bootstrapfileinput + 'js/fileinput.js', destVendors + 'bootstrap-fileinput/js/');
    mix.copy(paths.bootstrapfileinput + 'img/loading.gif', destVendors + 'bootstrap-fileinput/img');
    mix.copy(paths.bootstrapfileinput + 'themes/fa/theme.js', destVendors + 'bootstrap-fileinput/js');



// trumbowyg
    mix.copy(paths.trumbowyg + 'ui/trumbowyg.min.css', destVendors + 'trumbowyg/css');
    mix.copy(paths.trumbowyg + 'trumbowyg.js', destVendors + 'trumbowyg/js');

    mix.copy(paths.trumbowyg + 'ui/icons.svg', destVendors + 'trumbowyg/css/ui');

// bootstrapvalidator
    mix.copy(paths.bootstrapValidator + 'css/bootstrapValidator.min.css', destVendors + 'bootstrapvalidator/css');
    mix.copy(paths.bootstrapValidator + 'js/bootstrapValidator.min.js', destVendors + 'bootstrapvalidator/js');

//select2
    mix.copy(paths.select2 + 'css/select2.min.css', destVendors + 'select2/css');
    mix.copy(paths.select2 + 'js/select2.js', destVendors + 'select2/js');
    mix.copy(paths.select2 + 'js/select2.full.js', destVendors + 'select2/js');

    mix.copy(paths.select2BootstrapTheme + 'select2-bootstrap.css', destVendors + 'select2/css');

//selectize
    mix.copy(paths.selectize + 'css/selectize.css', destVendors + 'selectize/css');
    mix.copy(paths.selectize + 'css/selectize.bootstrap3.css', destVendors + 'selectize/css');
    mix.copy(paths.selectize + 'js/selectize.min.js', destVendors + 'selectize/js');
    mix.copy(paths.selectize + 'js/standalone/selectize.min.js', destVendors + 'selectize/js/standalone');

//icheck
    mix.copy(paths.icheck + 'icheck.js', destVendors + 'iCheck/js');
    mix.copy(paths.icheck + 'skins/', destVendors + 'iCheck/css', false);

//hover
    mix.copy(paths.hover + 'hover-min.css', destVendors + 'hover/css');

// countUp js
// mix.copy(paths.countUp + 'countUp.js', destVendors + 'countUp.js/js');

//countupcircle
    mix.copy(paths.countupcircle + 'jquery.countupcircle.js', destVendors + 'countupcircle/js');


// moment
    mix.copy(paths.moment + 'min/moment.min.js', destVendors + 'moment/js');

// bootstrap-datetimepicker
    mix.copy(paths.datetimepicker + 'css/bootstrap-datetimepicker.min.css', destVendors + 'datetimepicker/css');
    mix.copy(paths.datetimepicker + 'js/bootstrap-datetimepicker.min.js', destVendors + 'datetimepicker/js');

// clockface
    mix.copy(paths.clockface + 'css/clockface.css', destVendors + 'clockface/css');
    mix.copy(paths.clockface + 'js/clockface.js', destVendors + 'clockface/js');

// Buttons
    mix.copy(paths.buttons + 'css/buttons.css', destVendors + 'Buttons/css');
    mix.copy(paths.buttons + 'showcase/js/scrollto.js', destVendors + 'Buttons/js');
    mix.copy(paths.buttons + 'js/buttons.js', destVendors + 'Buttons/js');


// bootstrap color picker
    mix.copy(paths.colorpicker + 'css/bootstrap-colorpicker.min.css', destVendors + 'colorpicker/css');
    mix.copy(paths.colorpicker + 'js/bootstrap-colorpicker.min.js', destVendors + 'colorpicker/js');
    mix.copy(paths.colorpicker + 'img/bootstrap-colorpicker', destVendors + 'colorpicker/img/bootstrap-colorpicker');

// // toastr
    mix.copy(paths.toastr + 'build/toastr.min.css', destVendors + 'toastr/css');
    mix.copy(paths.toastr + 'build/toastr.min.js', destVendors + 'toastr/js');

// bootstrap touchspin
    mix.copy(paths.touchspin + 'jquery.bootstrap-touchspin.css', destVendors + 'bootstrap-touchspin/css');
    mix.copy(paths.touchspin + 'jquery.bootstrap-touchspin.js', destVendors + 'bootstrap-touchspin/js');

// bootstrap multiselect
    mix.copy(paths.multiselect + 'css/bootstrap-multiselect.css', destVendors + 'bootstrap-multiselect/css');
    mix.copy(paths.multiselect + 'js/bootstrap-multiselect.js', destVendors + 'bootstrap-multiselect/js');

// bootstrap switch
    mix.copy(paths.switch+'css/bootstrap3/bootstrap-switch.css', destVendors + 'bootstrap-switch/css');
    mix.copy(paths.switch+'js/bootstrap-switch.js', destVendors + 'bootstrap-switch/js');

// animate
    mix.copy(paths.animate + 'animate.min.css', destVendors + 'animate');

// knob
    mix.copy(paths.knob + 'jquery.knob.js', destVendors + 'jquery-knob/js');

// // datatables
// mix.copy(paths.datatables + 'js/jquery.dataTables.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbs + 'js/dataTables.bootstrap.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbs + 'css/dataTables.bootstrap.css', destVendors + 'datatables/css');
// mix.copy(paths.datatablesbutton + 'js/buttons.print.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbutton + 'js/dataTables.buttons.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbsbuttons + 'css/buttons.bootstrap.css', destVendors + 'datatables/css');
// mix.copy(paths.datatablesbsbuttons + 'js/buttons.bootstrap4.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablescolreorder + 'js/dataTables.colReorder.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablescolreorderbs + 'css/colReorder.bootstrap4.css', destVendors + 'datatables/css');
// mix.copy(paths.datatablesresponsive + 'js/dataTables.responsive.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesrowreorder + 'js/dataTables.rowReorder.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbutton + 'js/buttons.html5.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbutton + 'js/buttons.colVis.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesrowreorderbs + 'css/rowReorder.bootstrap4.css', destVendors + 'datatables/css');
// mix.copy(paths.datatablesscroll + 'js/dataTables.scroller.js', destVendors + 'datatables/js');
// mix.copy(paths.datatablesscrollbs + 'css/scroller.bootstrap4.css', destVendors + 'datatables/css');

//datatables
    mix.copy(paths.datatables + 'js/jquery.dataTables.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbs4 + 'js/dataTables.bootstrap4.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbs4 + 'css/dataTables.bootstrap4.css',  destVendors + 'datatables/css');
    mix.copy(paths.datatablesbutton + 'js/buttons.print.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbutton + 'js/dataTables.buttons.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbuttonsbs4 + 'css/buttons.bootstrap4.css',  destVendors + 'datatables/css');
    mix.copy(paths.datatablesbuttonsbs4 + 'js/buttons.bootstrap4.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablescolreorder + 'js/dataTables.colReorder.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablescolreorderbs4 + 'css/colReorder.bootstrap4.css',  destVendors + 'datatables/css');
    mix.copy(paths.datatablesresponsive + 'js/dataTables.responsive.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesrowreorder + 'js/dataTables.rowReorder.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbutton + 'js/buttons.html5.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbutton + 'js/buttons.colVis.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesbutton + 'js/buttons.print.min.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesrowreorderbs4 + 'css/rowReorder.bootstrap4.css',  destVendors + 'datatables/css');
    mix.copy(paths.datatablesscroll + 'js/dataTables.scroller.js',  destVendors + 'datatables/js');
    mix.copy(paths.datatablesscrollbs4 + 'css/scroller.bootstrap4.css',  destVendors + 'datatables/css');


// flot charts
    mix.copy(paths.flotchart + 'jquery.flot.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.stack.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.crosshair.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.time.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.selection.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.symbol.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.resize.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.categories.js', destVendors + 'flotchart/js');
    mix.copy(paths.flotchart + 'jquery.flot.pie.js', destVendors + 'flotchart/js');
    mix.copy(paths.flottooltip + 'jquery.flot.tooltip.js', destVendors + 'flot.tooltip/js');
    mix.copy(paths.flotspline + 'jquery.flot.spline.min.js', destVendors + 'flotspline/js');

// Chart.js
    mix.copy(paths.chartjs + 'Chart.js', destVendors + 'chartjs/js');

// fullcalendar
    mix.copy(paths.fullcalendar + 'fullcalendar.css', destVendors + 'fullcalendar/css');
    mix.copy(paths.fullcalendar + 'fullcalendar.print.css', destVendors + 'fullcalendar/css');
    mix.copy(paths.fullcalendar + 'fullcalendar.min.js', destVendors + 'fullcalendar/js');

// // bootstrap-datepicker
// mix.copy(paths.datepicker + 'js/bootstrap-datepicker.js', destVendors + 'bootstrap-datepicker/js');
// mix.copy(paths.datepicker + 'css/bootstrap-datepicker.css', destVendors + 'bootstrap-datepicker/css');


    mix.copy(paths.tablednd + 'dist/jquery.tablednd.js',  destVendors + 'tablednd/js');

// gmaps
    mix.copy(paths.gmaps + 'examples/examples.css', destVendors + 'gmaps/css');
    mix.copy(paths.gmaps + 'gmaps.min.js', destVendors + 'gmaps/js');


//  bower-jvectormap
    mix.copy(paths.jvectormap + 'jquery-jvectormap-1.2.2.css', destVendors + 'bower-jvectormap/css');
    mix.copy(paths.jvectormap + 'jquery-jvectormap-1.2.2.min.js', destVendors + 'bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js');
    mix.copy(paths.jvectormap + 'jquery-jvectormap-world-mill-en.js', destVendors + 'bower-jvectormap/js/jquery-jvectormap-world-mill-en.js');

//jvector map
    mix.copy(paths.jqvmap + 'dist/jquery.vmap.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/jqvmap.css', destVendors + 'jqvmap/css');
    mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.world.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.usa.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.europe.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.germany.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/jquery.vmap.russia.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/continents/jquery.vmap.asia.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/continents/jquery.vmap.north-america.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/continents/jquery.vmap.south-america.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'dist/maps/continents/jquery.vmap.australia.js', destVendors + 'jqvmap/js');
    mix.copy(paths.jqvmap + 'examples/js/jquery.vmap.sampledata.js', destVendors + 'jqvmap/js');

//c3 charts
    mix.copy(paths.c3 + 'c3.min.css', destVendors + 'c3');
    mix.copy(paths.c3 + 'c3.min.js', destVendors + 'c3');
    mix.copy(paths.d3 + 'd3.min.js', destVendors + 'd3');
    mix.copy(paths.morrisjs + 'morris.css', destVendors + 'morrisjs/');
    mix.copy(paths.morrisjs + 'morris.min.js', destVendors + 'morrisjs/');

//jquery input-mask
    mix.copy(paths.inputmask, destVendors + 'inputmask', false);

// bootstrap-maxlength
    mix.copy(paths.maxlength + 'bootstrap-maxlength.js', destVendors + 'bootstrap-maxlength/js');

//imgmagnify
    mix.copy(paths.magnify + 'css/bootstrap-magnify.min.css', destVendors + 'bootstrap-magnify/css');
    mix.copy(paths.magnify + 'js/bootstrap-magnify.js', destVendors + 'bootstrap-magnify/js');


// session timeout page
    mix.copy(srcJs + 'jquery.sessionTimeout.min.js', destJs);

// x-editable
    mix.copy(paths.xeditable + 'bootstrap3-editable/css/bootstrap-editable.css', destVendors + 'x-editable/css');
    mix.copy(paths.xeditable + 'bootstrap3-editable/js/bootstrap-editable.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'bootstrap3-editable/img', destVendors + 'x-editable/img');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css', destVendors + 'x-editable/css');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/typeaheadjs.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'inputs-ext/address/address.js', destVendors + 'x-editable/js');

// jquery-mockjax
    mix.copy(paths.jquerymockjax + 'jquery.mockjax.js', destVendors + 'jquery-mockjax/js');

//tableExport.jquery.plugin
    mix.copy(paths.tableExportjqueryplugin + 'tableExport.min.js', destVendors + 'tableExport/');

//nestable list page
    mix.copy(paths.nestablelist + 'jquery.nestable.js', destVendors + 'nestable-list/jquery.nestable.js');

//simple-line-icons
    mix.copy(paths.simplelineicons + 'css/simple-line-icons.css', destVendors + 'simple-line-icons/css/simple-line-icons.css');
    mix.copy(paths.simplelineicons + 'fonts', destVendors + 'simple-line-icons/fonts');

//form wizard page
    mix.copy(paths.twtrBootstrapWizard + 'jquery.bootstrap.wizard.js', destVendors + 'bootstrapwizard/js');
    mix.copy(paths.twtrBootstrapWizard + 'bootstrap/js/bootstrap.min.js', destVendors + 'bootstrapwizard/js');

//  default layout page
    mix.copy(paths.jqueryui + 'jquery-ui.min.js', destJs);
    mix.copy(paths.raphael + 'raphael.min.js', destJs);
    mix.copy(paths.holderjs + 'holder.js', destJs);
    mix.copy(paths.holderjs + 'holder.min.js', destJs);

// wow
    mix.copy(paths.wow + 'wow.min.js', destVendors + 'wow/js');


    //sass compilation
    mix.sass('bootstrap/bootstrap.scss', 'css/bootstrap.css');
    mix.sass('buttons/buttons.scss', 'css/buttons_sass.css');
    mix.sass('custom.scss', 'css/custom.css');


    // Custom Styles


    gulp.task('uncss', function () {
        //medical
        return gulp.src([
            'src/sass/custom.scss'
        ])
            .pipe(uncss({
                html: ['**/*.html']
            }))
            .pipe(gulp.dest('./out'));

    });


    // Custom Styles
    //black color scheme
    mix.styles(
        [
            '../../css/bootstrap.css',
            '../../node_modules/font-awesome/css/font-awesome.min.css',
            '/custom_css/metisMenu.css'
        ], destCss + 'app.css');


    // all global js files into app.js
    mix.scripts(
        [
            '../../node_modules/popper.js/dist/umd/popper.js',
            '../../node_modules/jquery/dist/jquery.min.js',
            '../../node_modules/components-jqueryui/jquery-ui.min.js',
            '../../node_modules/bootstrap/dist/js/bootstrap.min.js',
            'custom_js/leftmenu.js',
            'metisMenu.js',
            'custom_js/rightside_bar.js',
            '../../node_modules/holderjs/holder.min.js'
        ], destJs + 'app.js');


});
