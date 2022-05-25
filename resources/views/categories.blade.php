@extends('layouts.app')


@section('css-link')
    <link rel="stylesheet" href="http://localhost/webBackend/resources/css/app.css">
@endsection


@section('title-block')
    Statistics
@endsection
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Habitory</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="stye.css">
    </head>
    <body>
    <section class="home">
        <div class="main2">
            <div class="navcontent">
                <div style="display: block;" data onshow="20" id="mainbooks1" class="tab-item">
                    <div class="line-one">
                        <div class="wooklist">
                            <ul class="minibook">
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/dart.png">
                                                <p class="cwl">GOALS</p>
                                                </i>
                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">Set goals and keep track of progress with calendars and charts</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/calendar.png">
                                                <p class="cwl">CALENDARS</p>

                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">Check the achievement status of each rule and the overall input status.</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/bar-chart.png">
                                                <p class="cwl">CHARTS</p>

                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">Progress is displayed as a charts. It also generates images for social media.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/data.png">
                                                <p class="cwl">SORT</p>

                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">You can sort your rules freely.</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/input.png">
                                                <p class="cwl"> Input types</p>

                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">Record with check or numerical value. Numeric values can include units.</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-filter-class="['notread']">
                                    <div class="wrap">
                                        <div class="info-wr">
                                            <div class="img">
                                                <img src="http://localhost/webBackend/resources/images/pencil.png">
                                                <p class="cwl">Pictures and notes</p>

                                            </div>
                                            <div class="book_info clearfix">
                                                <p class="date_add">Supports recording of pictures and memos as notes.</p>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </section>
@endsection
