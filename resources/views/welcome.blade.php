<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplikasi Dipass</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            height: 100vh;
            margin: 0;

        }

        .full-height {
            height: 100vh;
        }

    </style>
</head>

<body>

    <section class="full-height">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-8">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/undraw_functions_egi3.svg') }}"
                                    class="d-block w-100" alt="..." style="height:70vh">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Pelayanan Terbaik yang selalu kami berikan</p>
                                    <footer class="blockquote-footer">Bidang Pelayanan <cite
                                            title="Source Title"><b>irwan cahyanto</b></cite></footer>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/undraw_Blog_post_re_fy5x.svg') }}"
                                    class="d-block w-100" alt="..." style="height:70vh">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Jaga Kesehatan dan Tetap Menjaga Protokol Kesehatan</p>
                                    <footer class="blockquote-footer">Someone famous in <cite
                                            title="Source Title">Haviz</cite></footer>
                                </blockquote>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/undraw_experience_design_eq3j.svg') }} "
                                    class="d-block w-100" alt="..." style="height:70vh">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Cek Selalu Barang Bawa Anda</p>
                                    <footer class="blockquote-footer">Someone famous in <cite
                                            title="Source Title">Feriyaldi</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev" style="height:70vh">
                            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card text-center" style="padding:10px 20px">
                        @forelse ($counters as $counter)
                        <a href="{{ route('welcome.show', $counter->id) }}" class="btn btn-warning btn-lg mt-2 mb-2" style="text-transform: uppercase"><b>{{ $counter->name }}</b></a> <br>
                        @empty
                        <h3>Kosong</h3>
                        @endforelse
                    </div>
                    <br>
                    <h5 id="clock" style="color: black"></h5>
                </div>
            </div>
        </div>
        </div>
    </section>

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        <!--
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
        //

        -->
    </script>
    <script>
	

</body>

</html>
