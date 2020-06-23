<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>AGES</title>

    <meta name="description" content="Drag &amp; drop file upload with image preview" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


    <link rel="shortcut icon" href="{$url_base}public/assets/images/logo/logo.gif" type="image/x-icon" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{$url_base}public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{$url_base}public/assets/css/dropzone.min.css" />


    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{$url_base}public/assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/chosen.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/bootstrap-colorpicker.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{$url_base}public/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{$url_base}public/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{$url_base}public/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{$url_base}public/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="{$url_base}public/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{$url_base}public/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{$url_base}public/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <link href="{$url_base}public/assets/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">

    <!--[if lte IE 8]>
    <script src="{$url_base}public/assets/js/html5shiv.min.js"></script>
    <script src="{$url_base}public/assets/js/respond.min.js"></script>
    <![endif]-->

    <script src="{$url_base}public/assets/editors/tinymce/tinymce/js/tinymce/tinymce.js"></script>
    <script src="{$url_base}public/assets/editors/tinymce/js/tinymce/tinymce.dev.js"></script>
    <script src="{$url_base}public/assets/editors/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
    <script src="{$url_base}public/assets/editors/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
    <script src="{$url_base}public/assets/editors/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    {literal}
    <script>
        tinymce.init ({selector: 'textarea.editeur',
        plugins: "fullscreen advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker image emoticons table save textcolor media insertdatetime",
        height: 500,
        toolbar: "insertfile undo redo | bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect table | emoticons image media| preview print fullscreen fullpage insertdatetime "


        });


        if (!window.console) {
            console = {
                log: function(text) {
                    document.body.appendChild(document.createTextNode(text));
                    document.body.appendChild(document.createElement('br'));
                }
            };
        }

        tinymce.init ({selector: 'textarea.Basicediteur',
        plugins: "fullscreen advlist lists charmap hr pagebreak textcolor insertdatetime",
        height: 100,
        toolbar: " undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | fullscreen insertdatetime "


        });

        tinymce.init ({selector: 'textarea.simplediteur',
        plugins: " advlist lists charmap hr insertdatetime",
        height: 150,
        width:180


        });
        tinymce.init ({selector: 'input.nulditeur',
        plugins: " advlist lists charmap hr insertdatetime",
        height:10,
        width:300,
        toolbar: " undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | insertdatetime "


        });
        tinymce.init ({selector: 'textarea.zeroditeur',
        toolbar: "undo redo"

        });
        if (!window.console) {
            console = {
                log: function(text) {
                    document.body.appendChild(document.createTextNode(text));
                    document.body.appendChild(document.createElement('br'));
                }
            };
        }
    </script>
    {/literal}
    <script src="{$url_base}public/assets/editors/ckeditor/ckeditor.js"></script>

    <link rel="stylesheet" type="text/css" href="{$url_base}public/assets/DataTables/media/css/jquery.dataTables.min.css">
    
</head>