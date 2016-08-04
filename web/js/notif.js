$( document ).ready(function() {
    var socket = io.connect('http://localhost:3000');
    socket.on('chat message', function (data) {
        $( "#notifikasi" ).prepend( "<p><strong>" + data.name + "</strong>: " + data.message + "</p>" );
        $.notify("<strong>" + data.name + "</strong>: " + data.message);
    });
});