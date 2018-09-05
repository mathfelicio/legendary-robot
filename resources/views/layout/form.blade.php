<div class="container">

    <form method="POST" action="/pessoa/update/{{$pessoa['id']}}" role="form" class="col-sm-8 go-right">

        {{csrf_field()}}

        <h2>Edit Person</h2>
        <inpute type="hidden" id="id" name="id" value="{{$pessoa['id']}}"></inpute>
        <div class="form-group">
            <input id="name" name="name" type="text" class="form-control" value="{{$pessoa['name']}}">
            <label for="name">Person Name</label>
        </div>

        <div class="form-group">
            <input id="surname" name="surname" type="text" class="form-control" value="{{$pessoa['surname']}}" >
            <label for="surname">Person Surname</label>
        </div>

        <div class="form-group">
            <input id="email" name="email" type="text" class="form-control" value="{{$pessoa['email']}}">
            <label for="body">Email</label>
        </div>

        <div class="form-group">
            <input id="telephone" name="telephone" type="text" class="form-control" value="{{$pessoa['telephone']}}">
            <label for="telephone">Telephone</label>
        </div>

        <div class="form-group">
            <input id="cpf" name="cpf" type="text" class="form-control" value="{{$pessoa['cpf']}}">
            <label for="cpf">CPF</label>
        </div>


        <div class="form-group col-sm-3 align-center">
            <input type="submit" id="btn-login" class="btn btn-sm" value="Send">
        </div>
    </form>

</div>