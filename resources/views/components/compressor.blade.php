<section class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
	<div class="bg-white shadow-sm rounded-lg p-6">
		<h3 class="text-lg font-medium">Upload e compressão</h3>
		<p class="text-sm text-gray-500 mt-1">Selecione uma imagem do seu computador ou arraste-a para a área abaixo.</p>

		<div class="mt-6">
			<label for="file-input" class="sr-only">Escolher arquivo</label>

			<div id="dropzone" class="relative flex items-center justify-center border-2 border-dashed border-gray-200 rounded-xl bg-white shadow-inner hover:shadow-lg transition-shadow duration-150 p-8 cursor-pointer select-none" tabindex="0">
				<div class="text-center">
					<i class="bi bi-file-earmark-arrow-up mx-auto text-4xl text-gray-400"></i>
					<p class="mt-2 text-sm text-gray-600">Clique para selecionar ou arraste a imagem aqui</p>
					<p class="mt-1 text-xs text-gray-400">Suporta PNG, JPG, JPEG, WEBP (tamanho máximo recomendado 10MB)</p>
				</div>

				<input id="file-input" type="file" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" />
			</div>
		</div>
	</div>

</section>
