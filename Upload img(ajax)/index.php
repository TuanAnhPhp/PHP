<html>
    <head>
        <title>Ajax Image Upload FreeTutHay Blog</title>
        <meta charset="utf-8" />
    </head>

    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.form.js"></script>

    <script type="text/javascript" >
        $(document).ready(function () {
            $('#photoimg').live('change', function () {
                $("#preview").html('');
                $("#preview").prepend('<img id="loading" src="loader.gif" alt="Uploading...."/>');
                $("#imageform").ajaxForm({
                    success: showResponse
                }).submit();

            });
        });
        function showResponse(response) {
            console.log(response);
            $('#loading').hide();
            $("#preview").prepend(response);
            $('#UploadFile').css('float', 'right');
        }
    </script>

    <style>

        body
        {
            font-family:arial;
        }
        #preview
        {
            height: 150px;
            width: 140px;
            border: solid 1px #dedede;
            padding: 10px;
            margin-left: 10px;

        }
        #preview
        {
            color:#cc0000;
            font-size:12px
        }
        .fileUpload {
            position: absolute;
            overflow: hidden;
            background-color: #FCFBFB;
            height: 150px;
            width: 140px;
            text-align: center;
        }
        .custom-span {
            font-family: Arial;
            font-weight: bold;
            font-size: 100px;
            color: #FE57A1;
        }
        .custom-para {
            font-family: arial;
            font-weight: bold;
            font-size: 24px;
            color: #585858;
        }
        .photoimg{
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            height: 100%;
            text-align: center;
        }

    </style>
    <body>
        <div style="width:600px;margin: auto">
            <form id="imageform" method="post" enctype="multipart/form-data" action='doajax.php'>
                <div style="padding: 10px">Chọn hình ảnh cần upload</div>
                <div style="width: 200px">
                    <div id='preview' style="float: left">
                    </div>
                    <div id="UploadFile" style="margin: 10px;">
                        <div class="fileUpload">
                            <span id="c1" class="custom-span" style="margin: 0px -40px;position: absolute;">+</span>
                            <p id="c2" class="custom-para" style="margin-top: 120px;position: absolute;">Thêm ảnh</p>
                            <input id="photoimg" name="photoimg" type="file" class="photoimg">
                        </div>
                    </div>
                </div>
            </form> 
        </div>
</html>