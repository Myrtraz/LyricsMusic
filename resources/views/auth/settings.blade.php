@extends('layouts.app')
@section('title','Settings')
@section('content')
<div class="container py-3">
	<div class="row">
		<div class="col-12">
			<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime odio, nobis quibusdam, labore quia esse vero quos aliquam perferendis rem error qui. Nihil quibusdam quis mollitia deserunt repudiandae doloremque sed.</h1>
		</div>
		<div class="col">
			<div class="row">
				<div class="col-2">
					<div class="card">
						<img src="https://static-cdn.jtvnw.net/jtv_user_pictures/cef31105-8a6e-4211-a74b-2f0bbd9791fb-profile_image-150x150.png" class="text-center card-img-top" alt="...">
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<h3><strong>Username: </strong> Myrtraz</h3>
							<h3><strong>Email: </strong> Loremipsum@dolor.com</h3>

							<!-- a-> edit sobre la cuenta :V--->
							<a href="#" class="btn btn-secondary float-right"><i class="fa fa-cog" aria-hidden="true"></i></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection