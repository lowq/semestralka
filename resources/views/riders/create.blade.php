@extends('layouts.master')

@section('title', 'Pridavanie jazdca')
@section('content')
<div class="">
    <div class="justify-center m-10 md:flex text-blue-200 text-center sm:grid-flow-row">
        <div class="bg-gray-500 ring-1 ring-black p-2">
            <div class="md:text-6xl sm:text-2xl">
                <h2>Prídavanie jazdca</h2>
            </div>
            <div class="pull-right">
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a class="" href="{{ route('riders.index') }}"> Späť</a>
                </button>
            </div>
        </div>
    </div>



    @if ($errors->any())
        <div class="justify-center m-10 hidden md:flex text-blue-200 text-center">
            <div class="bg-gray-500 ring-1 ring-black p-2">
            <strong>Pozor</strong> Nezadal si všetko<br><br>
            </div>
            <ul class="bg-gray-500 ring-1 ring-black p-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="justify-center m-10 md:flex text-blue-200 text-center" action="{{ route('riders.store') }}" method="POST">
        @csrf
        <div class="shadow-lg justify-center content-center">
            <div class="">
                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                    <strong>Name:</strong>
                    <input type="number" name="cislo" class="text-black" placeholder="Číslo">
                </div>
            </div>
                <div class="">
                    <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                        <strong>Name:</strong>
                        <input type="text" name="meno" class="text-black" placeholder="Meno">
                    </div>
                </div>
                    <div class="">
                        <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                            <strong>Name:</strong>
                            <input type="text" name="priezvisko" class="text-black" placeholder="Priezvisko">
                        </div>
                    </div>
                        <div class="">
                            <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                                <strong>Name:</strong>
                                <input type="text" name="team" class="text-black" placeholder="Team">
                            </div>
                        </div>
                            <div class="">
                                <div class="p-4 bg-gray-500 ring-1 ring-black p-2">
                                    <strong>Name:</strong>
                                    <input type="text" name="motorka" class="text-black" placeholder="Motorka">
                                </div>
                            </div>

            <div class=" bg-gray-500 ring-1 ring-black p-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Submit</button>
            </div>
        </div>
    </form>
</div>
@stop
