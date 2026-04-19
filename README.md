# Activity 11: Laravel Breeze, Roles, and Blade Components

## Prerequisites

To run this project locally, you need to have the following installed:
- PHP 8.2 or higher
- Composer
- Node.js and NPM

## Installation Instructions

Follow these steps to set up the project in your local environment. The project uses **SQLite** by default, so there is no need to configure connections to external database managers like MySQL.

1. **Clone the repository:**
   ```bash
   git clone <https://github.com/Malechria/Activity11-Web-Application-Development.git>
   cd your-folder-name

2. Install PHP and Node dependencies:

composer install
npm install

3. Configure the environment:
Copy the example file to create your own .env file.
cp .env.example .env

4. Generate the application key:
php artisan key:generate

5. Prepare the database:
Run the migrations. When the terminal asks if you want to create the SQLite database (database.sqlite), select Yes.
php artisan migrate

6. Compile assets and start the server:
Open two terminal tabs and run the following commands simultaneously:

# Terminal 1: To compile Tailwind and front-end assets
npm run dev

# Terminal 2: To start the Laravel development server
php artisan serve



# Views:

navigate to the following routes (no login required):

http://localhost:8000/pagina-uno

http://localhost:8000/pagina-dos


# Authentication and Role Validation:

Navigate to http://localhost:8000/register and create a new account.

By default, the database migration assigns the value false to the is_admin column for any newly registered user.

Attempt to access the protected route:

http://localhost:8000/admin-panel

Expected Result: The system will intercept the request and display a 403 Error - Access Denied view.

## Activity 12 (RESTful API & CRUD)
This project includes a functional API to manage Universes and Superheroes tables with all 5 CRUD operations (Read All, Read One, Create, Update, Delete).

How to test using Postman:
Make sure the Laravel server is running. Set the header Accept: application/json in your Postman requests.

Universes Endpoints (/api/universes):

GET /api/universes (Read all)

GET /api/universes/{id} (Read one)

POST /api/universes (Create - requires name and publisher)

PUT /api/universes/{id} (Update)

DELETE /api/universes/{id} (Delete)

Superheroes Endpoints (/api/superheroes):

GET /api/superheroes (Read all)

GET /api/superheroes/{id} (Read one)

POST /api/superheroes (Create - requires name, real_name, and universe_id)

PUT /api/superheroes/{id} (Update)

DELETE /api/superheroes/{id} (Delete)