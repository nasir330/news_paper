<section class="mt-3">
        <nav class="navbar navbar-expand-lg bg-danger p-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">প্রচ্ছদ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> আমাদের সম্পর্কে </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> আমাদের পরিবার </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> বিজ্ঞাপনের মূল্য </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> যোগাযোগ করুন </a>
                        </li>

                    </ul>
                    <div class="datetime d-flex">
                        <span> <i class="fa-solid fa-calendar-days"></i></span>
                        <span>
                            {{Carbon\Carbon::parse(now())->toFormattedDateString()}}
                        </span>

                    </div>
                </div>
            </div>
        </nav>
    </section>