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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fifth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Store</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach($categories as $category)
                        <a class="nav-link" href="#">{{$category}}</a>

                        @endforeach
                        <li class="nav-item">

                        </li>


                    </ul>

                </div>

            </div>
        </nav>

        
    </div>

    <main class="container p-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mb-3 text-center">
            @foreach($products as $product)
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-white bg-primary border-primary">
                        <h4 class="my-0 fw-normal">{{$product['id']}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">${{$product['price']}}</h1>
                        <p class="h3">{{$product['name']}}</p>
                        <a href="/product-details/{{$product['id']}}" class="w-100 btn btn-lg btn-outline-primary">Show Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </main>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>