<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          一覧表示
      </h2>
  </x-slot>

  <canvas id="myChart"></canvas>

  <div class="mx-auto px-6">
    <form method="get" action="{{ route('listdisplaycityresult') }}">
      @csrf
      
      <select name="citycode">
        @foreach ($cityCodes as $cc)
          <option value={{ $cc["citycode"] }}>{{ $cc["cityname"] }}</option>
          {{ $cc["name"] }}
          {{ $cc["id"] }}
          <br>
        @endforeach
        </select>
      <p>取引時期From</p>
      <select name="from">
        <option value="2023-06-30">2023年第２四半期</option>
        <option value="2023-03-31">2023年第１四半期</option>
        <option value="2022-12-31">2022年第４四半期</option>
        <option value="2022-09-30">2022年第３四半期</option>
        <option value="2022-06-30">2022年第２四半期</option>
        <option value="2022-03-31">2022年第１四半期</option>
        <option value="2021-12-31">2021年第４四半期</option>
        <option value="2021-09-30">2021年第３四半期</option>
        <option value="2021-06-30">2021年第２四半期</option>
        <option value="2021-03-31">2021年第１四半期</option>
        <option value="2020-12-31">2020年第４四半期</option>
        <option value="2020-09-30">2020年第３四半期</option>
        <option value="2020-06-30">2020年第２四半期</option>
        <option value="2020-03-31">2020年第１四半期</option>
        <option value="2019-12-31">2019年第４四半期</option>
        <option value="2019-09-30">2019年第３四半期</option>
        <option value="2019-06-30">2019年第２四半期</option>
        <option value="2019-03-31">2019年第１四半期</option>
        <option value="2018-12-31">2018年第４四半期</option>
        <option value="2018-09-30">2018年第３四半期</option>
        <option value="2018-06-30">2018年第２四半期</option>
        <option value="2018-03-31">2018年第１四半期</option>
        <option value="2017-12-31">2017年第４四半期</option>
        <option value="2017-09-30">2017年第３四半期</option>
        <option value="2017-06-30">2017年第２四半期</option>
        <option value="2017-03-31">2017年第１四半期</option>
        <option value="2016-12-31">2016年第４四半期</option>
        <option value="2016-09-30">2016年第３四半期</option>
        <option value="2016-06-30">2016年第２四半期</option>
        <option value="2016-03-31">2016年第１四半期</option>
        <option value="2015-12-31">2015年第４四半期</option>
        <option value="2015-09-30">2015年第３四半期</option>
        <option value="2015-06-30">2015年第２四半期</option>
        <option value="2015-03-31">2015年第１四半期</option>
        <option value="2014-12-31">2014年第４四半期</option>
        <option value="2014-09-30">2014年第３四半期</option>
        <option value="2014-06-30">2014年第２四半期</option>
        <option value="2014-03-31">2014年第１四半期</option>
        <option value="2013-12-31">2013年第４四半期</option>
        <option value="2013-09-30">2013年第３四半期</option>
        <option value="2013-06-30">2013年第２四半期</option>
        <option value="2013-03-31">2013年第１四半期</option>
        <option value="2012-12-31">2012年第４四半期</option>
        <option value="2012-09-30">2012年第３四半期</option>
        <option value="2012-06-30">2012年第２四半期</option>
        <option value="2012-03-31">2012年第１四半期</option>
        <option value="2011-12-31">2011年第４四半期</option>
        <option value="2011-09-30">2011年第３四半期</option>
        <option value="2011-06-30">2011年第２四半期</option>
        <option value="2011-03-31">2011年第１四半期</option>
        <option value="2010-12-31">2010年第４四半期</option>
        <option value="2010-09-30">2010年第３四半期</option>
        <option value="2010-06-30">2010年第２四半期</option>
        <option value="2010-03-31">2010年第１四半期</option>
        <option value="2009-12-31">2009年第４四半期</option>
        <option value="2009-09-30">2009年第３四半期</option>
        <option value="2009-06-30">2009年第２四半期</option>
        <option value="2009-03-31">2009年第１四半期</option>
        <option value="2008-12-31">2008年第４四半期</option>
        <option value="2008-09-30">2008年第３四半期</option>
        <option value="2008-06-30">2008年第２四半期</option>
        <option value="2008-03-31">2008年第１四半期</option>
        <option value="2007-12-31">2007年第４四半期</option>
        <option value="2007-09-30">2007年第３四半期</option>
        <option value="2007-06-30">2007年第２四半期</option>
        <option value="2007-03-31">2007年第１四半期</option>
        <option value="2006-12-31">2006年第４四半期</option>
        <option value="2006-09-30">2006年第３四半期</option>
        <option value="2006-06-30">2006年第２四半期</option>
        <option value="2006-03-31">2006年第１四半期</option>
        <option value="2005-12-31">2005年第４四半期</option>
        <option value="2005-09-30">2005年第３四半期</option>
      </select>
      <p>取引時期To</p>
      <select name="to">
        <option value="2023-06-30">2023年第２四半期</option>
        <option value="2023-03-31">2023年第１四半期</option>
        <option value="2022-12-31">2022年第４四半期</option>
        <option value="2022-09-30">2022年第３四半期</option>
        <option value="2022-06-30">2022年第２四半期</option>
        <option value="2022-03-31">2022年第１四半期</option>
        <option value="2021-12-31">2021年第４四半期</option>
        <option value="2021-09-30">2021年第３四半期</option>
        <option value="2021-06-30">2021年第２四半期</option>
        <option value="2021-03-31">2021年第１四半期</option>
        <option value="2020-12-31">2020年第４四半期</option>
        <option value="2020-09-30">2020年第３四半期</option>
        <option value="2020-06-30">2020年第２四半期</option>
        <option value="2020-03-31">2020年第１四半期</option>
        <option value="2019-12-31">2019年第４四半期</option>
        <option value="2019-09-30">2019年第３四半期</option>
        <option value="2019-06-30">2019年第２四半期</option>
        <option value="2019-03-31">2019年第１四半期</option>
        <option value="2018-12-31">2018年第４四半期</option>
        <option value="2018-09-30">2018年第３四半期</option>
        <option value="2018-06-30">2018年第２四半期</option>
        <option value="2018-03-31">2018年第１四半期</option>
        <option value="2017-12-31">2017年第４四半期</option>
        <option value="2017-09-30">2017年第３四半期</option>
        <option value="2017-06-30">2017年第２四半期</option>
        <option value="2017-03-31">2017年第１四半期</option>
        <option value="2016-12-31">2016年第４四半期</option>
        <option value="2016-09-30">2016年第３四半期</option>
        <option value="2016-06-30">2016年第２四半期</option>
        <option value="2016-03-31">2016年第１四半期</option>
        <option value="2015-12-31">2015年第４四半期</option>
        <option value="2015-09-30">2015年第３四半期</option>
        <option value="2015-06-30">2015年第２四半期</option>
        <option value="2015-03-31">2015年第１四半期</option>
        <option value="2014-12-31">2014年第４四半期</option>
        <option value="2014-09-30">2014年第３四半期</option>
        <option value="2014-06-30">2014年第２四半期</option>
        <option value="2014-03-31">2014年第１四半期</option>
        <option value="2013-12-31">2013年第４四半期</option>
        <option value="2013-09-30">2013年第３四半期</option>
        <option value="2013-06-30">2013年第２四半期</option>
        <option value="2013-03-31">2013年第１四半期</option>
        <option value="2012-12-31">2012年第４四半期</option>
        <option value="2012-09-30">2012年第３四半期</option>
        <option value="2012-06-30">2012年第２四半期</option>
        <option value="2012-03-31">2012年第１四半期</option>
        <option value="2011-12-31">2011年第４四半期</option>
        <option value="2011-09-30">2011年第３四半期</option>
        <option value="2011-06-30">2011年第２四半期</option>
        <option value="2011-03-31">2011年第１四半期</option>
        <option value="2010-12-31">2010年第４四半期</option>
        <option value="2010-09-30">2010年第３四半期</option>
        <option value="2010-06-30">2010年第２四半期</option>
        <option value="2010-03-31">2010年第１四半期</option>
        <option value="2009-12-31">2009年第４四半期</option>
        <option value="2009-09-30">2009年第３四半期</option>
        <option value="2009-06-30">2009年第２四半期</option>
        <option value="2009-03-31">2009年第１四半期</option>
        <option value="2008-12-31">2008年第４四半期</option>
        <option value="2008-09-30">2008年第３四半期</option>
        <option value="2008-06-30">2008年第２四半期</option>
        <option value="2008-03-31">2008年第１四半期</option>
        <option value="2007-12-31">2007年第４四半期</option>
        <option value="2007-09-30">2007年第３四半期</option>
        <option value="2007-06-30">2007年第２四半期</option>
        <option value="2007-03-31">2007年第１四半期</option>
        <option value="2006-12-31">2006年第４四半期</option>
        <option value="2006-09-30">2006年第３四半期</option>
        <option value="2006-06-30">2006年第２四半期</option>
        <option value="2006-03-31">2006年第１四半期</option>
        <option value="2005-12-31">2005年第４四半期</option>
        <option value="2005-09-30">2005年第３四半期</option>
      </select>
      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
    {{--
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
    @endforeach
    --}}
    @php
    var_dump($arrayAvgData);
    @endphp
    <br>
    
    @foreach($arrayAvgData as $key=>$val)
    {{ $key }}
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
      var jsArrayData = {!!json_encode($arrayAvgData)!!};
      console.log(jsArrayData);
  
      const labelArray=[];
      const dataArray=[];
      Object.keys(jsArrayData).forEach(function(key){
        labelArray.push(key);
        dataArray.push(jsArrayData[key]);
      })
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
            type: 'line',
            data: {
              labels: labelArray,
              datasets: [{
              label: '# of Votes',
              data: dataArray,
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