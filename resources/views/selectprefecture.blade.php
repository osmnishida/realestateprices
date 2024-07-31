<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          都道府県坪単価比較グラフ表示
      </h2>
  </x-slot>

  <div class="mx-auto px-6">
    <form method="get" id="buttonform" action="{{ route('prefecturebarchart') }}">
      @csrf
      <p>取引時期From</p>
      <select id="from" name="from">
        <option value="2005-09-30">2005-09-30</option>
        @foreach (config('settingvalue.period') as $period)
          <option id="{{$period}}" value={{ $period }}>{{ $period }}</option>
        @endforeach
      </select>
      <p>取引時期To</p>
      <select id="to" name="to">
        <option value="2005-09-30">2005-09-30</option>
        @foreach (config('settingvalue.period') as $period)
          <option id="{{$period}}" value={{ $period }}>{{ $period }}</option>
        @endforeach
      </select>
      <br>
        <x-primary-button id="button" class="mt-4">
          送信する
        </x-primary-button>
      {{--
        <button id="button">送信する</button>
      --}}
      <p id="demo" class="hidden">Now Loading...</p>

      <div id="result"></div>

    </form>

  <canvas id="myChart"></canvas>

  <div class="mx-auto px-6">
  
  {{--
  @foreach($sortArray as $key=>$val)
    {{ $key }}
  @endforeach
  --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
    /*
      var jsArrayData = {!!json_encode($sortArray)!!};
  
      const labelArray=[];
      const dataArray=[];
      Object.keys(jsArrayData).forEach(function(key){
        labelArray.push(key);
        dataArray.push(jsArrayData[key]);
      })
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
            type: 'bar',
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
    */
    </script>
  </div>
</x-app-layout>