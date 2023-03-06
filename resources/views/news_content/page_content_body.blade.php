<div class="news-page-content-body">
    <!-- 1st row start -->
    <div class="d-flex flex-row news-box-row">
        @foreach($firstRow as $key=> $news)
        <div class="col news-box-item">
            <a href="#">
                <img class="" src="{{asset('')}}{{$news->newsData}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
    <!-- 1st row end -->
    <!-- 2nd row start -->
    <div class="d-flex flex-row news-box-row">
        @foreach($secondtRow as $key=> $news)
        <div class="col news-box-item">
            <a href="#">
                <img class="" src="{{asset('')}}{{$news->newsData}}" alt="">
            </a>
        </div>
        @endforeach
    </div>
    <!-- 2nd row end -->
</div>