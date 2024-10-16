from flask import Blueprint, jsonify

projects_bp = Blueprint('projects', __name__)

@projects_bp.route('/', methods=["GET"])
def get_project():
    projects = [
        {"name": "Project 1", "Portfolio": "My first project"}
    ]
    return jsonify(projects)