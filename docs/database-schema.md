# Database Schema Plan

## users

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| name | varchar | User name |
| email | varchar | Unique email |
| password | varchar | Hashed password |
| role | enum | admin, manager, member |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## clients

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| name | varchar | Client name |
| company_name | varchar | Company name |
| email | varchar | Client email |
| phone | varchar | Client phone |
| address | text | Client address |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## projects

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| client_id | bigint | Related client |
| title | varchar | Project title |
| description | text | Project description |
| budget | decimal | Project budget |
| deadline | date | Project deadline |
| status | enum | pending, in_progress, completed, on_hold |
| priority | enum | low, medium, high, urgent |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## tasks

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| project_id | bigint | Related project |
| assigned_to | bigint | Assigned user |
| title | varchar | Task title |
| description | text | Task details |
| status | enum | pending, in_progress, completed |
| priority | enum | low, medium, high, urgent |
| due_date | date | Task due date |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## project_files

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| project_id | bigint | Related project |
| uploaded_by | bigint | User who uploaded file |
| file_name | varchar | Original file name |
| file_path | varchar | Stored path |
| file_type | varchar | File extension/type |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## project_comments

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| project_id | bigint | Related project |
| user_id | bigint | Comment author |
| comment | text | Comment content |
| created_at | timestamp | Created time |
| updated_at | timestamp | Updated time |

## activity_logs

| Column | Type | Description |
|---|---|---|
| id | bigint | Primary key |
| user_id | bigint | Actor user |
| action | varchar | Action title |
| description | text | Action details |
| created_at | timestamp | Created time |
