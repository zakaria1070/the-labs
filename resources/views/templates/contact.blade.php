	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p> {{$contacts->paraf}} </p>
					<h3 class="mt60">{{$contacts->titre}}</h3>
					<p class="con-item">{{$contacts->adresse}} <br> {{$contacts->adresse2}} </p>
					<p class="con-item">{{$contacts->phone}}</p>
					<p class="con-item">{{$contacts->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<a href="{{$contacts->url}}"><button class="site-btn">{{$contacts->bouton}}</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->