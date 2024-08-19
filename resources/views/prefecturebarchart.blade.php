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
      var jsAverageArrayData = {!!json_encode($sortAverageArray)!!};
      const labelXArray=[];
      const dataAverageArray=[];
      Object.keys(jsAverageArrayData).forEach(function(key){
        labelXArray.push(key);
        dataAverageArray.push(jsAverageArrayData[key]);
      })

      var jsCountArrayData = {!!json_encode($sortCountArray)!!};
      const dataCountArray=[];
      Object.keys(jsCountArrayData).forEach(function(key){
        dataCountArray.push(jsCountArrayData[key]);
      })      
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
            data: {
              labels: labelXArray,
              datasets: [{
                type: "bar",
                label: '坪単価(円）',
                data: dataAverageArray,
                yAxisID: "left-y-axis",
                borderWidth: 1
              },
              {
                type: "line",
                label: 'データ数(個）',
                data: dataCountArray,
                yAxisID: "right-y-axis",
                borderWidth: 1
              }],
            },
            options: {
              scales: {
                "left-y-axis": 
                  {
                    title: {
                      display: true,
                      text: '平均坪単価（円）'
                    },
                    type: "linear",
                    position: "left",
                  // beginAtZero: true
                  },
                  "right-y-axis": 
                  {
                    title: {
                      display: true,
                      text: 'データ数（個）'
                    },
                    type: "linear",
                    position: "right",
                  // beginAtZero: true
                  },
              }
            }
          }
        );

    </script>
  </div>
</x-app-layout>