from flask import Blueprint, request, jsonify

project_bp = Blueprint('projects', __name__)

@project_bp.route('/projects', methods=['GET'])
def get_project():
    projects = [
        {"name": "Project 1", "Portfolio": "My first project"}
    ]
    return jsonify(projects)