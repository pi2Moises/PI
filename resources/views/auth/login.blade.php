@extends('layouts.app')

@section('content')
<div>
    <table class="table">
        <thead>
            <tr>
                <th><a class="navbar-brand" href="{{ url('/') }}">Projeto Integrador 3</a></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>
                    <h2 class="form-signin-heading">Acessar Sistema</h2>
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
<!--                             <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email:') }}</label> -->

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
<!--                             <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label> -->

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Senha">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" name="btnLogin" id="btnLogin" value="Logar" class="btn btn-lg btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
