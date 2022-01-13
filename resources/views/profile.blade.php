@extends('plantilla')


@section('content')


    <?php
        $etiquetas = ['green'=>'online','yellow'=>'internet', 'red'=>'education'];
        $subtih= "Esto es el subtitulo de la página de Bienvenida" ;
    ?>
    <div class="container mx-auto mt-5 px-80">

        <x-dynamic-component component="nav2">

        </x-dynamic-component>

        <x-alert class="bg-green-500" color="green">
            Esto es la página de perfil
        </x-alert>

        <x-form margin="mb-5" color="blue">
            <x-slot name="title">
                Card number - Perfil
            </x-slot>
            <x-slot name="contentform">
                Expire date - Perfil
            </x-slot>
        </x-form>

        <x-card :subtitulo="$subtih" :tags="$etiquetas" color="blue" class="border-2 border-blue-600 border-double border-4 border-light-blue-500">
            Profile
            <x-slot name="contenido">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Sit illum recusandae, neque non explicabo error quam pariatur,
                minus debitis maxime sunt aspernatur ducimus quos facere dolorum magni.
                Quibusdam, possimus tenetur!
            </x-slot>
        </x-card>

    </div>

@endsection
