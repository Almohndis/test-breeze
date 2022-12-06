<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <form action="lol" method="POST">
                        @csrf
                        <input type="submit" value="OK" class="btn btn-primary">
                        <button type="button" class="btn btn-primary">Primary</button>
                    </form>

                </div>
                <button type="button" class="btn btn-primary text-2563eb">Primary</button>
                <button type="button" class="btn btn-primary ">Primary</button>
                <button type="button" class="btn btn-danger">Danger</button>
            </div>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-outline-primary">Primary</button>
        </div>
    </div>
</x-app-layout>
