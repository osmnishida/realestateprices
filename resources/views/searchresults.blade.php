<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>取引事例検索結果</title>
  </head>
  <body>
    <h1>取引事例検索結果</h1>

      @foreach ($arrResp as $resp)
    <?php 
    // print_r($resp);
    // echo $cc[0];
    ?>
        @switch($resp["Type"])
          @case("宅地(土地)")
          @if(array_key_exists('DistrictName',$resp))
          @else
            間口未設定検出
            @php
              $resp["DistrictName"] = "未設定";
            @endphp
          @endif
            @if(array_key_exists('Frontage',$resp))
            @else
              間口未設定検出
              @php
                $resp["Frontage"] = "未設定";
              @endphp
            @endif
            @if(array_key_exists('CityPlanning',$resp))
            @else
              間口未設定検出
              @php
                $resp["CityPlanning"] = "未設定";
              @endphp
            @endif
            @if(array_key_exists('CoverageRatio',$resp))
            @else
              建ぺい率未設定検出
              @php
                $resp["CoverageRatio"] = "未設定";
              @endphp
            @endif
            @if(array_key_exists('FloorAreaRatio',$resp))
            @else
              容積率未設定検出
              @php
                $resp["FloorAreaRatio"] = "未設定";
              @endphp
            @endif

          <?php print_r($resp); ?> <br>
          
            <p>取引の種類:{{ $resp["Type"] }}　　　地区:{{ $resp["Region"] }}　　　都道府県名:{{ $resp["Prefecture"] }}　　　
              市区町村名:{{ $resp["Municipality"] }}　　　地区名:{{ $resp["DistrictName"] }}　　　
              :{{ $resp["Type"] }}　　　取引価格（総額）：{{ $resp["TradePrice"] }}　　　坪単価:{{ $resp["PricePerUnit"] }}　　　
              面積（㎡）:{{ $resp["Area"] }}　　　取引価格（㎡単価）:{{ $resp["UnitPrice"] }}　　　土地の形状:{{ $resp["LandShape"] }}　　　
              間口:{{ $resp["Frontage"] }}　　　全面道路・方位:{{ $resp["Direction"] }}　　　
              都市計画:{{ $resp["CityPlanning"] }}　　　建ぺい率:{{ $resp["CoverageRatio"] }}　　　容積率:{{ $resp["FloorAreaRatio"] }}　　　
              取引時点:{{ $resp["Period"] }}　　　</p>
            @break
        @endswitch
      @endforeach
      @foreach ($arrResp as $resp)
        @switch($resp["Type"])
          @case("宅地(土地と建物)")
          {{--
            <p>取引の種類:{{ $resp["Type"] }}　　　市区町村名:{{ $resp["Municipality"] }}
          　　　地区名:{{ $resp["DistrictName"] }}　　　取引価格（総額）：{{ $resp["TradePrice"] }}　　　面積（㎡）:{{ $resp["Area"] }}</p> --}}
            @break
        @endswitch
      @endforeach
      @foreach ($arrResp as $resp)
        @switch($resp["Type"])
          @case("中古マンション等")
            {{-- <p>取引の種類:{{ $resp["Type"] }}　　　市区町村名:{{ $resp["Municipality"] }}
            　　　地区名:{{ $resp["DistrictName"] }}　　　取引価格（総額）：{{ $resp["TradePrice"] }}　　　面積（㎡）:{{ $resp["Area"] }}</p> --}}
            @break
        @endswitch
      @endforeach
      @foreach ($arrResp as $resp)
        @switch($resp["Type"])
          @case("農地")
          {{--<p>取引の種類:{{ $resp["Type"] }}　　　市区町村名:{{ $resp["Municipality"] }}
            　　　地区名:{{ $resp["DistrictName"] }}　　　取引価格（総額）：{{ $resp["TradePrice"] }}　　　面積（㎡）:{{ $resp["Area"] }}</p> --}}
            @break
        @endswitch
      @endforeach
      @foreach ($arrResp as $resp)
        @switch($resp["Type"])
          @case("林地")
          {{--<p>取引の種類:{{ $resp["Type"] }}　　　市区町村名:{{ $resp["Municipality"] }}
            　　　地区名:{{ $resp["DistrictName"] }}　　　取引価格（総額）：{{ $resp["TradePrice"] }}　　　面積（㎡）:{{ $resp["Area"] }}</p> --}}
            @break
        @endswitch
      @endforeach

    <?php
    // print_r($cc);
    ?>

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