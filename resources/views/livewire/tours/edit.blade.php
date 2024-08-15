@extends('layouts.app')

@section('content')
<div class="py-8">
  <div class="container px-4 mx-auto">
    <div class="pt-6 bg-white shadow rounded">
      <div class="px-6 border-b">
        <div class="flex flex-wrap items-center mb-6">
          <h3 class="text-xl font-bold">{{$tour->destination}}</h3> 
        </div>
      </div>
      <div class="overflow" x-data="{}">
        <table class="table-auto w-full">
          <thead>
            <tr class="text-xs text-gray-500 text-left">
              <th class="flex items-center pl-6 py-4 font-medium">
                <a class="flex items-center">
                  <span>Start</span>
                </a>
              </th>
              <th class="py-4 font-medium">
                <a class="flex items-center">
                  <span>End</span>
                </a>
              </th>
              <th class="py-4 font-medium">
                <a class="flex items-center">
                  <span>Price</span>
                </a>
              </th>
              <th class="py-4 font-medium">
                <a class="flex items-center">
                  <span>Status</span>
                </a>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-xs bg-gray-50">
              <td class="px-6 font-medium">
                <livewire:components.edit-field :entity="$tour" :field="'start'" :key="'tours'.$tour->id"/>
              </td>
              <td class="px-1 font-medium">
                <livewire:components.edit-field :entity="$tour" :field="'end'" :key="'tours'.$tour->id"/>
              </td class="px-1 font-medium">
              <td>
                <livewire:components.edit-field :entity="$tour" :field="'price'" :key="'tours'.$tour->id"/>
              </td>
              <td class="cursor-pointer">
                <livewire:components.delete :entity="$tour" :key="'tours'.$tour->id"/>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
