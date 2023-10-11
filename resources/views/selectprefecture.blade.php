<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          都道府県選択市町村コード取得
      </h2>
  </x-slot>
  <div class="max-w-7xl max-auto px-6">
    <form method="get" action="opcode">
      @csrf
      <p>都道府県選択</p>
      <select name="prefecturecode">
        <option value="01">北海道</option>
        <option value="02">青森県</option>
      </select>

      <x-primary-button class="mt-4">
        送信する
      </x-primary-button>
    </form>
  </div>
</x-app-layout>