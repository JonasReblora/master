from flask import Blueprint, request, jsonify

contact_bp = Blueprint('contact', __name__)

@contact_bp.route('/', methods=["POST"])
def contact():
    name = request.form.get('name')
    email = request.form.get('email')
    msg = request.form.get('msg')

    if not name or not email or not msg:
        return jsonify({"status": "error", "message": "Missing form data"}), 400

    return jsonify({
        "status": "success",
        "message": f"Thank {name}. We'll get back to you at {email}"
    })