import os
import sys


sys.path.insert(0, os.path.dirname(__file__))

def dataset(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/plain')])
    message = 'This is an Elijah \'s website for something greater to come.\n'+'the string is'+str(__file__)
    version = 'Python v' + sys.version.split()[0] + '\n'
    response = '\n'.join([message, version])
    return [response.encode()]
