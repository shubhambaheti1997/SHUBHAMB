<!DOCTYPE html>
<html>
<head>
	<title>
		


	</title>
</head>
<body>
	
					
					@foreach($users as $user)


  					<hr> {{ $user->id }} {{ $user->username }} {{ $user->email }} </hr>

					@endforeach
					

</body>
</html>