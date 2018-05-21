@extends ('master')

@section ('content')
<div style="background-color:#eee454">
  <h1>Welcome to Laravel test page</h1>
</div>
@endsection

@section('menu')
  <h4>Menu</h4>
  @parent
@endsection

@section('main')
  <h4>Main content</h4>
  <p>Site content goes in here </p>
@endsection
