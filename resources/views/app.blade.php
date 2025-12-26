@extends('layout.guest')

@section('content')
	@include('components.header')

	<main class="py-10">
		<div class="max-w-3xl mx-auto text-center px-4">
			<h2 class="text-3xl font-extrabold mb-2">Compressão de imagens simples e rápida</h2>
			<p class="text-gray-600 mb-6">Escolha o tamanho alvo (KB) e obtenha a imagem comprimida com perda mínima de qualidade.</p>
		</div>

		@include('components.compressor')
	</main>

@endsection

@section('script')
@endsection