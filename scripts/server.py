from flask import Flask
import response_send as rs
__NULL__ = ""
app = Flask(__name__)

@app.route('/send_appreciation/<string:email>')
def send_appreciation(email):
    rs.send_appreciation(email=email)
    return __NULL__ 

if __name__ == '__main__':
    app.run()