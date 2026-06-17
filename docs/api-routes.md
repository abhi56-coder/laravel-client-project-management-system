# API Routes Plan

Planned REST API structure for this Laravel project.

## Authentication

- POST /api/register - register user
- POST /api/login - login user
- POST /api/logout - logout user
- GET /api/user - logged-in user profile

## Clients

- GET /api/clients - list clients
- POST /api/clients - create client
- GET /api/clients/{id} - view client
- PUT /api/clients/{id} - update client

## Projects

- GET /api/projects - list projects
- POST /api/projects - create project
- GET /api/projects/{id} - view project
- PUT /api/projects/{id} - update project
- GET /api/clients/{clientId}/projects - projects by client

## Tasks

- GET /api/tasks - list tasks
- POST /api/tasks - create task
- GET /api/tasks/{id} - view task
- PUT /api/tasks/{id} - update task
- GET /api/projects/{projectId}/tasks - tasks by project

## Files

- POST /api/projects/{projectId}/files - upload project file
- GET /api/projects/{projectId}/files - list project files

## Comments

- POST /api/projects/{projectId}/comments - add project comment
- GET /api/projects/{projectId}/comments - list project comments

## Dashboard

- GET /api/dashboard/summary - dashboard summary
- GET /api/dashboard/project-status - project status data
- GET /api/dashboard/upcoming-deadlines - upcoming deadlines
