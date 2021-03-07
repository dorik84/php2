<x-layout>
    <div class="container p-1">
        <header class="row col bg-warning rounded">
            <div class="col-4 col-lg-3 col-md-3 col-sm-4 col-xs-4 px-5" >
                <i class="bi bi-person-bounding-box" style="font-size:130px"></i>
            </div>
            <div class="col-4  pt-4">
                <h5>Oleksandr Doroshchuk</h5>
                <p>email: w0436283@nscc.ca</p>
                <p>git: github.com/dorik84</p>
                <p>portfolio: o-doroshchuk.ca</p>
            </div>
            <div class="col-4  pt-4">

                <p>I am an NSCC student, currently studying IT Web Programming at Truro Campus to become a valuable full stack developer. With thirteen years of experience in various fields under my belt, I have accumulated many different useful skills that are likely to be useful in my career.</p>

            </div>
        </header>

     
        <div class="row ">
            <div class="col">
                @isset($data['educ_list'])
                <div class="card m-1" >
                    <div class="card-header list-group-item-primary">
                    <p class="fs-3">Education</p>
                    </div>
                    
                    <ul class="list-group list-group-flush">
                    @foreach ($data['educ_list'] as $educ)
                        <li class="list-group-item ">
                        <p class='fst-italic'>{{$educ->time}}
                        <p class="fw-bold">{{$educ->school}}
                        <p class="fw-bold">{{$educ->diploma}}
                        <p class="fst-italic">{{$educ->location}}
                        </li>
                        <li class="list-group-item list-group-item-secondary" ></li>
                    @endforeach
                    </ul>
                </div>
                @endisset

                @isset($data['skill_list'])
                <div class="card  m-1" >
                    <div class="card-header list-group-item-primary">
                        <p class="fs-3">Skills</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                        @foreach ($data['skill_list'] as $skill)
                        <p class="fw-light"><i class="bi bi-dot"></i>{{$skill->desc}}</p>
                        @endforeach
                    </li>
                    </ul>
                </div>
                @endisset

                @isset($data['qual_list'])
                <div class="card  m-1" >
                    <div class="card-header list-group-item-primary">
                        <p class="fs-3">Qualities</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ">
                        @foreach ($data['qual_list'] as $qual)
                                <p class="fw-light"><i class="bi bi-dot"></i>{{$qual->desc}}</P>
                        @endforeach
                        </li>
                    </ul>
                </div>
                @endisset

            </div>


            <div class="col">
                @isset($data['exp_list'])
                <div class="card  m-1" >
                    <div class="card-header list-group-item-primary">
                    <p class="fs-3">Experience</p>
                    </div>
                    
                    <ul class="list-group list-group-flush">
                    @foreach ($data['exp_list'] as $work)
                        <li class="list-group-item ">
                        <p class='fst-italic'>{{$work->time}}</p>
                        <p class="fw-bold">{{$work->company}}</p>
                        <p class="fw-bold">{{$work->position}}</p>
                        <p class="fw-light">{{$work->desc}}</p>
                        <p class="fst-italic">{{$work->location}}</p>
                        </li>
                        <li class="list-group-item list-group-item-secondary" ></li>
                    @endforeach
                    </ul>
                </div>
                @endisset

               

            </div>
        </div>

        <footer class="row col bg-warning rounded d-flex justify-content-center">
        <h1 class="col-4 pt-1">
            <a href="http://github.com/dorik84"><i class="bi bi-github"></i> </a>
            <a href="mailto:w0436283@nscc.ca"><i class="bi bi-envelope-fill"></i></a>
            <a href="http://o-doroshchuk.ca"><i class="bi bi-briefcase-fill"></i></a>
        </h1>
        </footer>
        <a href="{{ url()->previous() }}" class="btn btn-primary m-3">Back</a>

    </div>
</x-layout>