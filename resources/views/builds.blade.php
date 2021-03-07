<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="container-fluid">

        @foreach ($builds as $cv)
        <div class="card m-1 my-3">
        <header class="row col bg-warning rounded">
            <h5 class="p-1">Name: {{$cv->name}}</h5>
            <h5 class="p-1">Email: {{$cv->email}}</h5>
            <h5 class="p-1">Created at: {{$cv->created_at}}</h5>
        </header>
            @php
                $options = json_decode($cv->options);
                $educ_list = json_decode($cv->options)->educ_list ?? null;
                $skill_list = json_decode($cv->options)->skill_list ?? null;
                $qual_list = json_decode($cv->options)->qual_list ?? null;
                $exp_list = json_decode($cv->options)->exp_list ?? null;

            @endphp
            
           

        
            <div class="row ">
                <div class="col">
                    @if('$educ_list'!== null)
                    <div class="card m-1" >
                        <div class="card-header list-group-item-primary">
                        <p class="fs-3">Education</p>
                        </div>
                        
                        <ul class="list-group list-group-flush">
                        @foreach ($educ_list as $educ)
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
                    @endif

                
                    @isset($skill_list)
                    <div class="card  m-1" >
                        <div class="card-header list-group-item-primary">
                            <p class="fs-3">Skills</p>
                        </div>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item ">
                            @foreach ($skill_list as $skill)
                            <p class="fw-light"><i class="bi bi-dot"></i>{{$skill->desc}}</p>
                            @endforeach
                        </li>
                        </ul>
                    </div>
                    @endisset

                    @isset($qual_list)
                    <div class="card  m-1" >
                        <div class="card-header list-group-item-primary">
                            <p class="fs-3">Qualities</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item ">
                            @foreach ($qual_list as $qual)
                                    <p class="fw-light"><i class="bi bi-dot"></i>{{$qual->desc}}</P>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                    @endisset

                </div>


                <div class="col">
                    @isset($exp_list)
                    <div class="card  m-1" >
                        <div class="card-header list-group-item-primary">
                        <p class="fs-3">Experience</p>
                        </div>
                        
                        <ul class="list-group list-group-flush">
                        @foreach ($exp_list as $work)
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
        </div>
        @endforeach
    </div>
</x-app-layout>
