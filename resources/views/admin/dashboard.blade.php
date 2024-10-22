<x-admin.layout>
    <x-slot name="header">
        {{ __('Панель') }}
    </x-slot>

    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-base-900">
                    You're logged in!1
                </div>
            </div>
        </div>
    </div>-->
<form method="POST" action="{{ route('admin.dashboard') }}" style="width: 300px;">
    @csrf
            <div class="py-2">
                <x-admin.form.input id="name" type="text" name="search" value="" style="padding: 5px; font-size: 12px; height: 2rem!important"/>
            </div>
            <div class="flex justify-start">
                <x-admin.form.button class="btn-sm">Пошук</x-admin.form.button>
            </div>
</form>
    <div class="py-2">
        <div class="min-w-full  border-base-200 shadow overflow-x-auto">
            <x-admin.grid.table style="width: 100%;">
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Id', 'attribute' => 'id'])
                        </x-admin.grid.th>
                        <x-admin.grid.th style="min-width: 200px; max-width: 200px;">
                            @include('admin.includes.sort-link', ['label' => 'Назва', 'attribute' => 'name'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Тип противаги
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Стовп
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Проріз воріт
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Висота воріт від землі
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Просвіт під воротами
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Напрямна
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Загальна довжина
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Сторінки
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Кут зарізування труб
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            Каркас
                        </x-admin.grid.th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                @foreach($requests as $request)
                    <tr>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->id }}
                                <a href="{{route('viewpdf', $request->id)}}" class="no-underline hover:underline text-cyan-600">site</a>
                                <a href="{{$request->google_file_link}}" class="no-underline hover:underline text-cyan-600">google</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                               {{ $request->name }} ( <small>{{ $request->created_at }}</small> )
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                @if($request->counterweight_type == 'square')
                                Квадратний
                                @else
                                Трикутний
                                @endif
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                @if($request->material == 'brick')
                                Цегла
                                @else
                                Труба
                                @endif
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->gate_opening }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->gate_height }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->clearance_under_gate }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->guide }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->total_length }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->pages }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->pipe_angle }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                @if($request->frame == 'tprofile')
                                Т-профіль
                                @else
                                Труба з металобази
                                @endif
                            </div>
                        </x-admin.grid.td>
                    </tr>
                    @endforeach
                    @if($requests->isEmpty())
                        <tr>
                            <td colspan="3">
                                <div class="flex flex-col justify-center items-center py-4 text-lg">
                                    {{ __('No Result Found') }}
                                </div>
                            </td>
                        </tr>
                    @endif
                </x-slot>
            </x-admin.grid.table>
        </div>
        <div class="py-8">
            {{ $requests->appends(request()->query())->links() }}
        </div>
    </div>
</x-admin.layout>

<style type="text/css">
    th { font-size: 10px!important; }
</style>
