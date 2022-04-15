@extends('secciones.master')
@section('contenido')

<div>
    
</div>
    <div style="">
        <div class="card" style="width: 50rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <form action="">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="email@example.com">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </form>
        <button type="button" class="btn btn-danger">Primary</button>


            </div>
        </div>
    </div>

    <div>

    </div>
@endsection
