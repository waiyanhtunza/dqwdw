<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('ideas.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <textarea class="form-control" name="idea" id="idea" rows="3"></textarea>
            @error('idea')
                <span class="d-block fs-6 mt-2 text-danger">{{$message}}</span>
            @enderror
            
        </div>
        <div class="">
            <button class="btn btn-dark" type="submit"> Share </button>
        </div>
    </form>
</div>