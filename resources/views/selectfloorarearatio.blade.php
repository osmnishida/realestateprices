<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          容積率別坪単価比較グラフ　条件選択
      </h2>
  </x-slot>

  <div class="mx-auto px-6">
    <form method="get" action="{{ route('floorarearatiobarchart') }}">
      @csrf
      <p>都道府県選択</p>
      <select name="prefecture">
        <option value="全国">全国</option>
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