@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ブックマーク編集</div>

                <div class="card-body">
                    <form method="post"  action="{{ route('bookmarks.update', $bookmark) }}">
                      @method('put')
                      @csrf
                      @include('bookmarks.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
