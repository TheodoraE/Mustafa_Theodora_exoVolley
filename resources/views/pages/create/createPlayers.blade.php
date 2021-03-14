@extends('template.main')

@section('content')
    <div class="container bg-dark">
        <h1 style="text-decoration: underline" class="my-4 text-warning">Add new players: </h1>

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

        <form action="/players" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label  class="text-warning" for="lastname">Name : </label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="{{old('lastname')}}">
                </div>
                <div class="form-group col-6">
                    <label  class="text-warning" for="firstname">Firstname : </label>
                    <input class="form-control" type="text" id="firstname" name="firstname" value="{{old('firstname')}}">
                </div>
            </div>
            <div class="form-group">
                <label  class="text-warning" for="age">Age : </label>
                <input class="form-control" type="number" id="age" name="age" value="{{old('age')}}">
            </div>
            <div class="form-group">
                <label  class="text-warning" for="phone">Phone : </label>
                <input class="form-control" type="text" id="phone" name="phone" value="{{old('phone')}}">
            </div>
            <div class="form-group">
                <label  class="text-warning" for="email">Email : </label>
                <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label  class="text-warning" for="country_origin">Origin Country : </label>
                <input class="form-control" type="text" id="country_origin" name="country_origin" value="{{old('country_origin')}}">
            </div>


            <div class="form-group">
                <label  class="text-warning" for="gender_id">Gender :</label>
                <select class="form-control" id="gender_id" name="gender_id" value="">
                    @foreach ($genders as $gender)
                        <option value="{{$gender->id}}">{{$gender->gender}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label  class="text-warning" for="position_id">Position :</label>
                <select class="form-control" id="position_id" name="position_id" value="">
                    @foreach ($positions as $position)
                        <option value="{{$position->id}}">{{$position->position}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label  class="text-warning" for="team_id">Team :</label>
                <select class="form-control" id="team_id" name="team_id" value="">
                    <option value="">Sans equipe</option>
                    @foreach ($teams as $team)
                        <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label  class="text-warning" for="url">Picture : </label>
                <input  class="text-warning" type="file" id="url" name="url" value="silouhaite.jpeg">
            </div>


            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning mt-2 mb-4">Ajouter</button>
            </div>
        </form>

    </div>
@endsection