<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h1>
                {{$title}}
            </h1>
            {{$text}}
        </div>


        <!-- Pagination -->
        <div class="col-lg-12" style="margin-top: 100px">
            <nav aria-label="...">
                <ul class="pagination">



                    @for ($i = 1; $i <= $pages; $i++)
                        <li
                            @if($i==$currentPage)
                            class="page-item active"
                            @else
                            class="page-item"
                            @endif
                        ><a class="page-link" href="http://127.0.0.1:8000/news/{{$i}}">{{$i}}</a></li>
                    @endfor



                </ul>
            </nav>
        </div>
        <!-- // Pagination -->
    </div>
</div>


</body>
</html>
