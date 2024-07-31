<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          用途地域別坪単価比較グラフ　条件選択
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
    <form method="get" id="buttonform" action="{{ route('cityplanningbarchart') }}">
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
      <br>
      
      <x-primary-button id="button" class="mt-4">
        送信する
      </x-primary-button>

      <p id="demo" class="hidden">Now Loading...</p>

      <div id="result"></div>

    </form>


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

    </script>
  </div>
</x-app-layout>