from wsgiref import simple_server

def app(environ, start_response):
    start_response('200 OK', [('Content-type', 'text/plain')])
    return ['Hello world!']

server = simple_server.WSGIServer(('', 8000), simple_server.WSGIRequestHandler)
server.set_app(app)
server.serve_forever()
