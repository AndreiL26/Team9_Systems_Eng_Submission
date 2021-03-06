<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="con">
        <form action="video_chk.php" method="post" enctype="multipart/form-data" id="form">
            <div class="form-group">
                <label>Title</label>
                <div class="col">
                    <input type="text" name="title" required>
                </div>
            </div>
            <div class="form-group">
                <label>Source</label>
                <div class="col">
                    <input type="text" name="source">
                </div>
            </div>
            <div class="form-group">
                <label>Duration</label>
                <div class="col">
                    <input type="text" name="duration" required>
                </div>
            </div>
            <div class="form-group">
                <label>Date</label>
                <div class="col">
                    <input type="datetime-local" name="create_time">
                </div>
            </div>

            <div class="form-group">
                <label>Video Cover</label>
                <div class="col">
                    <input type="file" name="video_cover">
                </div>
            </div>
            <div class="form-group">
                <label>Video</label>
                <div class="col" style="position: relative">
                    <input type="file" name="video" class="video">
                    <div class="progress"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="submit">
                    <input type="hidden" value="add" name="action">
                    <input type="submit" name="submit" value="submit">
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
        $(function () {
            $('input[type="submit"]').on('click', function () {
                if($('input[name="duration"]').val() && $('input[name="title"]').val()){
                    if($('.video').val()){
                        $('.progress').show();
                    }
                }
            });
        });
    </script>
</body>
</html>