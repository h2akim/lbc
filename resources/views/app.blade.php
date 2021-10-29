<!doctype html>
<html>

<head>
	<title>Testing</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="/path/to/tailwind.css" rel="stylesheet">
	<!-- ... -->
</head>

<body>
	<form action="/route-test" method="POST">
		@csrf
		<input type="text" name="name">
		<button type="submit">Submit</button>
	</form>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Timestamp</th>
				<th>Host IP Address</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($_routes as $route)
			<tr>
				<td>{{ $route->name }}</td>
				<td>{{ $route->created_at }}</td>
				<td>{{ $route->ip_address }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>

</html>