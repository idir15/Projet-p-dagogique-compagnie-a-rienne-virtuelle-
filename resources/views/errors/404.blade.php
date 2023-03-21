
@extends('layout')

@section('title')
    Oops !
@endsection

@section('content')
<div class="container-error">
  <div class="error">
      <div class="error__ligne1">
          Oops !
      </div>

      <div class="error__ligne2">
          Erreur 404 page non trouvée
      </div>

      <div class="error__ligne3">
          La page que vous avez demandé n'est pas disponible
      </div>
      
      <div class="error__ligne4">
          <img src="/images/airplane.png">
        </div>
  </div>

</div>
<style>
    .container-error{
        display: flex;
        height: 800px;
        align-content: center;
        justify-content: center;
        background: #2a3246;
        background-size:contain;
        background-repeat: no-repeat;
    }

    .error{
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        

    }

    .error__ligne1{
        font-size: 55px;
        font-weight: bold;
        color: white;
    }
    
    .error__ligne2{
        font-size: 30px;
        color: #f64c72;
        font-weight: bold;
    }
    .error__ligne3{
        font-size: 17px;
        color: white;
    }
    .error__ligne4>img{

        width: 100%;

    }
</style>
@endsection