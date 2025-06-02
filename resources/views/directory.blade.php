<html lang="ru">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h3 class="text-danger">storage/@if(isset($dir)){{$dir}}@endif
</h3>
<table class="table table-primary table-striped">
    @foreach($dirs as $url => $dir)
        <tr>
            <td class='text-primary'>
                <a href="{{route('directory',$url)}}">{{$dir}}</a>
            </td>
        </tr>
    @endforeach

    @if(!empty($files))
            @foreach($files as $file)
                <tr>
                    <td class='text-success'>
                        {{$file}}
                    </td>
                </tr>
            @endforeach
        @endif


</table>
</body>
</html>





