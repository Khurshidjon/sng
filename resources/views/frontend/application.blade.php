@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="form-wrapper mt-5 p-4" style="margin-bottom: 6.2em">
            <div class="form-wrapper-body text-center">
                <h2>ЗАЯВКА НА УЧАСТИЕ В ФОРУМЕ РЕГИОНОВ СНГ ' 20</h2>
            </div>
            <fieldset>
                <form action="{{ route('frontend.application-create') }}" class="form" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="application_type">Гражданство <span class="text-danger"><i>*</i></span></label>
                                <select name="" class="form-control" id="application_type">
                                    <option>Пожалуйста выберите</option>
                                    <option value="pro">узбек</option>
                                    <option value="free">рус</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nimadur">Страна проживания <span class="text-danger"><i>*</i></span></label>
                                <select name="" class="form-control" id="nimadur">
                                    <option>Пожалуйста выберите</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name_ru }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">ПОЛ <span class="text-danger"><i>*</i></span></label>
                                <select name="gender" id="gender" >
                                    <option>Пожалуйста выберите</option>
                                    <option value="1">Муж.</option>
                                    <option value="2">Жен.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="firstname_ru">ИМЯ <small><i>(на русском языке)</i></small></label>
                                <input type="text" id="firstname_ru" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lastname_ru">ФАМИЛЯ <small><i>(на русском языке)</i></small></label>
                                <input type="text" id="lastname_ru" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="middlename_ru">ОТЧЕСТВО <small><i>(на русском языке)</i></small></label>
                                <input type="text" id="middlename_ru" class="form-control" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="birthday">Дата рождения</label>
                                <input type="text" id="birthday" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="place_born">Место рождения</label>
                                <input type="text" name="place_born" class="form-control" id="place_born">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="number_passport">Номер паспорта</label>
                                <input type="text" name="number_passport" class="form-control" id="number_passport">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="theme">Тематика участия</label>
                                <input type="text" id="theme" class="form-control" name="theme">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="goal">Цель участия</label>
                                <input type="text" name="goal" class="form-control" id="goal">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="organization">Организация</label>
                                <input type="text" name="organization" class="form-control" id="organization">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="position">Должность</label>
                                <input type="text" id="position" class="form-control" name="position">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">Контактный телефон </label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Контактный электронный адрес</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Отправить</button>
                        <a class="btn btn-danger text-white float-right" href="{{ route('frontend.index') }}">Назад</a>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
    <script>
        $('select').select2();
        $('#birthday').datepicker({
            autoclose: true,
            toggleActive: true,
            todayBtn: true,
            format: 'dd-mm-yyyy'
        });
    </script>
@endsection
