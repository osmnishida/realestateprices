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
  var_dump($arrjsoncc);
  @endphp

  <div class="mx-auto px-6">
    <form method="get" id="buttonform" action="{{ route('floorarearatiobarchart') }}">
      @csrf
      <p>都道府県選択</p>
      <select id="prefecture" name="prefecture">
        <option value="全国">全国</option>
        @foreach ($selectPrefecture as $prefectureValue)
          <option value={{ $prefectureValue }}>{{ $prefectureValue }}</option>
        @endforeach
      </select>
      <br>
      <p>市町村選択</p>
      <select id="municipality" name="municipality">
        <option value="全国">全国</option>
        <select name="citycode">
        @php
          print_r($arrjsoncc);
        @endphp
        {{--
          @foreach ($arrjsoncc as $cc)
            <option value={{ $cc["id"] }}>{{ $cc["name"] }}</option>
        <?php 
          print_r($arrjsoncc);
          // echo $cc[0];
        ?>
        
          {{ $cc["name"] }}
          {{ $cc["id"] }}
          <br>
          <?php
          // print_r($cc);
          ?>
          @endforeach
          --}}
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
    document.querySelector('#prefecture').addEventListener('input',function() {
      console.log(prefecture.value);
      let params = new URLSearchParams();
      params.set('prefecture', document.querySelector('#prefecture').value);
      fetch(`selectfloorarearatio?${params.toString()}`)
        .then(res => res.text())
        .then(text => result.textContent = text);
    }, false);
    //console.log(result);
    // const btn = document.getElementById("button");
    // const list = document.getElementById("list");
    // btn.addEventListener("click",function(){
    // list.classList.toggle("hidden")
    // });
    </script>
  </div>
</x-app-layout>