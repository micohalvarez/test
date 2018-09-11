<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <div id="mainViewDiv">
            @foreach($projects as $project)
                <tr>
                   <td> Title: </td>
                    <td> {{$project->title}} </td>
                    <td> <a href="/projects/deleteItem/{{$project->id}}"><button>Delete Project</button></a></td>
                    <td> <a href="/projects/editItem/{{$project->id}}"><button>Edit Project</button></a></td>
                </tr>
                @endforeach
                <div>
                @foreach($products as $product)
                <tr>
                   <td> Title: </td>
                    <td> {{$product->title}} </td>
                    <td> <a href="/products/deleteItem/{{$product->id}}"><button>Delete Product</button></a></td>
                    <td> <a href="/products/editItem/{{$product->id}}"><button>Edit Product</button></a></td>
                </tr>
                @endforeach
                </div>

    </div>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/wstyle.css') }}>

    <title>Anteriore</title>
  </head>
  <body>
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src={{ asset('js/jquery-3.3.1.js') }}></script>
     
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>  

  </body>
</html>