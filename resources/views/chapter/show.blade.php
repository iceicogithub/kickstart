@extends('includes.student.main')
@section('title')
    Topics
@endsection
@section('style')
    <style>
        .nav-link {
            color: #5d77a8;
            font-size: medium;
            font-weight: bold;
            line-height: 2;
            z-index: 1;
        }

        .nav-link:hover {
            margin-left: 5px;
            transition: all 0.5s ease-in-out;
            color: #26c5b5;
            text-decoration: underline;
        }

        .tests a::before {
            content: "\f07b";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 5px;
            color: #febc29;
        }

        .main_content .main_content_iner.overly_inner::before {
            height: 110px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Student</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Arithmetic Aptitude</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section starts --}}
    <div class="row mt-3">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <input class="form-control me-2" type="search" id="topicFilter" placeholder="Filter"
                                aria-label="Search">
                        </div>
                    </form>

                    <div class="row" id="filteredTopics">
                        @php $topicsCount = count($topics); @endphp
                        @for ($i = 0; $i < $topicsCount; $i += 2)
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                <div class="card-style-list">
                                    <div class="tests">
                                        <ul id="topicList{{ $i }}">
                                            <li>
                                                <a href="{{ route('chapter.topics', ['id' => $topics[$i]->id, 'topic' => $topics[$i]->topic]) }}"
                                                    class="nav-link">{{ $topics[$i]->topic }}</a>
                                            </li>
                                            @if ($i + 1 < $topicsCount)
                                                <li>
                                                    <a href="{{ route('chapter.topics', ['id' => $topics[$i + 1]->id, 'topic' => $topics[$i + 1]->topic]) }}"
                                                        class="nav-link">{{ $topics[$i + 1]->topic }}</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="card shadow mb-3">
                <div class="card-body">
                    <div class="text-center bg_purple_color mb-3">
                        <h4 class="text-light py-2">Quick Links</h4>
                    </div>
                    @foreach ($category->take(4) as $cat)
                        <div class="mb-3">
                            <h5 class="main-title fw-bold">{{ $cat->category }}</h5>
                            <div class="quick_links">
                                <div class="card-icon mdi-chart-donut-variant">
                                    <ul id="list">
                                        @foreach ($cat->chapters()->take(2)->get() as $chap)
                                            <li>
                                                <a href="{{ route('chapter.topics', ['id' => $chap->id, 'chapter' => $chap->chapter]) }}"
                                                    class="nav-link">{{ $chap->chapter }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection
@section('script')
    <script>
        const topicFilter = document.getElementById('topicFilter');
        const topicLists = document.querySelectorAll('#filteredTopics ul');

        topicFilter.addEventListener('keyup', function() {
            const filterValue = this.value.toLowerCase().trim(); // Case-insensitive and trimmed search term

            topicLists.forEach(topicList => {
                const topicItems = topicList.querySelectorAll('li a'); // Efficiently select all topic links
                let anyItemVisible = false;

                topicItems.forEach(topicItem => {
                    const topicText = topicItem.textContent
                .toLowerCase(); // Case-insensitive search

                    if (topicText.indexOf(filterValue) !== -1) {
                        anyItemVisible = true;
                        topicItem.style.display = ''; // Show matched item
                    } else {
                        topicItem.style.display = 'none'; // Hide unmatched item
                    }
                });

                // Check if any child <li> element is visible
                const parentDiv = topicList.closest(
                    '.col-xxl-6, .col-xl-6, .col-lg-6, .col-md-4, .col-sm-12');
                if (anyItemVisible) {
                    parentDiv.style.display = ''; // Show parent <div>
                } else {
                    parentDiv.style.display = 'none'; // Hide parent <div>
                }
            });
        });
    </script>
@endsection
