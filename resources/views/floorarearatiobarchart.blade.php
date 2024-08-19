<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          容積率別坪単価比較グラフ表示
      </h2>
  </x-slot>

  <canvas id="myChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
      var jsAverageArrayData = {!!json_encode($averageArray)!!};
      const labelXArray=[];
      const dataAverageArray=[];
      Object.keys(jsAverageArrayData).forEach(function(key){
        labelXArray.push(key);
        dataAverageArray.push(jsAverageArrayData[key]);
      })

      var jsCountArrayData = {!!json_encode($countArray)!!};
      // const labelCountArray=[];
      const dataCountArray=[];
      Object.keys(jsCountArrayData).forEach(function(key){
        // labelCountArray.push(key);
        dataCountArray.push(jsCountArrayData[key]);
      })

      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
  
            // type: 'bar',
            data: {
              labels: labelXArray,
              datasets: [{
              type: 'bar',
              label: '平均坪単価（円）',
              data: dataAverageArray,
              yAxisID: "left-y-axis",
              borderWidth: 1
              },
              { type: 'line',
                label: 'データ数',
                data: dataCountArray,
                yAxisID: "right-y-axis",
                borderWidth: 1
              }],
              
            },

          options: {
            responsive: true,
              scales: {
                "left-y-axis":
                  {
                    title: {
                      display: true,
                      text: '平均坪単価（円）'
                    },
                    type: "linear",
                    position: "left"
                    // ticks: {
                      // max: 1000000,
                      // min: 0,

                    // }
                  // beginAtZero: true,
                  },
                  "right-y-axis":
                  {
                    title: {
                      display: true,
                      text: 'データ数（個）'
                    }, 
                    type: "linear",
                    position: "right"
                    // ticks: {
                      // max: 1000,
                      // min: 0,
                      
                    // }
                  // beginAtZero: true
                  }
              }
            }
          }
        );

    </script>
  </div>
</x-app-layout>