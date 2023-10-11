<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>取引事例検索結果</title>
  </head>
  <body>
    <h1>取引事例検索結果</h1>

      @foreach ($arrTradeSearch as $tradeSearch)
    <?php 
    // print_r($arrjsoncc);
    // echo $cc[0];
    ?>
    <p>取引の種類:{{ $tradeSearch["Type"] }}　　　地区:{{ $tradeSearch["Region"] }}　　　市区町村名:{{ $tradeSearch["Municipality"] }}
    　　　地区名:{{ $tradeSearch["DistrictName"] }}　　　取引価格（総額）：{{ $tradeSearch["TradePrice"] }}　　　面積（㎡）:{{ $tradeSearch["Area"] }}</p>
  
    <?php
    // print_r($cc);
    ?>
      @endforeach

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