
<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
</head>
<body>
<form action="/save" enctype="multipart/form-data" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="file" name="image">
    <input type="submit" value="upload">
</form>
</body>
</html>