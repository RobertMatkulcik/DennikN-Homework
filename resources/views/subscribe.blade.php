@extends('layout')

@section('content')

    <div class="flex justify-center pt-8">
        <h1 class="text-red-700 font-bold ">Subscription for {{$user->email}}</h1>
    </div>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid">

            <div class="w-full">

                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8" method="POST" action="{{ url('subscribe'."/".$user->id) }}">
                    {{ csrf_field() }}

                    <div class="mb-4">

                        <div class="relative">
                            Duration:
                            <select name="duration" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="{{$i}}" class="capitalize">{{$i}} Months</option>
                                @endfor
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>

                    </div>

                    <div class="mb-4">

                        <div class="relative">
                            Subscription type:
                            <select name="type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option class="capitalize">{{\App\Models\Subscription::TYPE_MINI}}</option>
                                <option class="capitalize">{{\App\Models\Subscription::TYPE_STANDARD}}</option>
                                <option class="capitalize">{{\App\Models\Subscription::TYPE_KLUB}}</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>

                    </div>


                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-red-500 text-xs italic">{{ $error }}</p>
                        @endforeach
                    @endif
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Create Subscription
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection
