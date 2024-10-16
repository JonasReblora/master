from flask import Blueprint, request, jsonify

contact_bp = Blueprint('contact', __name__, url_prefix='/contact')

@contact_bp.route('/', methods=["POST"])
def contact():
    data = request.get_json()
    name = data.get('name')
    email = data.get('email')
    msg = data.get('msg')

    return jsonify({
        "status": "success",
        "message": f"Thank {name}. We'll get back to you at {email}"
    })