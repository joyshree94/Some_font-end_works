<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.5.0/css/all.css')}}" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> 
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="sign-form">
	<div class="container">	

		<form method="post" action="{{ URL::to('insert') }}">
			{{ csrf_field() }}
		    <h1 class="text-center">Create a new account</h1>
			<p class="text-center">It's free and always will be.</p>
			<div class="form-group row">
				<label for="FirstName" class="col-sm-2 col-form-label">First name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="firstname" id="text" placeholder="First name">
				</div>
			</div>      
			<div class="form-group row">
				<label for="LastName" class="col-sm-2 col-form-label">Last name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="lastname" id="text" placeholder="Last name">
			    </div>
			</div>	
			<div class="form-group row">
				<label for="Nationality" class="col-sm-2 col-form-label">Nationality</label>
				<div class="col-sm-10">
					<input  type="text" class="form-control" name="nation" placeholder="Nationality">
				</div>
			</div>   
			<div class="form-group row">
				<label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="Date" class="col-sm-2 col-form-label">Birth Date</label>
				<div class="col-sm-10">
					<input type="Date" class="form-control" name="birthdate" id="Date" placeholder="Birth Date">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" id="inputPassword" placeholder="New Password">
				</div>
			</div>
			<div class="form-group row">	  
			<label for="sex" class="col-sm-2 col-form-label">Sex</label>
			<div class="col-sm-10">
		    <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="Options1" id="inlineRadio1" value="Female">
			  <label class="form-check-label" for="inlineRadio1">Female</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="Options2" id="inlineRadio2" value="Male">
			  <label class="form-check-label" for="inlineRadio2">Male</label>
			</div>
			</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#exampleModal">
				Log In
                </button>
			    <button type="submit" id="sign" class="btn btn-primary col-sm-3">Sign Up</button>
	
		    </div>
				
				  
        </form>

	</div>	
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form method="post" action="{{ URL::to('login') }}">   
				{{ csrf_field() }}
			<div class="form-group row">
				<label for="exampleInputEmail1" class="col-sm-3 col-form-label"><i class="fas fa-envelope"></i> Email</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address">
				</div>
			</div>
		
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label"><i class="fas fa-unlock-alt"></i> Password</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" name="password" id="inputPassword" placeholder="New Password">
				</div>
			</div>

			 <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Log In</button>
		  </div>
				  
        </form>
		  </div>
		  
		</div>
	  </div>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js')}}" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
		

			$(document).ready(function ()
			{
              
              @if(Session::has('msg'))
              	 $.toaster('Your message here');
              @endif  
        
			});


			
		</script>     

	
  </body>
</html>