# Laravel CRUD Application.

This is a simple Laravel CRUD (Create, Read, Update, Delete) Application [ELOQUENT_ORM].

---

## 📦 Requirements

Make sure the following are installed on your system:

- PHP >= 8.0
- Composer
- MySQL
- Git

---

## 🚀 How to Set Up the Project (Step-by-Step)

Follow these steps to clone and run the project locally.

---

### 1. Clone the Repository

Open your terminal and run:

```bash
git clone https://github.com/MansoorEhmad/laravel_eloquent_orm.git
```
##

### 2. Navigate into the Project Directory
```bash
cd YOUR_REPOSITORY 
```
##

### 3. Install PHP Dependencies
Use Composer to install all required PHP packages:
```bash
composer install
```
##

### 4. Copy the .env File
Create a new .env file by copying the example one:
```bash
cp .env.example .env
```
##

### 5. Generate Application Key
This will generate a secure application key and add it to your .env:
```bash
php artisan key:generate
```
##

### 6. Create a New MySQL Database
Open your MySQL client (phpMyAdmin or CLI) and create a database.
```bash
CREATE DATABASE laravel_crud;
```
##

### 7. Configure .env for Database
Open the .env file in any text editor and update the following lines:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```
Replace your_mysql_password with your actual MySQL root password.
##

### 8. Run Migrations
This will create the students table (and others if needed):
```bash
php artisan migrate
```
##

### 8.1. Run Seeders
This will create records in products & product details tables (and others if needed):
```bash
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=ProductDetailsSeeder
php artisan db:seed --class=TeamSeeder
php artisan db:seed --class=BookSeeder
php artisan db:seed --class=MemberSeeder
php artisan db:seed --class=RoleSeeder
php artisan db:seed --class=UserRolesSeeder
```
##

### 9. Serve the Application
To run the Laravel development server, use:
```bash
php artisan serve
```
##

Then open your browser and visit:
```bash
http://127.0.0.1:8000/students
```