@extends('template/main')

@section('content')

<div class="container mt-5 bg-dark">
    <h1 style="text-decoration: underline" class="text-warning">Edit team: </h1>
    {{-- validate --}}
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form action="/teams/{{$edit->id}}" method="POST" class="bg-dark text-warning">
      @csrf
      @method('PATCH')
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" id="name" name="name" value="">
        </div>
        <div class="form-group">
          <label for="country">Country</label>
          <input class="form-control" type="text" id="country" name="country" value="">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input class="form-control" type="text" id="city" name="city" value="">
        </div>
        <div class="form-group">
          <label for="players_max">Select number of players</label>
          <select class="form-control" id="players_max" name="players_max" value="">
            <option>10</option>
            <option>15</option>
          </select>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-warning mt-4 mb-4">Edit</button>

        </div>
    </form>
</div>
    
@endsection