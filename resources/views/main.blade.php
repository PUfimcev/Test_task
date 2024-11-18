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
                    <form method="POST" onkeydown="stopKeyEnter(event)" action="{{ route('store_applicant') }}">
                        @csrf
                        <div class="names mb-1">
                            <div class="name name_input">
                                <input id="name" type="text" class="form_control" name="name" value="{{ old('name') }}"  autocomplete="name" maxlength="256"  placeholder="Имя *">
                                <div class="form-error name-error">

                                </div>
                            </div>
                            <div class="name last_name_input">
                                <input id="last_name_input" type="text" class="form_control" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" maxlength="256" placeholder="Фамилия *">
                                <div class="form-error last_name-error">

                                </div>
                            </div>
                            <div class="name patronymic_input">
                                <input id="patronymic" type="text" class="form_control" name="patronymic" value="{{ old('patronymic') }}"  autocomplete="patronymic" maxlength="256"  placeholder="Отчество">
                            </div>
                        </div>

                        <div class="birthdate_input">

                            <input id="birthdate" type="text" class="form_control" name="birth_date" value="{{ old('birth_date') }}" placeholder="Дата рождения *">
                            <div class="form-error date-error">
                                    <span>Поле обязательно для заполнения</span>
                                </div>

                        </div>

                        <div class="email_input">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">

                            <div class="form-error email-error">

                            </div>

                        </div>

                        <div class="phone_input">
                            <div class="status-title">
                                <span>Телефон</span>
                                <span class="title-plus">+</span>
                                <span class="title-minus">-</span>
                            </div>
                            <div class="phone_data">
                                <div>
                                    <select id="tel_code" class="tel_code" size="1" name="tel_code">
                                        <option value="" disabled selected>Код</option>
                                        <option value="+375" @selected(old('tel_code') == "+375")>+375</option>
                                        <option value="+7" @selected(old('tel_code') == "+7") >+7</option>
                                    </select>
                                    <div class="phone_number">
                                        <input id="phone" type="tel" class="form_control" name="tel" value="{{ old('tel') }}"  autocomplete="email"  placeholder="(__)___-__-__">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="status mb-3">
                            <div class="status-title">
                                <span>Семейное положение</span>
                                <span class="title-plus">+</span>
                                <span class="title-minus">-</span>
                            </div>
                            <div class="status_data">

                                <select id="status" class="form_select" size="1" name="status">
                                        <option value="" disabled selected >Выберите</option>
                                        <option value="Холост/не замужем" @selected(old('status') == "Холост/не замужем")>Холост/не замужем</option>
                                        <option value="Женат/замужем" @selected(old('status') == "Женат/замужем") >Женат/замужем</option>
                                        <option value="В разводе" @selected(old('status') == "В разводе") >В разводе</option>
                                        <option value="Вдовец/вдова" @selected(old('status') == "Вдовец/вдова") >Вдовец/вдова</option>
                                </select>
                            </div>
                        </div>
                        <div class="about mb-3">
                            <textarea name="about" id="textarea_about" rows="1" maxlength="1000"  placeholder="О себе"></textarea>
                        </div>

                        <div class="dispatch__form">

                            <div class="form_checkbox">
                                    <input class="checkbox_input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"></label>
                                    <a href="#" class="ref_for_rules text-decoration-none" target="_blank">Я прочитал правила</a></label>
                            </div>

                            <button class="form_btn" >Отправить</button>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@push('scripts')

    <script>
        function stopKeyEnter(event){
            if(!event) return;
            if(event.key === 'Enter') event.preventDefault();
        }
    </script>

@endpush

@endsection
