<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    
    
<div class="px-4 pt-5 my-5 text-center">
    <h1 class="display-4 fw-bold">Product {{$products['id']}}</h1>
    <h3 class="display-4 fw-bold">${{$products['price']}}</h3>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, culpa! Optio quibusdam alias labore error quos. Quibusdam fuga exercitationem nobis animi nihil aspernatur adipisci labore quis praesentium soluta, officia dicta?
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="/" class="btn btn-primary btn-lg px-4 me-sm-3">Back to Home</a>
      </div>
    </div>
    
  </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>