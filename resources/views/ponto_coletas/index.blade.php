@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        #map {
          height: 80vh;
          width: 200vh;
        }
        body {
          margin: 0;
          padding: 0;
        }
        
        @media (max-width: 767px) {
        .carousel {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 1rem;
        }

        .carousel-item {
            flex: 0 0 auto;
            width: 100%;
            scroll-snap-align: start;
       }
    }
    </style>
</head>
<div class="card p-1 m-2 md:m-8">

    <div class="card-header  text-white rounded-xl" style="background-color: #e24ab4">Pontos de Coleta</div>
        <div id="map"></div>
        
        <script type="text/javascript">
        
            function initMap() {
            const myCoord = { lat: -8.053066, lng: -34.906756 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: myCoord,
            });
            var openInfoWindow = null;

            // Adicionando marcadores para cada ponto de coleta do banco de dados
            @foreach($ponto_coletas as $ponto_coleta)
                var latitude = parseFloat("{{ $ponto_coleta->latitude }}");
                var longitude = parseFloat("{{ $ponto_coleta->longitude }}");

                if (!isNaN(latitude) && !isNaN(longitude)) {
                    const marker = new google.maps.Marker({
                        position: { lat: latitude, lng: longitude },
                        map: map,
                    });
                    // Adicionando a janela de informações referente a cada ponto de coleta
                    var infoContent = '<strong>Nome:</strong> {{ $ponto_coleta->nome }}<br>';
                    infoContent += '<strong>Email:</strong> {{ $ponto_coleta->email }}<br>';
                    infoContent += '<strong>Fone:</strong> {{ $ponto_coleta->fone }}<br>';
                    infoContent += '<strong>Endereço:</strong> {{ $ponto_coleta->endereco }}<br>';

                    var infoWindow = new google.maps.InfoWindow({
                        content: infoContent,
                    });

                    (function (marker, infoWindow) {
                        marker.addListener('click', function () {
                            if (openInfoWindow) {
                                openInfoWindow.close();
                            }

                            infoWindow.open(map, marker);
                            openInfoWindow = infoWindow;
                        });
                    })(marker, infoWindow);
                }
            @endforeach
            
            //mostrar a posição do usuário ou do dispositivo no Maps
            const locationButton = document.createElement("button");

            locationButton.textContent = "Pan to Current Location";
            locationButton.classList.add("custom-map-control-button");
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
            locationButton.addEventListener("click", () => {
                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Location found.");
                    infoWindow.open(map);
                    map.setCenter(pos);
                    },
                    () => {
                    handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
                } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
                }
            });
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation
                ? "Error: The Geolocation service failed."
                : "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
            }
        

            window.initMap = initMap;
        </script>

        <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
        
        <div class="card-body rounded-xl glass-table">

            @can('create-ponto-coleta')
                <a href="{{ route('ponto_coletas.create') }}" class="btn btn-success btn-xl my-2 font-semibold text-slate-900" style="background-color: #e24ab4"><i class="bi bi-plus-circle"></i> Adicionar novo Ponto de Coleta</a>
            @endcan

            <table class="table table-striped table-bordered border-separate border border-slate-500 rounded-xl md:table-auto carousel flex-wrap divide-y divide-gray-300 w-full">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400 w-full md:w-auto">


                    <tr>
                    {{-- <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">ID</th> --}}
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Nome</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Email</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Fone</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Endereço</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Latitude</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4">Longitude</th>
                    <th scope="col" class="border border-slate-600 rounded-xl"style="color: #e24ab4; width: 22%">Ação</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($ponto_coletas as $ponto_coleta)

                    <tr class="border border-slate-600 rounded-xl"style="color: #e24ab4">
                        {{-- <th scope="row" class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $loop->iteration }}</th> --}}
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->nome }}</td>
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->email }}</td>
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->fone }}</td>
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->endereco }}</td>
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->latitude }}</td>
                        <td class="border border-slate-600 rounded-xl"style="color: #e24ab4">{{ $ponto_coleta->longitude }}</td>

                        <td class="border border-slate-600 rounded-xl">
                            <form action="{{ route('ponto_coletas.destroy', $ponto_coleta->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                @can('show-ponto-coleta')
                                <a href="{{ route('ponto_coletas.show', $ponto_coleta->id) }}" class="btn bg-pink-300 btn-xl mb-2 rounded-xl p-1 m-1"><i class="bi bi-eye"></i> Mostrar</a>
                                @endcan
                                @can('edit-ponto-coleta')
                                    <a href="{{ route('ponto_coletas.edit', $ponto_coleta->id) }}" class="btn bg-pink-300 btn-xl mb-2 rounded-xl p-1 m-1"><i class="bi bi-pencil-square"></i> Editar</a>
                                @endcan

                                @can('delete-ponto-coleta')
                                    <button type="submit" class="btn bg-pink-300 btn-xl mb-2 rounded-xl p-1 m-1" onclick="return confirm('Está certo que quer deletar o Ponto de Coleta?');"><i class="bi bi-trash"></i> Excluir</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @empty
                        <td colspan="6" class="border border-slate-600 rounded-xl">
                            <span class="text-danger">
                                <strong>Nenhum Ponto de Coleta foi Encontrado!</strong>
                            </span>
                        </td>
                    @endforelse
                </tbody>
            </table>

            {{ $ponto_coletas->links() }}

        </div>
    </div>
</div>
@endsection
