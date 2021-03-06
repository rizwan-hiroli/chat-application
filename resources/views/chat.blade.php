<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		.list-group{
			overflow-y: scroll;
			height: 200px;
		}
	</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="row" id="app">
			<div class="offset-4 col-4 offset-sm-1 col-sm-10">
				<li class="list-group-item active">Chat Room 
					<span class="badge badge-pill badge-danger"> @{{numberOfUsers}}</span>
				</li>
				<div class="badge badge-pill badge-primary">@{{typing}}</div>
				<ul class="list-group" v-chat-scroll>
					<message 
						v-for="value,index in chat.message"
						:key=value.index
						:user=chat.user[index]
						:color=chat.color[index]
						:time=chat.time[index]
					>
						@{{value}}
					</message>
				</ul>
				<input type="text" name="message" class="form-control" v-model='message' @keyup.enter="send" placeholder="Enter message here">
			</div>
		</div>
	</div>
			


	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>