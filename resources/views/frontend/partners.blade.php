@extends('layouts.main')
@section('content')
<?php

?>
    <div class="header-image d-none d-md-block d-lg-block d-xl-block"></div>
    @include('layouts.frontend-navbar.navbar')
   <div class="container">
       <div class="form-wrapper mt-5 p-4" style="margin-bottom: 6.2em">
           <div class="form-wrapper-body">
               <h2>СТАТЬ ПАРТНЕРОМ</h2>
           </div>
           <fieldset>
               <form action="{{ route('frontend.application-create') }}" class="form" method="post">
                   {{ csrf_field() }}
                   <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="firstname_ru">Имя <span class="text-danger"><i>*</i></span></label>
                               <input type="text" id="firstname_ru" class="form-control" autocomplete="off">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="lastname_ru">Телефон <span class="text-danger"><i>*</i></span></label>
                               <input type="text" id="lastname_ru" class="form-control" autocomplete="off">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="middlename_ru">Email <span class="text-danger"><i>*</i></span></label>
                               <input type="text" id="middlename_ru" class="form-control" autocomplete="off">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="firstname_en">Компания</label>
                               <input type="text" id="firstname_en" class="form-control" autocomplete="off">
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group row">
                               <div class="col-md-6">
                                   <label for="captcha">
                                       <span id="captcha-img">{!! captcha_img('flat') !!}</span>
                                   </label>
                                   <button class="btn bg-transparent" id="refresh-captcha"><i class="fa fa-refresh"></i></button>
                               </div>
                               <div class="col-md-6">
                                   <input type="text" id="captcha" name="captcha" class="form-control" autocomplete="off">
                               </div>
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
        $('#refresh-captcha').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('captcha-refresh') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    $('#captcha-img').html(data);
                    // console.log(data);
                }
            })
        })
    </script>
@endsection
