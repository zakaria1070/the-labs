	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! str_replace('(', '<span>', str_replace(')', '</span>', $titres->titre3)) !!}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				@foreach ($teams as $item)
					
				<div class="col-sm-4">
					<div class="member">
					<img src="{{$item->image}}" alt="">
						<h2>{{$item->nom}}</h2>
						<h3>{{$item->post}}</h3>
					</div>
				</div>
				@endforeach

				{{-- <!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- Team Section end-->