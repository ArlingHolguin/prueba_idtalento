<div class="mt-8 mb-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
        <link rel="stylesheet">
            <div class="w-full mb-12 px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
                        bg-gray-900 text-white">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                                <h3 class="font-semibold text-lg text-white">Registros</h3>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto ">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-800 text-white border-white">
                                        Nombre Completo</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-800 text-white border-white">
                                        Tipo de Documento</th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-800 text-white border-white0">
                                        Número de documento</th>
                                    <th
                                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-800 text-white border-white">
                                        Correo</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($registros as $registro)
                                    
                                
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="{{$registro->user->profile_photo_url}}"
                                            class="h-12 w-12 bg-white rounded-full border" alt="...">
                                        <span class="ml-3 font-bold text-white">{{$registro->user->name .' '.$registro->surname.' '. $registro->second_surname}}</span>
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$registro->document_type}}</td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$registro->document_number}}
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{$registro->user->email}}
                                    </td>
                                    
                                    
                                   
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            
       
    </div>
    <div class="mt-4 mb-8 py-8">
        {{ $registros->links() }}
    </div>
</div>
