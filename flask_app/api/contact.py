from flask import Blueprint, request, jsonify

contact_bp = Blueprint('contact', __name__)

@contact_bp.route('/', methods=["POST"])
def contact():
    data = request.form.get_json()
    name = request.form.get('name')
    email = request.form.get('email')
    msg = request.form.get('msg')

    return jsonify({
        "status": "success",
        "message": f"Thank {name}. We'll get back to you at {email}"
    })