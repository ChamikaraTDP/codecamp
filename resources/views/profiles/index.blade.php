@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/me1.jpg"  class="w-100 rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>

            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fcmb1-1.fna.fbcdn.net/vp/ec9700c0a7c59e900204ecad31e18e5a/5DDE642F/t51.2885-15/sh0.08/e35/c129.0.822.822a/s640x640/64784858_175476560138141_6811042962382950830_n.jpg?_nc_ht=instagram.fcmb1-1.fna.fbcdn.net" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://instagram.fcmb1-1.fna.fbcdn.net/vp/3e89a91a7120468c90ac6d0caff8c19d/5DD400EC/t51.2885-15/e35/64809334_1275557692612793_386887670867772976_n.jpg?_nc_ht=instagram.fcmb1-1.fna.fbcdn.net" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://instagram.fcmb1-1.fna.fbcdn.net/vp/bfe9a0e538cd60e79012f2c503b668e5/5DC85252/t51.2885-15/e35/59343110_335587277147475_8793712278364653970_n.jpg?_nc_ht=instagram.fcmb1-1.fna.fbcdn.net" class="w-100"/>
        </div>
    </div>

</div>
@endsection
