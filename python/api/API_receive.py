import os
import sys



d=1+34
def dataset(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    message = 'This is an Elijah \'s website for something greater to come.\n'+str(d)
    version = 'Python v' + sys.version.split()[0] + '\n'
    response = '\n'.join([message, version])
    return [response.encode()]
