@extends('dashboard')

@section('title')
    <h1>Tracking Contents</h1>
@endsection

@section('content')
    <div class="grid grid-rows-2 p-8">
        <div class="grid grid-cols-2 w-[100%]">
            <div class="px-8 flex flex-col justify-around">
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-sm hover:shadow-lg duration-200 bg-white w-screen flex justify-between">
                        <h1 class="flex items-center text-md font-semibold">Vehicle</h1>
                        <div class="w-12 h-12 rounded-[100%] bg-black flex justify-center font-bold">
                            <p class="text-white flex items-center">{{$vehicle}}</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-sm hover:shadow-lg duration-200 bg-white w-screen flex justify-between">
                            <h1 class="flex items-center text-md font-semibold">Mobile</h1>
                            <div class="w-12 h-12 rounded-[100%] bg-black flex justify-center font-bold">
                                <p class="text-white flex items-center">{{$mobile}}</p>
                            </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-sm hover:shadow-lg duration-200 bg-white w-screen flex justify-between">
                            <h1 class="flex items-center text-md font-semibold">Tip</h1>
                            <div class="w-12 h-12 rounded-[100%] bg-black flex justify-center font-bold">
                                <p class="text-white flex items-center">{{$tip}}</p>
                            </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-sm hover:shadow-lg duration-200 bg-white w-screen flex justify-between">
                            <h1 class="flex items-center text-md font-semibold">Tech</h1>
                            <div class="w-12 h-12 rounded-[100%] bg-black flex justify-center font-bold">
                                <p class="text-white flex items-center">{{$tech}}</p>
                            </div>
                    </div>
                </div>
            </div>

            <div>   
                <h1 class="text-lg">Polar</h1>
                <canvas class="" id="pieChart"></canvas>
            </div>
        </div>
        <div class="grid grid-cols-1 w-[100%] mt-16"> 
                <h1 class="text-lg">Bar Chart</h1>
                <canvas class="" id="myChart"></canvas>
        </div>
    </div>

    <script>

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['Vehicle', 'Mobile', 'Tech', 'Tip'],
            datasets: [{
                label: '# All Data',
                data: [{{$vehicle}}, {{$mobile}}, {{$tip}}, {{$tech}}],
                backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(255, 159, 64, 0.8)',
                'rgba(255, 205, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

        const pie = document.getElementById('pieChart');

        new Chart(pie, {
            type: 'polarArea',
            data: {
            labels: ['Vehicle', 'Mobile', 'Tech', 'Tip'],
            datasets: [{
                label: '# All Data',
                data: [{{$vehicle}}, {{$mobile}}, {{$tip}}, {{$tech}}],
                backgroundColor: [
                'rgba(255, 99, 132, 0.8)',
                'rgba(255, 159, 64, 0.8)',
                'rgba(255, 205, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                ],
                borderWidth: 1
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });

    </script>
@endsection