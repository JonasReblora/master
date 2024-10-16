from flask import Flask, request, jsonify

app = Flask(__name__)

# Routes for testing
@app.route('../api/projects.py', methods=['GET'])
def get_project():
    projects = [
        {"name": "Project 1", "Portfolio": "My first project"}
    ]
    return jsonify(projects)

# API endpoint for contact form
@app.route('../api/contact.py', methods=['POST'])
def contact():
    data = request.get_json()
    name = data.get('name')
    email = data.get('email')
    msg = data.get('msg')

    # return data to confirm it's working
    return jsonify({
        "status": "success",
        "message": f"Thank {name}. We'll get back to you at {email}!"
    })

if __name__ == '__main__':
    app.run(debug=True)