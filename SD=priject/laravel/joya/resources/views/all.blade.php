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
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>image</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Nationality</th>
                      <th>email</th>
                      <th>password</th>
                      <th>sex</th>
                      <th>Birth_Date</th>
                      <th>yes</th>
                      <th>no</th>
                    </tr>
                  </thead>
              
                  <tbody>

                    @foreach ($data as $d)
                    <tr>
                      <td>{{$d->id}}</td>
                      <td><img src="{{asset('images/'.$d->image)}}" alt=""></td>
                      <td>{{$d->Firstname}}</td>
                      <td>{{$d->Lastname }}</td>
                      <td>{{$d->Nationality }}</td>
                      <td>{{$d->email }}</td>
                      <td>{{$d->password }}</td>
                      <td>{{$d->sex }}</td>
                      <td>{{$d->Birth_Date }}</td>
                      <td><a href="{{ URL::to('accept',['id'=>$d->id]) }}">no</a></td>
                      <td><a href="">yes</a></td>
                   </tr>
                   @endforeach
                    
                  </tbody>
                </table>
	
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
              $("#pay").click(function(){
                 $value="client1"; 
              });
			});


			
		</script>     

	
  </body>
</html>