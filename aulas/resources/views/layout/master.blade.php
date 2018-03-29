@include('layout.header')


<div class="container">

    <form method="POST" action="/pessoa/store" role="form" class="col-sm-8 go-right">

        {{csrf_field()}}

        <h2>Create Person</h2>

        <div class="form-group">
            <input id="name" name="name" type="text" class="form-control" >
            <label for="name">Person Name</label>
        </div>

        <div class="form-group">
            <input id="surname" name="surname" type="text" class="form-control" >
            <label for="surname">Person Surname</label>
        </div>

        <div class="form-group">
            <input id="email" name="email" type="text" class="form-control" >
            <label for="body">Email</label>
        </div>

        <div class="form-group">
            <input id="telephone" name="telephone" type="text" class="form-control" >
            <label for="telephone">Telephone</label>
        </div>

        <div class="form-group">
            <input id="cpf" name="cpf" type="text" class="form-control" >
            <label for="cpf">CPF</label>
        </div>


        <div class="form-group col-sm-3 align-center">
            <input type="submit" id="btn-login" class="btn btn-sm" value="Send">
        </div>
    </form>

</div>


<div class="container" style="margin: 30px 0px;">


    <div class="searchable-container">
        <div class="items col-xs-12 ">
            <div class="info-block block-info ">
                @foreach(pessoa in pessoa)
                    <h5>Company Name</h5>
                    <h4>Name: Tyreese Burn</h4>
                    <p>Title: Manager</p>
                    <span>Phone: 555-555-5555</span>
                    <span>Email: sample@company.com</span>
                @endforeach
            </div>
        </div>

    </div>

</div>
    <hr>
@include('layout.footer')

