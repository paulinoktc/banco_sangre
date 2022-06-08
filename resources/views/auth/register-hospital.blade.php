@extends('welcome')

@section('authorization')
    <div id="contenedor" class="container ">
        <div id="encabezado" class="row">
            <div class="col text-center">
                <img src="{{ URL::asset('img/logo.png') }}" alt="">
                <img src="cinqueterre.jpg" class="rounded-circle" alt="Cinque Terre">
            </div>
        </div>
        
        <form class="form-horizontal" action="">
            <div class="row text-center">
                <div class="col form-col form-group me-0">
                    <input type="email" name="" id="" class="form-control">
                    <input type="text" class="form-control">
                    <input type="text" class="form-control">
                    <input type="number" name="" id="" class="form-control">
               </div>  
               <div class="col form-col form-group me-0">
                    <input type="password" name="" id="" class="form-control">
                    <input type="text" class="form-control">
                    <input type="text" class="form-control">
                    <button class="form-control" type="submit" class="btn btn-primary"></button >
               </div>
            </div>
        </form>
            
        

    </div>
@endsection
