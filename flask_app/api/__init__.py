from flask import Flask
from api.contact import contact_bp

app = Flask(__name__)

app.register_blueprint(contact_bp, url_prefix='/contact')

if __name__ == '__main__':
    app.run(debug=True)