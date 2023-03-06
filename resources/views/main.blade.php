<!-- theme header -->
<x-header />

<body>
    <!-- header section start -->
    @include('header.index')
    <!-- header section end -->
    <!-- menu section start -->
    @include('menu.index')
    <!-- menu section end -->
    <!-- main content start -->
    <div class="row mt-3">
        <!-- sidebar start -->
        <div class="col-3">
            <!-- today-page-index start -->
            @include('sidebar.today-page')
            <!-- today-page-index end -->
        </div>
        <!-- sidebar end -->
        <!-- content body start -->
        <div class="col-9 page-layout p-2">
            <!-- page-menu start -->
            @include('menu.page_menu')
            <!-- page-menu end -->

            <!-- news page content header start -->
            <div class="row">
                <div class="news-page-content-header d-flex justify-content-center mt-2">
                    <div class="col">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('Assets/img/paper-header.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- news page content header end -->

            <!-- news page content body start -->
            <div class="row">
                <!-- 1st row start -->
                <div class="news-page-content-body d-flex justify-content-center mt-2">
                    @foreach($firstRow as $key=> $news)
                    <div class="col">
                        <a href="#">
                            <img class="" src="{{asset('')}}{{$news->newsData}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- 1st row end -->
            </div>
            <div class="row">
                <!-- 2nd row start -->
                <div class="news-page-content-body d-flex justify-content-center mt-2">
                    @foreach($secondtRow as $key=> $news)
                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img class="" src="{{asset('')}}{{$news->newsData}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- 2nd row end -->
            </div>
            <div class="row">
                <!-- 3rd row start -->
                <div class="news-page-content-body d-flex justify-content-center mt-2">
                    @foreach($thirdRow as $key=> $news)
                    <div class="col">
                        <a href="#">
                            <img class="" src="{{asset('')}}{{$news->newsData}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- 3rd row end -->
            </div>
            <!-- news page content body end -->
        </div>
        <!-- content body end -->

    </div>
    <!-- main content end -->


     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                   <h1>this is modal menu</h1>
                </div>
            </div>
        </div>
    <!-- theme footer -->
    <x-footer />