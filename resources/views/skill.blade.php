<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>

    <div class=" container-fluid col  col-sm-12 col-md-9 col-lg-7">

    <div class="card p-0 mt-5">
            <div class="card-header bg-success">
                <p class="fs-4 text-white">Skills</p>
            </div>
        </div>

    <form method="post" action="/skill/{{$skill->id}}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" value=" {{ old('name')  ?? $skill->name}}">
        </div>
        @error('name' )
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea type="text" name='desc' rows="3" class="form-control @error('desc') is-invalid @enderror" required>{{ old('desc')  ?? $skill->desc}}</textarea>
        </div>

        @error( 'desc', )
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard" class="btn btn-primary">Back</a>
    </form>
   
    </div>
</x-app-layout>
