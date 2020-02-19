<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
    <a class="navbar-brand text-gray" href="#">ТАШКЕНТ'20</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto text-uppercase">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('frontend.index') }}">ГЛАВНАЯ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" title="О ФОРУМЕ">
                <a class="nav-link" href="{{ route('frontend.about-form') }}">О ФОРУМЕ</a>
            </li>
            <li class="nav-item" title="УЧАСТНИКАМ">
                <a class="nav-link" href="http://cis.minsk.by/map" target="_blank">Государства участники СНГ</a>
            </li>
            <li class="nav-item" title="Инвестиционный потенциал Узбекистана">
                <a class="nav-link" href="http://invest.gov.uz/ru/investor-taxonomy/potential/" target="_blank">Инвестиционный потенциал Узбекистана</a>
            </li>
            <li class="nav-item" title="Портал открытых данных Республики Узбекистан">
                <a class="nav-link" href="https://data.gov.uz/ru" target="_blank">Портал открытых данных Республики Узбекистан</a>
            </li>
            <li class="nav-item" title="Стать партнером">
                <a class="nav-link" href="{{ route('frontend.become-partners') }}">Стать партнером</a>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0 text-uppercase">
            <li class="nav-item" title="Заявка на участие">
                <a class="nav-link btn btn-success text-white" href="{{ route('frontend.application') }}">Заявка на участие</a>
            </li>
        </ul>
    </div>
</nav>
