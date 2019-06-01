@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}
        </p>

    <p>必要な時だけ記述できる</p>

    <!-- @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent -->

    @include('components.message', ['msg_title'=>'OK',
    'msg_content'=>'サブビューです'])

    <!-- サブビューではhtmlタグが正しく渡せないので注意-->

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection