@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">タグ登録</div>

                <div class="card-body">
                    <form method="post"  action="{{ route('tags.store') }}">
                      @csrf
                      @include('tags.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
