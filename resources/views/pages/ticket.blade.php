<html>
<head>
	<title>{{ $counter->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body >

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card text-center">
                    <div class="card-header">
                        <p  style="text-transform: uppercase;">NO ANTRIAN {{ $counter->name }}</p>
                    </div>
                    <div class="card-body">

                        <h1><b>{{ $count->number_que }} </b></h1>
                        <h5><b>{{ $count->created_at }} </b></h5>
                    </div>
                    <div class="card-foo">
                        <h5 style="text-transform: uppercase;">{{ $count->category->name }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script>
	$(document).ready(function () {
        window.print();
        //setTimeout(function () { window.location.href = "/" }, 10);

    });
	</script>

</body>
</html>
