<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('storage/images/Vector.png') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between ms-5" id="navbarNavDropdown">
                <ul class="navbar-nav col-md-7 justify-content-around">
                    <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Услуги</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Стоимость</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Отзывы</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Вопросы и ответы</a>
                    </li>
                </ul>

                <div class="nav-item">
                    <div class="mt-3">
                        <a class="headbar__call_phone fw-bold text-decoration-none text-body-secondary" href="tel:+48690590089" role="button" title="phone">+48690590089</a>
                    </div>
                    <div class="mb-3">
                        <a id="headbar__call_request-bnt" class="btn p-0" href="#" role="button">Заказать звонок</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        РУ
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">PL</a></li>
                        <li><a class="dropdown-item" href="#">EN</a></li>
                        <li><a class="dropdown-item" href="#">РУ</a></li>
                    </ul>
                </div>
            </div>
          </div>
        </nav>

    </header>

</div>
