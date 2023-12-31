<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          都道府県選択市町村コード取得
      </h2>
  </x-slot>
  <div class="max-w-7xl max-auto px-6">

    @if(session('message'))
      <div class="text-red-600 font-bold">
        {{session('message')}}
      </div>
    @endif

    <form method="get" action="opcode">
      @csrf
      <p>都道府県選択</p>
      <select name="prefecturecode">
        <option value="01">北海道</option>
        <option value="02">青森県</option>
        <option value="03">岩手県</option>
        <option value="04">宮城県</option>
        <option value="05">秋田県</option>
        <option value="06">山形県</option>
        <option value="07">福島県</option>
        <option value="08">茨城県</option>
        <option value="09">栃木県</option>
        <option value="10">群馬県</option>
        <option value="11">埼玉県</option>
        <option value="12">千葉県</option>
        <option value="13">東京都</option>
        <option value="14">神奈川県</option>
        <option value="15">新潟県</option>
        <option value="16">富山県</option>
        <option value="17">石川県</option>
        <option value="18">福井県</option>
        <option value="19">山梨県</option>
        <option value="20">長野県</option>
        <option value="21">岐阜県</option>
        <option value="22">静岡県</option>
        <option value="23">愛知県</option>
        <option value="24">三重県</option>
        <option value="25">滋賀県</option>
        <option value="26">京都府</option>
        <option value="27">大阪府</option>
        <option value="28">兵庫県</option>
        <option value="29">奈良県</option>
        <option value="30">和歌山県</option>
        <option value="31">鳥取県</option>
        <option value="32">島根県</option>
        <option value="33">岡山県</option>
        <option value="34">広島県</option>
        <option value="35">山口県</option>
        <option value="36">徳島県</option>
        <option value="37">香川県</option>
        <option value="38">愛媛県</option>
        <option value="39">高知県</option>
        <option value="40">福岡県</option>
        <option value="41">佐賀県</option>
        <option value="42">長崎県</option>
        <option value="43">熊本県</option>
        <option value="44">大分県</option>
        <option value="45">宮崎県</option>
        <option value="46">鹿児島県</option>
        <option value="47">沖縄県</option>
      </select>

      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
  </div>
</x-app-layout>