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

            <!-- news page content layout start -->
            <div class="row flex-row">
                <div class="news-page-content-layout">
                    <div class="row">
                        <!-- news page content header start -->
                        @include('news_content.page_content_header')
                        <!-- news page content header end -->
                    </div>
                    <!-- news page content body start -->
                    <div class="row">
                        <div class="news-page-content-body d-flex">
                            <div class="row d-flex  news-box-row">
                                <div class="flex-shrink news-box-item bg-danger">

                                </div>
                                <div class="flex-shrink news-box-item bg-info">

                                </div>
                                <div class="flex-shrink news-box-item bg-warning">

                                </div>
                                <div class="flex-shrink news-box-item bg-primary">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- news page content body end -->
                </div>
            </div>
            <!-- news page content layout start -->

        </div>
        <!-- content body end -->

    </div>
    <!-- main content end -->


    <!-- theme footer -->
    <x-footer />