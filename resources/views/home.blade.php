@extends('layout')
@section('content')
    <section>
        <div>

            <table class="w-full">
                <thead>
                    <tr class="bg-green-100">
                        <th class="border">Ville</th>
                        <th class="border">Contact</th>
                        <th class="border">Lieu</th>
                        <th class="border">Google Maps</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="border rounded-tl-lg rounded-tr-lg rounded-bl-lg p-5 my-2 list">
                        <td class="p-3 border-r">
                            <a href="/agences/{{$post->post_name}}" class="text-2xs font-bold">
                                {{$post->post_title}}
                            </a>
                        </td>
                        <td class="p-3 border-r">
                            <p class="telephone text-sm">{{$post->telephone}}</p>
                        </td>
                        <td class="p-3 border-r">
                            <p class="lieu text-sm">{{$post->lieu}}</p>
                        </td>
                        <td class="p-3 border-r">
                            @if(!empty($post->itineraire))
                                <p class="lieu text-sm">
                                    <a href="{{$post->itineraire}}" target="_blank">
                                        Itinéraire
                                    </a>
                                </p>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection