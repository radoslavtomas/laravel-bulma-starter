@extends('layouts.admin')

@section('content')

    <div class="container">
        <section class="section">
            <div class="columns">
                <div class="column has-border has-text-centered is-6-desktop is-offset-3-desktop is-10-touch is-offset-1-touch">

                    <h1 class="title text-center">Register</h1>

                    <form action="{{ route('register') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="name" type="text" placeholder="Your name" value="{{ old('name') }}" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </p>
                            @if ($errors->has('name'))
                                <div class="notification is-danger m-t-5">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                            @if ($errors->has('email'))
                                <div class="notification is-danger m-t-5">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="password" type="password" placeholder="Password" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </p>
                            @if ($errors->has('password'))
                                <div class="notification is-danger m-t-5">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="password_confirmation" type="password" placeholder="Confirm your password" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field m-t-35">
                            <p class="control has-text-centered">
                                <button class="button is-success">
                                    Register
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>{{--container ends--}}

@endsection
