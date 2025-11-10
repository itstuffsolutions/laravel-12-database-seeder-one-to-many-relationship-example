# Laravel 12 — Database Seeder: One-to-Many Relationship Example  
*A practical tutorial by ItStuffSolutions*

## 📌 Overview  
In this tutorial you’ll learn how to seed database tables in Laravel 12 using a one-to-many relationship (i.e., `hasMany` / `belongsTo`). We’ll cover how to set up the model relationship, migrations, factories, seeders and how to run them to populate sample data. Read Full Tutorial : [Database Seeder: One-to-Many Relationship Example](https://itstuffsolutiotions.io/laravel-12-database-seeder-one-to-many-relationship-example/)

---

## ✅ What you’ll achieve  
- Define two Eloquent models with a one-to-many relationship (for example, `User` → `Post`).  
- Create migrations for both tables including the foreign key.  
- Create model factories for generating dummy data.  
- Write seeders that coordinate the relationship and generate records.  
- Run the seeders and verify the results.  

---

## 🚀 Prerequisites  
- Laravel 12 project already set up.  
- Database configured in your `.env` file (e.g., MySQL / SQLite).  
- Basic understanding of migrations, Eloquent models & factories.  
- Composer and Artisan CLI available.  

---

## 🛠 Step by Step Guide  

### 1. Define the Migrations  
Create migrations for both tables, e.g.:  
```bash
php artisan make:migration create_users_table
php artisan make:migration create_posts_table
