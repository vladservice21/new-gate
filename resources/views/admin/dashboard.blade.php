<x-admin.layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
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

    <div class="py-2">
        <div class="min-w-full  border-base-200 shadow overflow-x-auto">
            <x-admin.grid.table>
                <x-slot name="head">
                    <tr class="bg-base-200">
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Id', 'attribute' => 'id'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Created_at', 'attribute' => 'created_at'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Counterweight_type', 'attribute' => 'counterweight_type'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Material', 'attribute' => 'material'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Gate_opening', 'attribute' => 'gate_opening'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Gate_height', 'attribute' => 'gate_height'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Clearance_under_gate', 'attribute' => 'clearance_under_gate'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Guide', 'attribute' => 'guide'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Total_length', 'attribute' => 'total_length'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Pages', 'attribute' => 'pages'])
                        </x-admin.grid.th>
                        <x-admin.grid.th>
                            @include('admin.includes.sort-link', ['label' => 'Pipe_angle', 'attribute' => 'pipe_angle'])
                        </x-admin.grid.th>
                    </tr>
                </x-slot>
                <x-slot name="body">
                @foreach($requests as $request)
                    <tr>
                        <x-admin.grid.td>
                            <div>
                                <a href="{{route('viewpdf', $request->id)}}" class="no-underline hover:underline text-cyan-600">{{ $request->id }}</a>
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->created_at }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->counterweight_type }}
                            </div>
                        </x-admin.grid.td>
                        <x-admin.grid.td>
                            <div>
                                {{ $request->material }}
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
