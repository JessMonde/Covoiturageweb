@extends('Layouts.auth')
@section('title')
    Ajout d'Utilisateur
@endsection

@section('content')
    @if($Success=Session::get('info'))
        <div class="alert alert-success">{{$Success}}</div>
    @endif
<div class="content-error">
    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
    <div class="hpanel">
        <div class="panel-body">
            <form class="user" method="post" action="">
                @csrf
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="{{ __('Nom') }}" name="nom" value="{{ old('name') }}">
                         @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="{{ __('Prenoms') }}" name="prenoms" value="{{ old('name') }}">
                    @error('prenoms')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">   
                    <div class="form-group">
                            @error('Telephone')
                            <strong>{{ $message }}</strong>
                            @enderror
                            <input type="number" class="form-control w-100" name="telephone" placeholder="******" id="phone"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select id="inputState1" class="form-control" title="Id_Role" name="Id_Role" required="true">
                            @foreach ($role as $r)
                                <option value="{{$r->id }}">{{ $r->nom}}</option>
                            @endforeach
                        </select>
                    </div>
            <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password"  name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="password" name="password_confirmation" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            <button  type="submit"  class="btn btn-dark btn-user btn-block">
              Créer un compte
            </button>
          </form>
          <hr>
          <div class="text-center">
            <a class="small" href="login">Already have an account? Login!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
