var http = require('http');
var os = require('os');
var shell = require('shelljs');

var data = shell.exec("python update.py", {silent: true}).stdout;

var server = http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.write(data);
    res.end();
});

server.listen(1234); //Change accordingly
