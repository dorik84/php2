
<div class="form-group col-6 p-1" >
    <button type="button" class="btn btn-success w-100" aria-expanded="false">
        {{$title}}
    </button>

    <select class="form-select form-select-lg mb-3" multiple name="{{$name}}[]" style="height:300px">
    @foreach ($data as $option)

        <option value="{{$option->id}}">{{$option->title}}</option>

    @endforeach
    </select>
</div>
