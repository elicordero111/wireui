<div>
    {{--    <x-dialog blurless="true" align="top" title="User information" description="Complete your profile, give your name"/>--}}
    <x-notifications position="top"/>

    <x-dialog>

    </x-dialog>

    <form class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 md:p-8" wire:submit="insertar()">
        <h1 class="text-gray-700 dark:text-white font-black text-2xl mb-2">Crear publicación</h1>
        @csrf
        {{--        <x-errors class="mb-4"/>--}}
        <x-input wire:model.live="nombre" class="mb-2 " label="Nombre completo" placeholder="" errorless="false"/>
        {{--        <x-errors only="nombre" iconless />--}}

        <x-textarea wire:model.live="descripcion" class="mb-2" label="Descripción" placeholder="" errorless="false"/>
        {{--        <x-errors only="descripcion" iconless />--}}

        <div class="flex justify-start gap-x-4">
            <x-button icon="plus" type="submit" lg positive label="Registrar"/>
        </div>
    </form>

    <section class="bg-gray-200/50 dark:bg-gray-800/50 rounded-lg shadow p-4 md:p-8 mt-4">
        <x-input wire:model.live="busqueda" class="w-full md:w-1/3"
                 icon="magnifying-glass"
                 label=""
                 placeholder="Buscar..."
        />
        <ul class="w-full mt-4 bg-gray-200 dark:bg-gray-800 rounded-lg p-2">

            @forelse($listas as $lista)
                <li class="bg-gray-300/50 dark:bg-gray-900/50 hover:bg-gray-300/90 hover:dark:bg-gray-900/90 rounded-lg p-2 mb-1" wire:key="{{$lista->id}}">
                    <div class="flex justify-between gap-x-2 items-center">
                        <div class="flex gap-x-2">
                            <x-avatar md label="{{strtoupper(substr($lista->nombre,0,2))}}" primary  />
                            <div class="text-gray-700 dark:text-white">
                                <p class="font-black">{{$lista->nombre}}</p>
                                <p class="font-light text-sm -mt-1">{{$lista->nombre}}</p>
                            </div>
                        </div>

                        <div class="flex gap-x-2">
                            <x-button  sm icon="pencil-square" primary label="Modificar" />
                            <x-button wire:click="eliminar({{$lista->id}})" sm icon="trash" negative label="Eliminar" />
                        </div>
                    </div>
                </li>
            @empty
            @endforelse
        </ul>
        <div class="mt-4">
            {{ $listas->links(data: ['scrollTo' => '#paginated']) }}
        </div>
    </section>

    {{--    <x-dialog id="custom" title="User information" description="Complete your profile, give your name">--}}
    {{--        <x-input label="What's your name?" placeholder="your name bro" x-model="name" />--}}
    {{--    </x-dialog>--}}



    {{--    <x-button--}}
    {{--        x-on:click="$wireui.confirmDialog({--}}
    {{--    title: 'Are you Sure?',--}}
    {{--    description: 'Save the information?',--}}
    {{--    icon: 'question',--}}
    {{--    accept: {--}}
    {{--        label: 'Yes, save it',--}}
    {{--        execute: () => window.$wireui.notify({--}}
    {{--            'icon': 'success',--}}
    {{--            'title': 'You confirmed',--}}
    {{--        })--}}
    {{--    },--}}
    {{--    reject: {--}}
    {{--        label: 'No, cancel',--}}
    {{--        execute: () => window.$wireui.notify({--}}
    {{--            'icon': 'error',--}}
    {{--            'title': 'You not confirmed',--}}
    {{--        })--}}
    {{--    }--}}
    {{--})"--}}
    {{--        info>--}}
    {{--        Confirm Full--}}
    {{--    </x-button>--}}


</div>
