<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Registros
        </h2>
    </x-slot>


    <div class="mt-8 max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
            <form action="{{ route('form.store', $form) }}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="w-full">
                        <input class="w-full rounded-md @error('first_name') border-red-500 @enderror" type="text"
                            name="first_name" id="" placeholder=" Ingresa tu primer nombre" value="{{ old('first_name')}}">
                            @error('first_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    
                    
                    <!-- ... -->
                    <div class="w-full">
                        <input class="w-full rounded-md  @error('second_name') border-red-500 @enderror" type="text" name="second_name" id=""
                            placeholder="Ingresa tu segundo nombre - opcional**" value="{{ old('second_name')}}">
                            @error('second_name')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="w-full">
                        <input class="w-full rounded-md @error('surname') border-red-500 @enderror" type="text" name="surname" id=""
                            placeholder="Ingresa tu primer apellido" value="{{ old('surname')}}">
                            @error('surname')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="w-full">
                        <input class="w-full rounded-md @error('second_surname') border-red-500 @enderror" type="text" name="second_surname" id=""
                            placeholder="Ingresa tu segundo apellido - opcional**" value="{{ old('second_surname')}}">
                            @error('second_surname')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="w-full">
                        <div>
                            <select class="w-full rounded-lg @error('document_type') border-red-500 @enderror" name="document_type" id="">
                                <option selected disabled>Seleciona su tipo de documento</option>
                                <option value="CC" {{ old('document_type') == "CC" ? 'selected' : '' }}>CC Cedula de ciudadanía</option>
                                <option value="CE" {{ old('document_type') == "CE" ? 'selected' : '' }}>CE Cedula de extranjería</option>
                                <option value="TI" {{ old('document_type') == "TI" ? 'selected' : '' }}>TI Tarjeta de identidad </option>
                                <option value="PASS" {{ old('document_type') == "PASS" ? 'selected' : '' }}>Pasaporte</option>
                            </select>
                            @error('document_type')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full">
                        <input class="w-full rounded-md @error('document_number') border-red-500 @enderror" type="text" name="document_number" id=""
                            placeholder="Ingresa número de documento" value="{{ old('document_number')}}">
                            @error('document_number')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="w-full">
                        <input class="w-full rounded-md @error('email') border-red-500 @enderror" type="text" name="email" id=""
                            placeholder="Ingresa correo electrónico" value="{{ old('email')}}">
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="w-full">
                        <input class="w-full rounded-md @error('password') border-red-500 @enderror" type="text" name="password" id=""
                            placeholder="Ingresa tu contraseña" value="{{ old('password')}}">
                            @error('password')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror

                    </div>

                </div>
                <div class="w-full items-center">

                    <input class=" w-5/12 text-white bg-gray-900 px-8 py-1 rounded-lg cursor-pointer mt-4"
                        type="submit" value="Enviar">
                </div>
            </form>
        </div>


    </div>
</x-app-layout>

{{-- first_name
second_name
surname
second_surname
document_type //Cedula de ciudadanía /Cedula de extranjería / Tarjeta de identidad / Pasaporte
document_number
email
password --}}
