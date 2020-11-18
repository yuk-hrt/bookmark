<div class="form-group row">
  <label for="inputTitle" class="col-sm-2 col-form-label">タイトル</label>
  <div class="col-sm-10">
    <input type="text" name="title" value="{{ $bookmark->title ?? '' }}" class="form-control @error('title') is-invalid @enderror" id="inputEmail3" placeholder="title">
    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="inputUrl" class="col-sm-2 col-form-label">URL</label>
  <div class="col-sm-10">
    <input type="text" name="url" value="{{ $bookmark->url ?? '' }}" class="form-control @error('url') is-invalid @enderror" id="inputEmail3" placeholder="url">
    @error('url')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="form-group row">
  <label for="inputDescription" class="col-sm-2 col-form-label">説明文</label>
  <div class="col-sm-10">
    <input type="text" name="description" value="{{ $bookmark->description ?? '' }}" class="form-control" id="inputEmail3" placeholder="description">
  </div>
</div>

<div class="form-group row">
  <label for="inputTag" class="col-sm-2 col-form-label">タグ</label>
  <div class="col-sm-10">
  @foreach($tags as $key => $tag)
    <div class="form-check form-check-inline">
      <input
        type="checkbox"
        name="tags[]"
        value="{{ $key }}"
        id="tag{{ $key }}"
        @if(isset($bookmark->tags) && $bookmark->tags->contains($key))
          checked
        @endif
      >
      <label for="tag{{ $key }}" class="form-check-label">{{ $tag }}</label>
    </div>
  @endforeach
  </div>
</div>

<div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">保存</button>
    <a href="{{ route('bookmarks.index') }}" class="btn btn-secondary">一覧へ戻る</a>
  </div>
</div>