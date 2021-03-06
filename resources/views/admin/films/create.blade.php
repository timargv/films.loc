@extends('admin.layout')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="app">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить фильм
                {{--<small>приятные слова..</small>--}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">


            {{ Form::open(['route' => 'films.store', 'files' => true]) }}
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <div class="thumbnail" style="border: 0; padding: 0; overflow: hidden">
                                    <label for="exampleInputFile">Постер</label>
                                    <input type="file" id="exampleInputFile" name="image">
                                </div>

                                <div class="btn-group " role="toolbar" style="width: 100%">
                                    <button  type="submit" name="action" value="save" class="btn btn-default btn-block"><b>Сохранить картинку</b></button>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        <!-- About Me Box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Год</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                 <select style="max-width: 100%" id="tag_list" name="persons[]" class="form-control select2" multiple>
                                        <option value=""  data-image="/images/flags/flag.png">-</option>
                                 </select>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        


                    </div>
                    <div class="col-md-9">
                        <div class="box box-primary">

                            <div class="box-header with-border">
                                <div class="pull-right">
                                    <button  class="btn btn-default">Сохранить и закрыть</button>
                                    <button  type="submit" name="action" value="saveAdd" class="btn btn-default ">Сохранить и добавить</button>
                                    <a href="{{ route('films.index') }}"  class="btn btn-danger">Выйти</a>
                                </div>
                            </div>

                            <div class="box-header">
                                <div class="form-group">

                                    <label>Назание Ru</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="title" type="text" class="form-control" placeholder="Иван" value="{{ old('title') }}"></div>
                                </div>

                                <div class="form-group">

                                    <label>Назание Оригинальное</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="original_title" type="text" class="form-control" placeholder="Иван" value="{{ old('original_title') }}"></div>
                                </div>

                            </div>



                            <div class=" box-body ">
                                @include('admin.errors')

                                <div class="form-group">

                                    <label>Слоган</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="slogan" type="text" class="form-control" placeholder="Иван" value="{{ old('slogan') }}"></div>
                                </div>

                                <div class="form-group">

                                    <label>Бюджет</label>
                                    <div class="input-group ">
                                        <input name="budget" type="text" class="form-control" placeholder="Иван" value="{{ old('budget') }}"></div>
                                </div>

                                <div class="form-group">

                                    <label>Мировая Премьера </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" value="{{ old('date') }}" name="date">
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Возраст</label>
                                    <div class="input-group ">
                                        <input name="age" type="text" class="form-control" placeholder="Иван" value="{{ old('age') }}"></div>
                                </div>

                                <div class="form-group">

                                    <label>Рейтинг</label>
                                    <div class="input-group ">

                                        {{ Form::selectRange('rating', 1, 10, old('rating'), ['class' => 'form-control select', 'data-placeholder'=>'']) }}
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label>Время длительности фильма</label>
                                    <div class="input-group ">
                                        <input name="time" type="text" class="form-control" placeholder="Иван" value="{{ old('time') }}"></div>
                                </div>

                                <div class="form-group">

                                    <label>Краткое описание</label>
                                    <div class="input-group ">
                                        <textarea name="sh_description" rows="3" cols="80">{!! old('sh_description') !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label>Полное описание</label>
                                    <div class="input-group ">
                                        <textarea name="description" rows="5" cols="80">{!! old('description') !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label>Трейлер</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="video_field" type="text" class="form-control" placeholder="Ссылка на видое YouTube" value="{{ old('trailer_field') }}"></div>
                                </div>
                                <div class="form-group">

                                    <label>Фильм</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="video_field" type="text" class="form-control" placeholder="Ссылка на видое" value="{{ old('video_field') }}"></div>
                                </div>



                            </div>
                            {{--<div class="box-footer clearfix">--}}
                                {{--<a href="{{ URL::previous() }}"  class="btn btn-default" data-dismiss="modal">Закрыть</a>--}}
                                {{--<button  class="btn btn-primary">Сохранить</button>--}}
                                {{--<button  type="submit" name="action" value="saveAdd" class="btn btn-success ">Сохранить и добавить</button>--}}
                            {{--</div>--}}

                        </div>
                    </div>
                </div>
            {{ Form::close() }}

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection