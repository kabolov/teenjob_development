@extends('layouts.site')

@section('content')
    <div class="container-fluid internship-form">
        <div class="container">
            <div class="row flex-column align-items-center">

                    <h2 class="display-5">Новое объявление</h2>


                        <form method="post" action="{{ route('volunteering.store') }}">
                            @csrf
                            <input type="hidden" name="organisation" value="{{ $organisation }}"/>
                            <div class="form-group">
                                <label for="title">Название:</label>
                                <input type="text" required class="form-control" name="title"/>
                            </div>
                            @error('title')
                                <div class="alert alert-danger">{{ $errors->title }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="label-title" for="filter-city">Город</label>
                                <select name="city" class="js-select2-basic-single">
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-title" for="filter-age">Возраст</label>
                                <select name="age">
                                    <option value="14" selected="selected">14+</option>
                                    <option value="15">15+</option>
                                    <option value="16">16+</option>
                                    <option value="17">17+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="label-title" for="filter-speciality">Профобласть</label>
                                <select name="speciality">
                                    @foreach($specializations as $specialization)
                                        <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group texteditor">
                                <textarea name="description" id="summernote"></textarea>
                            </div>
                            <div class="form-group m-n">
                                <h3 class="title">Контакты</h3>
                            </div>

                            <div class="form-group">
                                <label for="contact">Контактное лицо*</label>
                                <input type="text" required class="form-control" name="contact"/>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail*</label>
                                <input type="text" required class="form-control" name="email"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон*</label>
                                <input type="text" required class="form-control" name="phone"/>
                            </div>
                            <div class="form-group">
                                <label for="alt_phone">Дополнительный контакт:</label>
                                <input type="text" class="form-control" name="alt_phone"/>
                            </div>
                            <div class="form-group m-n">
                                <button type="submit" class="btn btn-success">Отправить на модерацию</button>
                            </div>
                            <p class="notification">Будет опубликовано в ближайшее время после прохождения предварительной модерации.</p>
                        </form>

            </div>
        </div>
    </div>
@endsection