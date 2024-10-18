from flask import Blueprint, request, jsonify

contact_bp = Blueprint('contact', __name__)

@contact_bp.route('/', methods=["POST"])
def contact():
    data = request.json
    name = data.get('name')
    email = data.get('email')
    msg = data.get('msg')

    if not all([name, email, msg]):
        return jsonify({"status": "error", "message": "Missing form data"}), 400

    return jsonify({
        "status": "success",
        "message": f"Thank {name}. We'll get back to you at {email}"
    })