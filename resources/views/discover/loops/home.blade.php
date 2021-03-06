@extends('layouts.app')

@section('content')
<div class="bg-success" style="height:1.2px;"></div>
<div class="profile-header">
  <div class="container pt-5">
    <div class="profile-details text-center">
      <div class="username-bar text-dark">
        <p class="display-4 font-weight-bold mb-0"><span class="text-success">Loops</span> <sup class="lead">BETA</sup></p>
        <p class="lead font-weight-lighter">Short looping videos</p>
      </div>
    </div>
  </div>
</div>
<div class="loop-page container mt-5">
  <section>
    <loops-component></loops-component>
  </section>
</div>
@endsection

@push('styles')
<style type="text/css">
	@media (min-width: 1200px) {
		.loop-page.container {
			max-width: 1035px;
		}
	}
</style>
@endpush
@push('scripts')
<script type="text/javascript" src="{{ mix('js/loops.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/compose.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
	new Vue({el: '#content'});
});
</script>
@endpush