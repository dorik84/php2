<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class=" container-fluid col  col-sm-12 col-md-9 col-lg-7">

        <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Education</p>
            </div>
        </div>

        <form method="post" action="/education/{{$school->id}}">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label  class="form-label">Period</label>
                <input type="text" name='time' class="form-control @error('time') is-invalid @enderror" value=" {{ old('time')  ?? $school->time}}">
            </div>
            @error('time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label  class="form-label">School</label>
                <input type="text" name='school' class="form-control @error('school') is-invalid @enderror" value="{{ old('school')  ?? $school->school}}" >
            </div>
            @error('school')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label  class="form-label">Diploma</label>
                <input type="text" name='diploma' class="form-control form-control @error('diploma') is-invalid @enderror" value="{{ old('diploma')  ?? $school->diploma}}" >
            </div>
            @error('diploma')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label  class="form-label">Location</label>
                <input type="text" name='location' class="form-control form-control @error('location') is-invalid @enderror" value="{{ old('location')  ?? $school->location}}" >
            </div>
            @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/dashboard" class="btn btn-primary">Back</a>
        </form>
   
    </div>
</x-app-layout>
