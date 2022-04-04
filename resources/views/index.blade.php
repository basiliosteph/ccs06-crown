<html>
<head>
    <style>
        h1 {color: #B0C4DE; 
            font-family: garamond;
            font-size: 500%;
            text-align: center;
        }
        h2 {
            color: #B22222;
            font-family: "times new roman";
            font-size: 225%;
            text-align: center;
        }
        h3 {
            color: #6A5ACD;
            font-size: 150%;
            text-align: center;
        }
        a:link {
            color: #4B0082;
            text-align: center;
        }
        body {
            background-color: #FFF0F5;
        }
    </style>
<title> Web Reader </title>
</head>
<body>
<h1> {{ $book_name }} </h1>
<h2> {{ $book_author }} </h2>


@for($i =1; $i <= $number_of_chapters; $i++)
<h3> 
    <a href="/chapter/{{ $i }}">Chapter {{ $i }} </a>
</h3>
@endfor

<h3>
    <a href="/all-chapters"> Read All Chapters </a>
</h3>

</body>
</html>
