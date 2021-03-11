@extends('template.main')

@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h1>Ajouter des joueurs</h1>
        </div>

        <div class="mt-4">
            <form action="/players" method="POST">
                @csrf
                <div class="form-group">
                    <label for="lastname">Nom : </label>
                    <input type="text" name="lastname">
                </div>
                <div class="form-group">
                    <label for="fistname">Prénom : </label>
                    <input type="text" name="fistname">
                </div>
                <div class="form-group">
                    <label for="age">Age : </label>
                    <input type="number" name="age">
                </div>
                <div class="form-group">
                    <label for="phone">N° téléphone : </label>
                    <input type="text" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label for="country_origin">Pays d'origine : </label>
                    <input type="text" name="country_origin">
                </div>

                <div class="form-group">
                    <label for="gender">Genre : </label>
                    {{-- <select name="gender" id="gender">
                        @foreach ($genders as $gender)
                            <option value="{{$gender->gender}}">{{$gender->gender}}</option>
                        @endforeach
                    </select> --}}
                </div>

                <div class="form-group">
                    <label for="position">Position : </label>
                    <select name="position" id="position">
                        @foreach ($positions as $position)
                            <option value="{{$position->position}}">{{$position->position}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="team">Équipe : </label>
                    {{-- <select name="team" id="team">
                        @foreach ($teams as $team)
                            <option value="{{$team->team}}">{{$team->team}}</option>
                        @endforeach
                    </select> --}}
                </div>

                <div class="form-group">
                    <label for="url">Photo : </label>
                    <input type="file" name="url">
                </div>
            </form>
        </div>
    </div>
@endsection