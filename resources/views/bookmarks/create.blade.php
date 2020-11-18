@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ブックマーク登録</div>

                <div class="card-body">
                    <form method="post"  action="{{ route('bookmarks.store') }}">
                      @csrf
                      @include('bookmarks.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
