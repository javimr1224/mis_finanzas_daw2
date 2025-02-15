<x-layouts.index :title="$title">
  <x-table :tableData="$tableData" class="" />
  {{-- {{ dd($tableData) }} --}}
  <div class="mt-4">
    <x-button>Add income
    </x-table>
  </div>
  <x-alert-error/>
</x-layouts.index>