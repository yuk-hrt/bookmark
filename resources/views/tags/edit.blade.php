@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">タグ編集</div>

                <div class="card-body">
                    <form method="post"  action="{{ route('tags.update', $tag) }}">
                      @method('put')
                      @csrf
                      @include('tags.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
