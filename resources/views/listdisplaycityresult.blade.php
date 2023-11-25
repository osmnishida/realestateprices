<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          一覧表示
      </h2>
  </x-slot>

  <canvas id="myChart"></canvas>

  <div class="mx-auto px-6">
    @php
      $counter = 0;
      $totalPricePerUnit = 0;
      $counter2023 = 0;
      $totalPricePerUnit2023 = 0;
      $counter2022 = 0;
      $totalPricePerUnit2022 = 0;
      $counter2021 = 0;
      $totalPricePerUnit2021 = 0;
      $counter2020 = 0;
      $totalPricePerUnit2020 = 0;
      $counter2019 = 0;
      $totalPricePerUnit2019 = 0;
      $counter2018 = 0;
      $totalPricePerUnit2018 = 0;
    @endphp
    @foreach($landPosts as $landPost)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost->id}}都道府県名：{{$landPost->prefecture}}市区町村名：{{$landPost->municipality}}地区名：{{$landPost->districtname}}
          取引価格（総額）：{{$landPost->tradeprice}}坪単価：{{$landPost->priceperunit}}面積（㎡）：{{$landPost->area}}
          取引価格（㎡単価）：{{$landPost->unitprice}}土地の形状：{{$landPost->landshape}}間口：{{$landPost->frontage}}今後の利用目的：{{$landPost->purpose}}前面道路：方位：{{$landPost->direction}}
          前面道路：種類：{{$landPost->classification}}前面道路：幅員（m）：{{$landPost->breadth}}都市計画：{{$landPost->cityplanning}}
          建ぺい率：{{$landPost->coverageratio}}容積率：{{$landPost->floorarearatio}}取引時点：{{$landPost->period}}
          取引の事情等：{{$landPost->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit = $totalPricePerUnit+($landPost->priceperunit);
        echo($totalPricePerUnit);
        echo('<br>');
        $counter++;
        echo($counter);
        echo("<br>");
        $averagePricePerUnit = $totalPricePerUnit/$counter;
        echo('平均坪単価：'.$averagePricePerUnit);
      @endphp
    @endforeach
    @foreach($landPosts2023 as $landPost2023)
    <div class="mt-4 p-8 bg-white w-full rounded-2xl">
      <p class=:mt-4 p-4">
        ID：{{$landPost2023->id}}都道府県名：{{$landPost2023->prefecture}}市区町村名：{{$landPost2023->municipality}}地区名：{{$landPost2023->districtname}}
        取引価格（総額）：{{$landPost2023->tradeprice}}坪単価：{{$landPost2023->priceperunit}}面積（㎡）：{{$landPost2023->area}}
        取引価格（㎡単価）：{{$landPost2023->unitprice}}土地の形状：{{$landPost2023->landshape}}間口：{{$landPost2023->frontage}}今後の利用目的：{{$landPost2023->purpose}}前面道路：方位：{{$landPost2023->direction}}
        前面道路：種類：{{$landPost2023->classification}}前面道路：幅員（m）：{{$landPost2023->breadth}}都市計画：{{$landPost2023->cityplanning}}
        建ぺい率：{{$landPost2023->coverageratio}}容積率：{{$landPost2023->floorarearatio}}取引時点：{{$landPost2023->period}}
        取引の事情等：{{$landPost2023->remarks}}
      </p>
    </div>
    @php
      $totalPricePerUnit2023 = $totalPricePerUnit2023+($landPost2023->priceperunit);
      echo($totalPricePerUnit2023);
      echo('<br>');
      $counter2023++;
      echo($counter2023);
      echo("<br>");
      $averagePricePerUnit2023 = $totalPricePerUnit2023/$counter2023;
      echo('平均坪単価：'.$averagePricePerUnit2023);
    @endphp
  @endforeach
    @foreach($landPosts2022 as $landPost2022)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost2022->id}}都道府県名：{{$landPost2022->prefecture}}市区町村名：{{$landPost2022->municipality}}地区名：{{$landPost2022->districtname}}
          取引価格（総額）：{{$landPost2022->tradeprice}}坪単価：{{$landPost2022->priceperunit}}面積（㎡）：{{$landPost2022->area}}
          取引価格（㎡単価）：{{$landPost2022->unitprice}}土地の形状：{{$landPost2022->landshape}}間口：{{$landPost2022->frontage}}今後の利用目的：{{$landPost2022->purpose}}前面道路：方位：{{$landPost2022->direction}}
          前面道路：種類：{{$landPost2022->classification}}前面道路：幅員（m）：{{$landPost2022->breadth}}都市計画：{{$landPost2022->cityplanning}}
          建ぺい率：{{$landPost2022->coverageratio}}容積率：{{$landPost2022->floorarearatio}}取引時点：{{$landPost2022->period}}
          取引の事情等：{{$landPost2022->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit2022 = $totalPricePerUnit2022+($landPost2022->priceperunit);
        echo($totalPricePerUnit2022);
        echo('<br>');
        $counter2022++;
        echo($counter2022);
        echo("<br>");
        $averagePricePerUnit2022 = $totalPricePerUnit2022/$counter2022;
        echo('平均坪単価：'.$averagePricePerUnit2022);
      @endphp
    @endforeach
    @foreach($landPosts2021 as $landPost2021)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost2021->id}}都道府県名：{{$landPost2021->prefecture}}市区町村名：{{$landPost2021->municipality}}地区名：{{$landPost2021->districtname}}
          取引価格（総額）：{{$landPost2021->tradeprice}}坪単価：{{$landPost2021->priceperunit}}面積（㎡）：{{$landPost2021->area}}
          取引価格（㎡単価）：{{$landPost2021->unitprice}}土地の形状：{{$landPost2021->landshape}}間口：{{$landPost2021->frontage}}今後の利用目的：{{$landPost2021->purpose}}前面道路：方位：{{$landPost2021->direction}}
          前面道路：種類：{{$landPost2021->classification}}前面道路：幅員（m）：{{$landPost2021->breadth}}都市計画：{{$landPost2021->cityplanning}}
          建ぺい率：{{$landPost2021->coverageratio}}容積率：{{$landPost2021->floorarearatio}}取引時点：{{$landPost2021->period}}
          取引の事情等：{{$landPost2021->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit2021 = $totalPricePerUnit2021+($landPost2021->priceperunit);
        echo($totalPricePerUnit2021);
        echo('<br>');
        $counter2021++;
        echo($counter2021);
        echo("<br>");
        $averagePricePerUnit2021 = $totalPricePerUnit2021/$counter2021;
        echo('平均坪単価：'.$averagePricePerUnit2021);
      @endphp
    @endforeach
    @foreach($landPosts2020 as $landPost2020)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost2020->id}}都道府県名：{{$landPost2020->prefecture}}市区町村名：{{$landPost2020->municipality}}地区名：{{$landPost2020->districtname}}
          取引価格（総額）：{{$landPost2020->tradeprice}}坪単価：{{$landPost2020->priceperunit}}面積（㎡）：{{$landPost2020->area}}
          取引価格（㎡単価）：{{$landPost2020->unitprice}}土地の形状：{{$landPost2020->landshape}}間口：{{$landPost2020->frontage}}今後の利用目的：{{$landPost2020->purpose}}前面道路：方位：{{$landPost2020->direction}}
          前面道路：種類：{{$landPost2020->classification}}前面道路：幅員（m）：{{$landPost2020->breadth}}都市計画：{{$landPost2020->cityplanning}}
          建ぺい率：{{$landPost2020->coverageratio}}容積率：{{$landPost2020->floorarearatio}}取引時点：{{$landPost2020->period}}
          取引の事情等：{{$landPost2020->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit2020 = $totalPricePerUnit2020+($landPost2020->priceperunit);
        echo($totalPricePerUnit2020);
        echo('<br>');
        $counter2020++;
        echo($counter2020);
        echo("<br>");
        $averagePricePerUnit2020 = $totalPricePerUnit2020/$counter2020;
        echo('平均坪単価：'.$averagePricePerUnit2020);
      @endphp
    @endforeach
    @foreach($landPosts2019 as $landPost2019)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost2019->id}}都道府県名：{{$landPost2019->prefecture}}市区町村名：{{$landPost2019->municipality}}地区名：{{$landPost2019->districtname}}
          取引価格（総額）：{{$landPost2019->tradeprice}}坪単価：{{$landPost2019->priceperunit}}面積（㎡）：{{$landPost2019->area}}
          取引価格（㎡単価）：{{$landPost2019->unitprice}}土地の形状：{{$landPost2019->landshape}}間口：{{$landPost2019->frontage}}今後の利用目的：{{$landPost2019->purpose}}前面道路：方位：{{$landPost2019->direction}}
          前面道路：種類：{{$landPost2019->classification}}前面道路：幅員（m）：{{$landPost2019->breadth}}都市計画：{{$landPost2019->cityplanning}}
          建ぺい率：{{$landPost2019->coverageratio}}容積率：{{$landPost2019->floorarearatio}}取引時点：{{$landPost2019->period}}
          取引の事情等：{{$landPost2019->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit2019 = $totalPricePerUnit2019+($landPost2019->priceperunit);
        echo($totalPricePerUnit2019);
        echo('<br>');
        $counter2019++;
        echo($counter2019);
        echo("<br>");
        $averagePricePerUnit2019 = $totalPricePerUnit2019/$counter2019;
        echo('平均坪単価：'.$averagePricePerUnit2019);
      @endphp
    @endforeach
    @foreach($landPosts2018 as $landPost2018)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class=:mt-4 p-4">
          ID：{{$landPost2018->id}}都道府県名：{{$landPost2018->prefecture}}市区町村名：{{$landPost2018->municipality}}地区名：{{$landPost2018->districtname}}
          取引価格（総額）：{{$landPost2018->tradeprice}}坪単価：{{$landPost2018->priceperunit}}面積（㎡）：{{$landPost2018->area}}
          取引価格（㎡単価）：{{$landPost2018->unitprice}}土地の形状：{{$landPost2018->landshape}}間口：{{$landPost2018->frontage}}今後の利用目的：{{$landPost2018->purpose}}前面道路：方位：{{$landPost2018->direction}}
          前面道路：種類：{{$landPost2018->classification}}前面道路：幅員（m）：{{$landPost2018->breadth}}都市計画：{{$landPost2018->cityplanning}}
          建ぺい率：{{$landPost2018->coverageratio}}容積率：{{$landPost2018->floorarearatio}}取引時点：{{$landPost2018->period}}
          取引の事情等：{{$landPost2018->remarks}}
        </p>
      </div>
      @php
        $totalPricePerUnit2018 = $totalPricePerUnit2018+($landPost2018->priceperunit);
        echo($totalPricePerUnit2018);
        echo('<br>');
        $counter2018++;
        echo($counter2018);
        echo("<br>");
        $averagePricePerUnit2018 = $totalPricePerUnit2018/$counter2018;
        echo('平均坪単価：'.$averagePricePerUnit2018);
      @endphp
    @endforeach
    @php
      $arrayData = ['2023年' => $averagePricePerUnit2023,
      '2022年' => $averagePricePerUnit2022,
      '2021年' => $averagePricePerUnit2021,
      '2020年' => $averagePricePerUnit2020,
      '2020年' => $averagePricePerUnit2019,
      '2020年' => $averagePricePerUnit2018];
      var_dump($arrayData);
      $jsonArrayData = json_encode($arrayData);
      var_dump($jsonArrayData);
    @endphp

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
      var jsArrayData = JSON.parse('<?php echo json_encode($arrayData)?>');
      console.log(jsArrayData);

      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
            type: 'line',
            data: {
              labels: ['2018年','2019年','2020年', '2021年', '2022年', '2023年'],
              datasets: [{
              label: '# of Votes',
              data: [<?php echo $averagePricePerUnit2018; ?>,<?php echo $averagePricePerUnit2019; ?>,<?php echo $averagePricePerUnit2020; ?>, <?php echo $averagePricePerUnit2021; ?>, <?php echo $averagePricePerUnit2022; ?>,<?php echo $averagePricePerUnit2023; ?>],
              borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });

    </script>
  </div>
</x-app-layout>