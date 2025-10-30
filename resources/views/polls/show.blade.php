@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4 text-gray-900">{{ $poll->title }}</h1>
    <a href="{{ route('polls.index') }}" class="mb-6 inline-block text-blue-600 hover:text-blue-800">
        &larr; Voltar para todas as enquetes
    </a>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="text-xl font-semibold mb-4">Vote:</h3>
        <div class="space-y-3">
            @foreach ($poll->options as $option)
                <form action="{{ route('options.vote', $option) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left p-4 bg-gray-50 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                        {{ $option->name }}
                    </button>
                </form>
            @endforeach
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4">Resultados:</h3>
        <div class="space-y-4">
            @foreach ($poll->options as $option)
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="font-medium">{{ $option->name }}</span>
                        <span class="text-gray-600">{{ $option->votes }} Votos</span>
                    </div>
                    @php
                        $percentage = ($totalVotes > 0) ? ($option->votes / $totalVotes) * 100 : 0;
                    @endphp
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $percentage }}%;"></div>
                    </div>
                </div>
            @endforeach
            <p class="text-right font-bold mt-4">Total de Votos: {{ $totalVotes }}</p>
        </div>
    </div>
@endsection