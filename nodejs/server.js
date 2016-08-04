var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

io.on('connection', function(socket){
	console.log('new client connected');
	socket.on('disconnet', function(){
		console.log('a client disconnect');	
	})
	socket.on('chat message',function(msg){
		console.log('message: '+msg.name+ ': ' + msg.message);
		io.emit('chat message', { name: msg.name, message: msg.message });
	})
});

http.listen(3000, function(){
  console.log('listening on *:3000');
});