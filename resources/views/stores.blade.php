@extends('layouts.app')

@section('title-block')Autoliga-lar @endsection

@section('tagline')
  @parent
    <section class="tagline">
      <div id="top">
            <h1>Режим просмотра</h1>
      </div>
    </section>
@endsection

@section('content')
<pre>
	{{ print_r($data) }}
</pre>

@endsection