<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          容積率別坪単価比較グラフ　条件選択
      </h2>
      <style>
        .hidden {
          display: none;
        }
      </style>
  </x-slot>
  @php
  // var_dump($data);
  @endphp

  <div class="mx-auto px-6">
    <form method="get" id="buttonform" action="{{ route('floorarearatiobarchart') }}">
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
        <option value="全国">全国</option>
        {{--
        @foreach ($municipality as $municipalityValue)
          <option value={{ $municipalityValue }}>{{ $municipalityValue }}</option>
        @endforeach
        --}}
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
      console.log(this.options[this.selectedIndex].id);
      const prefectureNumber = this.options[this.selectedIndex].id;
      const select = document.getElementById("cities");
      select.length = 0;  // for 全市町村だったらコンティニュー
      const option = document.createElement("option");
          option.text = '全市町村';
          select.add(option);
      /*
      let params = new URLSearchParams();
      params.set('prefecture', document.querySelector('#prefecture').value);
      */
      // fetch(`https://www.land.mlit.go.jp/webland/api/CitySearch?area=${prefectureNumber}`)
      /*
      fetch(`https://www.reinfolib.mlit.go.jp/ex-api/external/XIT002?area=${prefectureNumber}`,{headers: {
      // "Content-Type": "application/json",
      // 'Content-Type': 'application/x-www-form-urlencoded',
      "Ocp-Apim-Subscription-Key": "0a0cfbcc647a48faabd81dd83f6986e6",
      }
    })
    */
    // const params = {method:'post',body:JSON.stringify({prefectureNumber:prefectureNumber})}
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

    // const cities = result.textContent; // ["〇〇町", "xx町", "△△町"];//fetchで取ってきた値 
    // console.log(cities);
    




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
</x-app-layout>