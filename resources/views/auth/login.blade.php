@extends('layouts.app')

@section('content')


{{--
    <div class="section-authentication-signin d-flex  justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h1>Se Connectez</h1>

                                     <p>Don't have an account yet?
                                        <a href="register">Sign up here</a>
                                    </p>
                                </div>

                                <!-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                    <hr/>
                                </div> -->
                                <div class="form-body">

                                    <div class="form-group p-2">
                                        <label for="email" >Email</label>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
                                        @error('email')
                                            <span class="text-red-400 text-sm">
                                                <span>{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group p-2">
                                        <label for="password" >Mot de passe</label>
                                        <input id="password" type="password" name="password" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
                                        @error('password')
                                            <span class="text-red-400 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group p-2">
                                        <button type="submit" class="btn btn-success">Se Connectez</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div> --}}
        <!-- banner -->
        <div class="blue_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="titlepage">
                            <h2>Se Connectez</h2>
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
                                                {{-- <div class="login-separater text-center mb-4">

                                                    <span>OR SIGN IN WITH EMAIL</span>
                                                    <hr/>
                                                </div> --}}

                                                <div class="form-body form-validation">
                                                    <form method="POST" class="row g-3" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="col-12 mb-2">
                                                            <label for="inputEmailAddress" class="form-label">Email <span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" name="email" id="inputEmailAddress" placeholder="hello@example.com">
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <label for="inputChoosePassword" class="form-label">Mot de pass <span class="text-danger">*</span></label>
                                                            <div class="input-group" id="show_hide_password">
                                                                <input type="password" class="form-control border-end-0"  name="password" id="inputChoosePassword" placeholder=".........">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-md-6 mb-2">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 text-end mb-2">
                                                            <a href="#">Forgot Password ?</a>
                                                        </div> --}}
                                                        <div class="col-12 mb-2">
                                                            <div class="d-grid">
                                                                <input type="submit" class="btn bg-primary text-white btn-block"  name="submit" value="Se Connectez"></input>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="new-account mt-3">
                                                        <span> Vous n'avez pas de compte? <a href="{{route('register')}}" class="text-primary">S'inscrire</a></span>
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
        </div>
@endsection
