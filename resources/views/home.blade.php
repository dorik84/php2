
    <x-layout>
    
        <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <form class="container  col p-3" method="POST" action="/">
            @csrf
   
            <h4>Tell me who this resume is for?</h4>
            <div class="col-3 mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-3 mb-3">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


         
            
            <h4>What interests you?</h4>
            <div class=" row">
                <x-resume-dropdown title="Education" name="education" :data="$education"/>
                <x-resume-dropdown title="Experience" name="experience" :data="$experience"/>
            
            </div>
            <div class=" row">
                <x-resume-dropdown title="Skills" name="skill" :data="$skills"/>
                <x-resume-dropdown title="Qualities" name="quality" :data="$qualities"/>
            </div>
            <button type="submit" class="btn btn-primary">Build Resume</button>
            
            <a href="/refresh" class="btn btn-danger">Start Over</button>
        </form>

        </x-layout>

