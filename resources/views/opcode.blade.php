<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>市町村選択</title>
  </head>

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <title>市町村選択</title>
      </h2>
  </x-slot>


  <body>
    <div class="max-w-7xl max-auto px-6">
      <h1>市町村選択ページ</h1>
      <form method="get" action="tcsearch">
        @csrf
        取引時期From<input type="text" name="fromyyyyn" size="10" value="20224">
        <br>
        取引時期To<input type="text" name="toyyyyn" size="10" value="20231">
        <br>
        <select name="citycode">
        @foreach ($arrjsoncc as $cc)
          <option value={{ $cc["id"] }}>{{ $cc["name"] }}</option>
      <?php 
        // print_r($arrjsoncc);
        // echo $cc[0];
      ?>
        // {{ $cc["name"] }}
        // {{ $cc["id"] }}
        <br>
        <?php
        // print_r($cc);
        ?>
        @endforeach
        </select>
      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
       {{--
    {{$arrjsoncc}}[data][0][id];
    --}}
    {{--
    @foreach($arrjsoncc as $cc)
    <p>arrjsoncc：{{$cc->data->name}}</p>
    @endforeach
    --}}
  </div>
</x-app-layout>
 