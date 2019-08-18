@extends('layouts.app')

@section('content')
<div class="container">
   @foreach ($posts as $post)
    <div class="row py-4">

        <div class="col-4">

            <div class="d-flex align-items-center">

                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="not available" class="w-100 rounded-circle" style="max-width: 60px">
                </div>

                <div>
                    <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{$post->user->username }}</span>
                        </a>
                    </div>
                </div>

            </div>

            <hr>

            <p><span class="font-weight-bold">
                <a href="/profile/{{ $post->user->id }}">
                    <span class="text-dark">{{$post->user->username }}</span>
                </a>
            </span> {{ $post->caption }}</p>

        </div>

        <div class="col-6">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>

    </div>
   @endforeach

   <div class="row">
       <div class="col-12 d-flex justify-content-center">
           {{ $posts-> links() }}
       </div>
   </div>

</div>
@endsection
