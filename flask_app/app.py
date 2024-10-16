from flask import Flask
from api.projects import projects_bp
from api.contact import contact_bp

app = Flask(__name__)

# Register blueprints
app.register_blueprint(projects_bp, url_prefix='/projects')
app.register_blueprint(contact_bp, url_prefix='/contact')

if __name__ == '__main__':
    app.run(debug=False)