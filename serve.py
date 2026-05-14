from http.server import HTTPServer, SimpleHTTPRequestHandler

class Handler(SimpleHTTPRequestHandler):
    def do_GET(self):
        # Redirect root to 404.html handler too
        if self.path == "/":
            self.path = "/404.html"
        return super().do_GET()

    def send_error(self, code, message=None, explain=None):
        if code == 404:
            self.path = "/404.html"
            return self.do_GET()
        super().send_error(code, message, explain)

HTTPServer(("", 8000), Handler).serve_forever()
