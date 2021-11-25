<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  

    <title>Test </title>
  </head>
  <body>
    <h1>QR Code generate</h1>

 
  <div class="input-group mb-3">

  <input type="text" class="form-control" name="title"  aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
</div>
      {!! QrCode::size(100)->generate('learning-points.in') !!}
  </body>
</html>