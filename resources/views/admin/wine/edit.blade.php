{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'Ultrabigginer'を埋め込む --}}
@section('title','Ultrabigginer')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h2>Ultrabigginer</h2>
              <form action="{{ action('Admin\WineController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">商品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $wine_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">産地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="country" value="{{ $wine_form->country }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">価格</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ $wine_form->price }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">商品説明</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $wine_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                        設定中: {{ $wine_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $wine_form->id }}">

                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                {{-- 以下を追記　--}}
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($wine_form->histories != NULL)
                                @foreach ($wine_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
