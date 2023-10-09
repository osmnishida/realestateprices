<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>都道府県コード取得</title>
  </head>
  <body>
    <h1>クリエ文字列取得ページ</h1>
    <form method="get" action="tcsearch">
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

      <input type="submit" value="送信する">
    </form>
    {{--
    {{$arrjsoncc}}[data][0][id];
    --}}
    {{--
    @foreach($arrjsoncc as $cc)
    <p>arrjsoncc：{{$cc->data->name}}</p>
    @endforeach
    --}}
  </body>
</html>