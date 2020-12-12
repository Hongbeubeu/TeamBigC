<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Create post</h3>
        <hr>
        <div class="form">
            <form action="/status" method="POST" enctype="multipart/form-data">
                <input type="text" name="caption" placeholder="What do you mind" />
                <br>
                <br>
                <input type="file" name="fileToUpload[]" multiple="multiple" />
                <br>
                <br>
                <input type="hidden" name="userId" value="<?php echo $this->vars[0]; ?>" />
                <input type="submit" name="submit" value="Post" />
            </form>
        </div>
    </div>
</body>

</html>