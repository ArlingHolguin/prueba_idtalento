<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">

            <div class="font-semibold text-xl text-gray-800 leading-tight">
                Listar Registros
            </div>
            <div>
    
                <a class="  py-1 px-8 rounded-lg bg-black hover:bg-gray-900 text-white" href="{{route('form.create')}}">
                    Crear Registro
                </a>
            </div>
        </div>
    </x-slot>
    @livewire('list-registers')

   @if (session('info'))
       
  
    <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session('info')}}',
                showConfirmButton: false,
                timer: 3500
            })
    </script>
   @endif
</x-app-layout>
