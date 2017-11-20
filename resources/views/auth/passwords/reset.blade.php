@extends('layouts.admin')

@section('content')

    <div class="container">
        <section class="section">
            <div class="columns">
                <div class="column has-border has-text-centered is-6-desktop is-offset-3-desktop is-10-touch is-offset-1-touch">

                    <h1 class="title text-center">Reset password</h1>

                    @if ($errors->any())
                        <div class="notification is-danger">
                            <button class="delete"></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('password.request') }}" method="POST">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" name="password" type="password" placeholder="Password" required>
                                <span class="icon is-small is-left">
                                <i class="fa fa-lock"></i>
                            </span>
                            </p>
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
                                    Reset password
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>{{--container ends--}}

@endsection
