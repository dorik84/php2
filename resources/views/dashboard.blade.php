<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class="container">

    <!-- ==========================================education=========================================== -->
        <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Education</p>
            </div>
        </div>
        <table class="table p-0">
            <thead class="table-light">
                <tr>
                    <th scope="col-2">Period</th>
                    <th scope="col-3">School</th>
                    <th scope="col-3">Diploma</th>
                    <th scope="col-2">Location</th>
                    <th scope="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($education as $school)
                <tr>
                    <td>{{$school->time}}</td>
                    <td>{{$school->school}}</td>
                    <td>{{$school->diploma}}</td>
                    <td>{{$school->location}}</td>
                    <td>
                        <form action="/education/{{$school->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                            <a href="/education/{{$school->id }}" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


<!-- ==========================================experience=========================================== -->
        <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Experience</p>
            </div>
        </div>
        <table class="table p-0">
            <thead class="table-light">
                <tr>
                    <th scope="col-2">Period</th>
                    <th scope="col-2">Company</th>
                    <th scope="col-2">Position</th>
                    <th scope="col-2">Location</th>
                    <th scope="col-2">Responsibilities</th>
                    <th scope="col-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experience as $work)
                <tr>
                    <td>{{$work->time}}</td>
                    <td>{{$work->company}}</td>
                    <td>{{$work->position}}</td>
                    <td>{{$work->location}}</td>
                    <td>{{$work->desc}}</td>
                    <td>
                        <form action="/work/{{$work->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                            <a href="/work/{{$work->id}}" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                      
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

<!-- ==========================================skills=========================================== -->
        <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Skills</p>
            </div>
        </div>
        <table class="table p-0">
            <thead class="table-light">
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{$skill->desc}}</td>
                    <td>
                        <form action="/skill/{{$skill->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                            <a href="/skill/{{$skill->id}}" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

<!-- ==========================================qualities=========================================== -->

        <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Qualities</p>
            </div>
        </div>
        <table class="table p-0">
            <thead class="table-light">
                <tr>
                    <th scope="col-9">Description</th>
                    <th scope="col-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($qualities as $quality)
                <tr>
                    <td>{{$quality->desc}}</td>
                    <td>
                        <form action="/quality/{{$quality->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"  class="btn btn-danger btn-sm">Delete</button>
                            <a href="/quality/{{$quality->id}}" class="btn btn-warning btn-sm">Edit</button>
                        </form>

                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
   
    </div>
</x-app-layout>
