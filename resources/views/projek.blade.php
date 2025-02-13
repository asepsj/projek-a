<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Pilih Projek') }}

                    <div class="mt-4 flex flex-col space-y-2">
                        <!-- Tombol untuk Login ke Proyek 2 -->
                        <a href="{{ route('project2.login') }}"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Login ke Proyek 2
                        </a>

                        <!-- Tombol untuk Login ke Proyek 3 -->
                        <a href="{{ route('project3.login') }}"
                            class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                            Login ke Proyek 3
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
