<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class=" container-fluid col  col-sm-12 col-md-9 col-lg-7">

    <div class="card p-0 mt-5">
        <div class="card-header bg-success">
            <p class="fs-4 text-white">Experience</p>
        </div>
    </div>

    <form method="post" action="/work/{{$work->id}}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label  class="form-label">Period</label>
            <input type="text" name='time' class="form-control @error('time') is-invalid @enderror" value=" {{ old('time')  ?? $work->time}}" >
        </div>
        @error('time')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">Company</label>
            <input type="text" name='company' class="form-control @error('company') is-invalid @enderror" value="{{ old('company')  ?? $work->company}}" >
        </div>
        @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">Position</label>
            <input type="text" name='position' class="form-control form-control @error('position') is-invalid @enderror" value="{{$work->position}}" >
        </div>
        @error('position')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea rows="4" name='desc' class="form-control form-control @error('decription') is-invalid @enderror"  required>{{$work->desc}}</textarea>
        </div>
        @error('desc')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">Location</label>
            <input type="text" name='location' class="form-control form-control @error('location') is-invalid @enderror" value="{{$work->location}}" >
        </div>
        @error('location')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror



        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard" class="btn btn-primary">Back</a>
    </form>
   
    </div>
</x-app-layout>
