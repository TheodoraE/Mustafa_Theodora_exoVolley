<div class="container mt-5">
    <h1 style="text-decoration: underline" >Add new teams: </h1>

    <form action="/teams" method="POST">
      @csrf
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
          <button type="submit" class="btn btn-warning mt-4">Ajouter</button>

        </div>
      </form>

</div>