@extends('layout')

@section('content')

    <div class="flex justify-center pt-8">
        <h1 class="text-red-700 font-bold ">Registration</h1>
    </div>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid">

            <div class="w-full">

                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8" method="POST" action="/register">
                    {{ csrf_field() }}
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="text" placeholder="Email" name="email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" placeholder="******************" name="password">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="text-red-500 text-xs italic">{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Create User
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
