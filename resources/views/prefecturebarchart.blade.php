<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          都道府県坪単価比較グラフ表示
      </h2>
  </x-slot>

  <canvas id="myChart"></canvas>

  <div class="mx-auto px-6">
  
  {{--
  @foreach($sortArray as $key=>$val)
    {{ $key }}
  @endforeach
  --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
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
              label: '坪単価(円）',
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