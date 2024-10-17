<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <h1>Dashboard</h1>

                    @if(session('success'))
                        <p class="text-green-500">{{ session('success') }}</p>
                    @endif

                    <h2>Mensajes</h2>

                    @if($mensajes->isEmpty())
                        <p>No hay mensajes para mostrar.</p>
                    @else
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Planeta</th>
                                    <th>Mensaje</th>
                                    <th>Resultado</th>
                                    <th>Privacidad</th>
                                    <th>Creado en</th>
                                    <th>Actualizado en</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mensajes as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->id }}</td>
                                        <td>{{ $mensaje->name }}</td>
                                        <td>{{ $mensaje->phone }}</td>
                                        <td>{{ $mensaje->email }}</td>
                                        <td>{{ $mensaje->planet }}</td>
                                        <td>{{ $mensaje->message }}</td>
                                        <td>{{ $mensaje->result }}</td>
                                        <td>{{ $mensaje->privacy ? 'Sí' : 'No' }}</td>
                                        <td>{{ $mensaje->created_at->format('d-m-Y H:i') }}</td>
                                        <td>{{ $mensaje->updated_at->format('d-m-Y H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
