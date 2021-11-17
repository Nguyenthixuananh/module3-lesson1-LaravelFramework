<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form action="/display-discount" method="post">
    @csrf
    <input type="text" placeholder="Enter Product Description" name="description">
    <input type="text" placeholder="Enter List Price" name="price">
    <input type="text" placeholder="Enter Discount Percent" name="percent">
    <button type="submit">Submit</button>
</form>
</body>
</html>
