@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <div class="titlepage">
                        <h2>S'inscrire</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Main content -->
    <div class="authincation m-4">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-validation" action="{{ route('register') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Nom</strong><span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"  name="name"  value="{{ old('name') }}" autocomplete="name" placeholder="Nom d'utilisateur" autofocus>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Email</strong><span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control"  name="email" placeholder="hello@example.com" value="{{ old('email') }}" autocomplete="email"  autofocus>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-1"><strong>Password</strong><span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password"  name="password" placeholder="Password" value="{{ old('password') }}" autocomplete="password" autofocus>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label for="password_confirmation" >Confirmation du mot de passe<span class="text-danger">*</span></label>
                                                    <input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" placeholder="Retapez votre mot de passe" autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="client">Veuillez Cochez pour valider votre compte <span class="text-danger">*</span>
                                                    <input type="radio" class="form-control" value="2" id="client" name="role_id">
                                                    <span class="checkmark"></span>
                                                </label>
                                                    @error('role_id')
                                                        <span class="text-danger block">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="text-center mt-4">
                                                    <input type="submit" class="btn bg-primary text-white btn-block"  name="submit" value="S'inscrire">
                                                </div>
                                            </form>
                                            <div class="new-account mt-3">
                                                <p>Vous avez déjà un compte?  <a href="{{route('login')}}" class="text-primary">Se connectez</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
