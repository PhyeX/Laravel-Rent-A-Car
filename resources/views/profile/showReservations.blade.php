<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Reservations') }}
                    </h2>
                </div>
                <hr>

                @if($reservations != null )
                    @foreach($reservations as $reservation )



                        <td><th>Where you from : {{ $reservation -> where_you_from }}</th></td>
                        <br>
                        <td><th>Where you go : {{ $reservation -> where_you_go }}</th></td>
                        <br>
                        <td><th>Rezervation Date : {{ $reservation -> rezdate }}</th></td>
                        <br>
                        <td><th>Rezervation Time : {{ $reservation -> reztime }}</th></td>
                        <br>
                        <td><th>Return Date : {{ $reservation -> returndate }}</th></td>
                        <br>
                        <td><th>Return Time : {{ $reservation -> returntime }}</th></td>
                        <br>
                        <td><th>Price : {{ $reservation -> price }}</th></td>
                        <br>
                        <td><th>Status : {{ $reservation -> status }}</th></td>

                        <hr>
                    @endforeach
                @endif

            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <p>selamın aleyküm cabbar kun </p>
        </div>
    </div>
</x-app-layout>
