<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          取引年別坪単価グラフ表示
      </h2>
  </x-slot>

  <canvas id="myChart"></canvas>

  {{-- {{ $arrayAvgData }} --}}

  <div class="mx-auto px-6">
    <form method="get" id="buttonform" action="{{ route('listdisplaycityresult') }}">
      @csrf
      <p>都道府県選択</p>
      <select id="prefecture" name="prefecture">
        <option value="全国">全国</option>
        @foreach (config('settingvalue.prefecture') as $prefectureNumber=>$prefectureValue)
          <option id="{{$prefectureNumber}}" value={{ $prefectureValue }}>{{ $prefectureValue }}</option>
        @endforeach
      </select>
      <br>
      <p>市町村選択</p>
      <select id="cities" name="municipality">
        <option value="全市町村">全市町村</option>

        {{-- @foreach ($municipality as $municipalityValue)
          <option value={{ $municipalityValue }}>{{ $municipalityValue }}</option>
        @endforeach --}}
      </select>
      <br>
      <p>用途地域選択</p>
      <select id="cityplanning" name="cityplanning">
        <option value="問わない">問わない</option>
        @foreach ($cityPlanning as $cityPlanningValue)
          <option value={{ $cityPlanningValue }}>{{ $cityPlanningValue }}</option>
        @endforeach
      </select>
      <br>
      <br>

      {{--
      <p>前面道路幅員(m)</p>
      <select id="breadth" name="breadth">
        <option value="問わない">問わない</option>
        @foreach ($breadth as $breadthValue)
        <option value={{ $breadthValue }}>{{ breadthValue }}</option>
        @endforeach
      </select>
      --}}
      
      <x-primary-button id="button" class="mt-4">
        送信する
      </x-primary-button>
      {{--
        <button id="button">送信する</button>
      --}}
      <p id="demo" class="hidden">Now Loading...</p>

      <div id="result"></div>

    </form>

    
    
    {{--
    @foreach($landPosts as $landPost)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class="mt-4 p-4">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
    const button = document.querySelector('#button');
    button.addEventListener('click', toggleDisplay);

    function toggleDisplay() {
      const form = document.querySelector('#buttonform');
      const demo = document.querySelector('#demo');
      demo.classList.toggle('hidden');
      button.disabled=true;
      form.submit().then(function() {
        demo.classList.add('hidden');
        button.disabled=false;
      })

    }

    let result = document.querySelector('#result');
    let prefecture = document.querySelector('#prefecture');
    document.querySelector('#prefecture').addEventListener('change',function() {
      // console.log(this.options[this.selectedIndex].id);
      const prefectureNumber = this.options[this.selectedIndex].id;
      const select = document.getElementById("cities");
      select.innerHtml = '';  // for 全市町村だったらコンティニュー
      const option = document.createElement("option");
          option.text = '全市町村';
          select.add(option);
      console.log(prefectureNumber);

      fetch(`municipality/${prefectureNumber}`)
        // .then(res =>  res.text())
        .then(res => res.json())
        .then(cities => {
          console.log(cities);
          console.log(cities.id);
          // console.log(JSON.parse(cities).jsonData);
          const select = document.getElementById("cities");//市区町村選択のセレクトボックス
          cities.forEach(city => {
            console.log(city);
          const option = document.createElement("option");
          option.text = city.name;
          option.value = city.id;
          select.add(option);
          
          })
        });
    }, false);
  
      /*
      let params = new URLSearchParams();
      params.set('prefecture', document.querySelector('#prefecture').value);
      */
      // fetch(`https://www.land.mlit.go.jp/webland/api/CitySearch?area=${prefectureNumber}`)
      // fetch(`https://www.reinfolib.mlit.go.jp/ex-api/external/XIT002?area=${prefectureNumber}`,{headers: {
      // "Content-Type": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
      // "Ocp-Apim-Subscription-Key": "0a0cfbcc647a48faabd81dd83f6986e6",
      // }
    // })
        // .then(res =>  res.text())
        // .then(cities => {
          // console.log(JSON.parse(cities).data);
          // const select = document.getElementById("cities");//市区町村選択のセレクトボックス
          // JSON.parse(cities).data.forEach(city => {
            // console.log(city);
          // const option = document.createElement("option");
          // option.text = city.name;
          // option.value = city.id;
          // select.add(option);
          
          // })
        // });
  // }, false);

    // const cities = result.textContent; // ["〇〇町", "xx町", "△△町"];//fetchで取ってきた値 
    // console.log(cities);

    var jsArrayData = {!!json_encode($averageArray)!!};
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
              label: '坪単価（円）',
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
    




/*

    let result = document.querySelector('#result');
    let prefecture = document.querySelector('#prefecture');
    document.querySelector('#prefecture').addEventListener('input',function() {
      // console.log(prefecture.value);
      let params = new URLSearchParams();
      params.set('prefecture', document.querySelector('#prefecture').value);
      fetch(`municipality?${params.toString()}`)
        .then(res => res.text())
        .then(text => result.textContent = text);
    }, false);

    $basiccca="https://www.land.mlit.go.jp/webland/api/CitySearch?area=";
        $ccaurl="$basiccca" . "$prefectureNumber";
        // return $ccaurl;
        $jsoncc = file_get_contents($ccaurl);
        $jsoncc = mb_convert_encoding($jsoncc, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        // return $jsoncc;
        $arrjsoncc = json_decode($jsoncc,true);
        $arrjsoncc = $arrjsoncc["data"];

    const cities = result.textContent; // ["〇〇町", "xx町", "△△町"];//fetchで取ってきた値 
    console.log(cities);
    const select = document.getElementById("cities");//市区町村選択のセレクトボックス
    cities.forEach(city => {
        const option = document.createElement("option");
        option.text = city;
        select.add(option);
    });
    */

    //console.log(result);
    // const btn = document.getElementById("button");
    // const list = document.getElementById("list");
    // btn.addEventListener("click",function(){
    // list.classList.toggle("hidden")
    // });
    </script>
  </div>




{{--
  <div class="mx-auto px-6">
    <form method="get" action="{{ route('listdisplaycity') }}">
      @csrf
      <p>都道府県選択</p>
      <select name="prefecture">
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
      </select>
      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
    
    {{--
    @foreach($landPosts as $landPost)
      <div class="mt-4 p-8 bg-white w-full rounded-2xl">
        <p class="mt-4 p-4">
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
    
  </div>
</x-app-layout>

{{--
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

--}}
