@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow-lg">
                <div class="card-header text-center h4">{{ __('Crea tu perfil para conectar con oportunidades laborales, amplía tu red y avanza en tu carrera.') }}</div>

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/Minerva.png') }}" alt="Minerva Logo" height="80">
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label visually-hidden">{{ __('Full name and surname') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Full name and surname') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label visually-hidden">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label visually-hidden">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Date of Birth') }}</label>
                            <div class="row">
                                <div class="col">
                                    <select class="form-select" name="day" required>
                                        <option value="" disabled selected>{{ __('Day') }}</option>
                                        @for ($day = 1; $day <= 31; $day++)
                                            <option value="{{ $day }}">{{ $day }}</option>
                                         @endfor
                                    </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="month" required>
                                <option value="" disabled selected>{{ __('Month') }}</option>
                                @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                    <option value="{{ $month }}">{{ __($month) }}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="col">
                                 <select class="form-select" name="year" required>
                                    <option value="" disabled selected>{{ __('Year') }}</option>
                                    @for ($year = date('Y'); $year >= 1900; $year--)
                                         <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                            </select>
                        </div>
                        </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Gender') }}</label>
                            <div class="row">
                                <div class="col">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                {{ __('Female') }}
                            </label>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">
                             {{ __('Male') }}
                            </label>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                            <label class="form-check-label" for="terms">
                                {{ __('I agree to the terms and conditions') }}
                            </label>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Sign Up') }}</button>
                        </div>

                        <hr>

                        <p class="text-center">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
