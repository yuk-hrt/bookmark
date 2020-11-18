@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">タグ一覧</div>

                <div class="card-body">
                  <div class="mb-3">
                    <a href="{{ route('tags.create') }}" class="btn btn-primary">新規登録</a>
                  </div>
                  @include('components.alert')
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>タイトル</th>
                      <th>アクション</th>
                    </tr>
                    </thead>
                    @foreach($tags as $tag)
                      <tr>
                        <td class="align-middle">{{$tag->id}}</td>
                        <td class="align-middle"><a href="{{ $tag->url }}">{{$tag->title}}</a></td>
                        <td class="align-middle">
                          <div class="d-flex">
                            <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-secondary">表示</a>
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-secondary ml-1">編集</a>
                            <form method="post" action="{{ route('tags.destroy', $tag) }}">
                              @method('delete')
                              @csrf
                              <button onclick="return confirm('本当に削除しますか？')" class="btn btn-secondary ml-1">削除</button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                  {{ $tags->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection