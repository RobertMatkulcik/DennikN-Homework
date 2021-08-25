@extends('layout')

@section('content')

    <div class="flex justify-center pt-8">
        <h1 class="text-red-700 font-bold ">Subscribers</h1>

    </div>


    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid">

            <div class="w-full">


                <table class="mx-auto bg-gray-800 text-gray-200">
                    <tr class="text-left border-b border-gray-300">
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Created at</th>
                        <th class="px-4 py-3">Subscriptions</th>
                        <th class="px-4 py-3">Subscription start</th>
                        <th class="px-4 py-3">Subscription end <i class="fas fa-chevron-up"></i></th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    <?php
                    foreach ($users as $userData){
                        $user = App\Models\User::find($userData["user_id"]);
                        ?>
                    <tr class="bg-gray-700 border-b border-gray-600">
                        <td class="px-4 py-3">{{$user->email}}</td>
                        <td class="px-4 py-3">{{$user->created_at}}</td>
                        <td class="px-4 py-3">Mini</td>
                        <td class="px-4 py-3">
                            <ul>
                                @foreach($user->subscriptions()->get() as $subscription)
                                    <li class="capitalize">
                                        {{$subscription->type}}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="px-4 py-3">
                            <ul>
                                @foreach($user->subscriptions()->get() as $subscription)
                                    <li class="">
                                        {{$subscription->start}}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ url('subscribe'."/".$user->id) }}" class="no-underline hover:underline">
                                + Subscription
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
{{--                    @foreach($users as $user)--}}
{{--                        <tr class="bg-gray-700 border-b border-gray-600">--}}
{{--                            <td class="px-4 py-3">{{$user->email}}</td>--}}
{{--                            <td class="px-4 py-3">{{$user->created_at}}</td>--}}
{{--                            <td class="px-4 py-3">Mini</td>--}}
{{--                            <td class="px-4 py-3">--}}
{{--                                <ul>--}}
{{--                                @foreach($user->subscriptions()->get() as $subscription)--}}
{{--                                    <li class="capitalize">--}}
{{--                                        {{$subscription->type}}--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td class="px-4 py-3">--}}
{{--                                <ul>--}}
{{--                                    @foreach($user->subscriptions()->get() as $subscription)--}}
{{--                                        <li class="">--}}
{{--                                            {{$subscription->start}}--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </td>--}}
{{--                            <td class="px-4 py-3">--}}
{{--                                <a href="{{ url('subscribe'."/".$user->id) }}" class="no-underline hover:underline">--}}
{{--                                    + Subscription--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                @endforeach--}}

                <!-- each row -->
                </table>

                <!-- dark design -->



            </div>


        </div>

    </div>
    <div class="flex justify-center pt-8">
        <a href="{{ url('register') }}" class="no-underline text-red-700 ">
            + New subscriber
        </a>
    </div>

@endsection
