<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Student List!</h1>
	
	<br>



	<a href="/home">Back</a> |

	<a href="/logout"> logout</a>|

<br>
<br>
<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Cgpa</td>
		<td>Email</td>
	</tr>
		@for($i=0; $i< count($student); $i++)
		<tr>
			<td>{{$student[$i]['id']}}</td>
			<td>{{$student[$i]['name']}}</td>
			<td>{{$student[$i]['cgpa']}}</td>
			<td>{{$student[$i]['email']}}</td>
		</tr>	
		@endfor

	
</table>
<br>
	

</body>
</html>