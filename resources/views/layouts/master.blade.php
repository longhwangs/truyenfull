<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 9x</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
        rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="wrap">
        @section('navigation')
            <x-navigation/>
        @show

        @section('content')
            <div class="container-fluid bg-body comic-hot-wrap">
                <div class="container-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>TRUYEN HOT</p>
                        </div>
                        <div class="col-sm-6">
                            <p>TAT CA</p>
                        </div>
                    </div>
                    <div class="row comic-hot-content">
                        <div class="col-sm-3">
                            <a href="">
                                <img src="https://cdn.truyenfull.com/medias/covers/0/1-mat-ma-tay-tang_cover_large.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-sm-9 list-top">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-2">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/13/13140-legendary-moonlight-sculptor-con-duong-de-vuong_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-body new-update">
                <div class="container-content">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>TRUYEN MOI CAP NHAT</p>
                                </div>
                                <div class="col-sm-6">
                                    <p>TAT CA</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">Re Ho Hao Mon</div>
                                <div class="col-sm-3">Ngon tinh</div>
                                <div class="col-sm-2">Chuong 12</div>
                                <div class="col-sm-2">1 gio truoc</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">Re Ho Hao Mon</div>
                                <div class="col-sm-3">Ngon tinh</div>
                                <div class="col-sm-2">Chuong 12</div>
                                <div class="col-sm-2">1 gio truoc</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">Re Ho Hao Mon</div>
                                <div class="col-sm-3">Ngon tinh</div>
                                <div class="col-sm-2">Chuong 12</div>
                                <div class="col-sm-2">1 gio truoc</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">Re Ho Hao Mon</div>
                                <div class="col-sm-3">Ngon tinh</div>
                                <div class="col-sm-2">Chuong 12</div>
                                <div class="col-sm-2">1 gio truoc</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">Re Ho Hao Mon</div>
                                <div class="col-sm-3">Ngon tinh</div>
                                <div class="col-sm-2">Chuong 12</div>
                                <div class="col-sm-2">1 gio truoc</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <p>THE LOAI TRUYEN</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">Tien Hiep</div>
                                <div class="col-sm-6">Kiem Hiep</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-body comic-complete">
                <div class="container-content">
                    <div class="row">
                        <p>TRUYEN DA HOAN THANH</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                                <div class="col-sm-3 item">
                                    <a href=""><img src="https://cdn.truyenfull.com/medias/covers/32/32727-a-ly_cover_large.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer  -->

            <div class="container-fluid bg-body footer">
                <div class="container-content">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Website Truyện Full - là trang đọc truyện chữ online hàng đầu Việt Nam với nhiều thể loại truyện đam mỹ, truyện ngôn tình, truyện sắc chọn lọc dành cho độc giả yêu thích.</p>
                        </div>
                        <div class="col-sm-7">Tags</div>
                    </div>
                </div>
            </div>
        @show
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</html>
