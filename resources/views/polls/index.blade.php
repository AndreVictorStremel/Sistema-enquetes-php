@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-6 text-gray-900">Enquetes Disponíveis:</h2>
    <div class="space-y-4">
        @forelse ($polls as $poll)
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold mb-2">{{ $poll->title }}</h3>
                <a href="{{ route('polls.show', $poll) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                    Votar e Ver Resultados &rarr;
                </a>
            </div>
        @empty
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p>Nenhuma enquete disponível no momento.</p>
            </div>
        @endforelse
    </div>
@endsection