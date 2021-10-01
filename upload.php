<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to File Uploader</title>
    <link href="./img/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page"
    style="background-image: url('./img/back.jpg'); background-attachment:fixed; background-size:cover;">
    <section class="h-100">
        <div class="container h-100">
            <div class="row">
            </div>
            <div class="col-md-12" style="margin-top:1rem">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper" style="margin:auto">
                        <div>
                            <img src="img/upload.png">
                        </div>
                        <div class="card fat">
                            <div class="card-body">
                                <h4 class="card-title">Upload File To Google Drive</h4>
                                <form method="post" action="drive_upload.php" enctype="multipart/form-data">
                                    <div class="form-group" style="margin-top: 20px;">
                                        <input type="file" class="form-control-file" name="uploadfile"
                                            style="margin-left: 7rem; padding:1rem">
                                    </div>
                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Upload to Drive
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            Copyright &copy; Google Drive File Uploader
        </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>