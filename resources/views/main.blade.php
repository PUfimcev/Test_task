@extends('layout.index')

@section('content')

<main>

    <div class="container">
        <section class="top__section">
            <div class="list__companies">
                <h2 class="title">Наши курьеры</h2>
                <ul class="list__couriers list-unstyled d-flex flex-wrap">
                    <li><img class="courier_img" src="{{ asset('storage/images/dpd.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/gls.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/dhl.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/shopify.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/commerce.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/presta.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/ppl.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/posta.png') }}" alt="courier"></li>
                    <li><img class="courier_img" src="{{ asset('storage/images/magento.png') }}" alt="courier"></li>
                </ul>
            </div>
            <div class="top__picture">
                <img class="picture" src="{{ asset('storage/images/top_img.png') }}" alt="image">
            </div>
        </section>
    </div>


    <section class="bottom__section">
        <div class="container">
            <div class="form">

                <h3 class="form__title">Ищешь лучшее предложение?</h3>
                <p>Оставьте заявку и наш менеджер свяжется с вами для консультации</p>

                <div class="card-application">
                    <form method="POST" action="{{ route('store_applicant') }}">
                        @csrf
                        <div class="names mb-1">
                            <div class="name_input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Имя">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="surname_input">
                                <input id="surname_input" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus placeholder="Фамилия">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="name_input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="{{ __('Email Address') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="login__password mb-3">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="password_input d-flex flex-column justify-content-between align-items-center">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="{{ __('Password') }}">
                                <div class="password-control"></div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-2">
                            <div class="login__remember_me">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember"><a href="#" class="text-decoration-none" target="_blank" rel="noopener noreferrer">Я прочитал правила</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 mb-0">
                            <div class="login__button">
                                <button type="submit" class="btn">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
