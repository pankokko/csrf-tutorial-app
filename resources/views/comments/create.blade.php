@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">Comment</div>
      <div class="card-body">
        <form action="{{ route('comments.create') }}" method="post">
            @csrf
          <div class="form-group">
            <label for="body">コメント</label>
            <textarea name="body" id="body" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">送信する</button>
        </form>
      </div>
    </div>
  </div>
@endsection
