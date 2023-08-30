<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$response?->title}}
                            <a class="btn btn-secondary float-end" href="{{route('dashboard',['refresh'=>true])}}">Refresh</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                @foreach($response?->data?->headers as $header)
                                    <th>{{$header}}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($response?->data?->rows as $row)
                                <tr>
                                    @foreach($row as $data)
                                        <th>{{$data}}</th>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
