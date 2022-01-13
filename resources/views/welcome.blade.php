@extends('plantilla')


@section('content')

    <?php
        $etiquetas = ['red'=>'online','yellow'=>'internet', 'green'=>'education'];
        $subtih= "Esto es el subtitulo de la página de Bienvenida" ;
    ?>

    <div class="container mx-auto mt-5 px-80">

        <x-dynamic-component component="nav1">

        </x-dynamic-component>

        <x-alert class="bg-yellow-500" color="yellow">
            Esto es la página de bienvenidad
        </x-alert>

        <x-form margin="mb-5" >
            <x-slot name="title">
                Card number - Bienvenida
            </x-slot>
            <x-slot name="contentform">
                Expire date - Bienvenida
            </x-slot>
        </x-form>

        <x-card :subtitulo="$subtih" :tags="$etiquetas" color="green" class="border-2 border-green-600 ">
            Bienvenida
            <x-slot name="contenido">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            </x-slot>
        </x-card>
    </div>

@endsection
