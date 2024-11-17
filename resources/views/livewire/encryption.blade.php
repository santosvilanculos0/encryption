<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="max-w-2xl px-4 py-6 mx-auto sm:px-6 lg:px-8">
    <div class="space-y-12">
        <div class="pb-12 border-b border-gray-900/10">
            <h2 class="font-semibold text-gray-900 text-base/7">Criptografia</h2>
            <p class="mt-1 text-justify text-gray-600 text-sm/6">
                Os <a href="https://laravel.com/docs/11.x/encryption" target="_blank" rel="noopener noreferrer"
                    class="underline">serviços de encriptação do Laravel</a> fornecem uma interface simples e
                conveniente para encriptar e
                desencriptar texto via <a href="https://developer.mozilla.org/en-US/docs/Glossary/OpenSSL"
                    target="_blank" rel="noopener noreferrer" class="underline">OpenSSL</a> utilizando encriptação
                <a href="https://pt.wikipedia.org/wiki/Advanced_Encryption_Standard" target="_blank"
                    rel="noopener noreferrer" class="underline">AES-256 e AES-128</a>. Todos
                os valores encriptados do Laravel são assinados utilizando um código de autenticação de mensagem
                (<a href="https://en.wikipedia.org/wiki/Message_authentication_code" target="_blank"
                    rel="noopener noreferrer" class="underline">MAC - Message Authentication Code</a>) para que o
                seu valor subjacente não possa ser modificado ou adulterado depois de encriptado.
            </p>

            <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="input" class="block font-medium text-gray-900 text-sm/6">Entrada</label>
                    <div class="mt-2">
                        <textarea wire:model.live.debounce.250ms="input" id="input" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                    @error('input')
                        <p class="mt-3 text-red-600 text-sm/6">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-full">
                    <label for="output" class="block font-medium text-gray-900 text-sm/6">Saída</label>
                    <div class="mt-2">
                        <textarea wire:model="output" id="output" rows="5"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-end mt-6 gap-x-6">
        <button wire:click="decrypt" type="button" class="font-semibold text-gray-900 text-sm/6">
            Descriptografar <span wire:loading wire:target="decrypt">...</span>
        </button>

        <button wire:click="encrypt" type="button"
            class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Encriptar <span wire:loading wire:target="encrypt">...</span>
        </button>
    </div>
</div>
