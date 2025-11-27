🛒 Laravel 12 E-Commerce Platform

This is a fully functional Laravel 12 E-Commerce Web Application developed as a practice project.
The system includes Admin, User, and Shop roles with separate access controls and features.
It also integrates Khalti Payment API for test transactions and supports Google Login using OAuth.

The frontend is powered by Java Kit (npm) and compiled using npm run dev.

🚀 Features
🔐 Authentication & Authorization

Email-based registration and login

Google Login (OAuth) integration

Role-based access system

Admin Panel – manage users, shops, and products

Shop Owner Panel – manage own shop and products

User Panel – browse products, manage cart, and place orders

💳 Payment Integration

Integrated Khalti Payment API (test mode)

Users can perform trial transactions securely

🏬 E-Commerce Core

Products listing, categories, shop pages

Add to cart, remove, and update cart

Order placement and order history

Shop management (for shop owners)

Admin dashboard with full control

🎨 Frontend (Java Kit + Vite)

Interactive UI built using Java Kit

Asset bundling & live reload using Vite:

npm run dev

⚙️ Technologies Used

Laravel 12

MySQL

JavaScript (Java Kit)

Blade Templates

OAuth (Google Login)

Khalti API

Composer & NPM

🗂️ Project Setup
Clone the repository
git clone https://github.com/yourusername/your-repo.git
cd your-repo

Install dependencies
composer install
npm install
npm run dev

Setup environment
cp .env.example .env
php artisan key:generate


Configure:

Database

Google OAuth credentials

Khalti test keys

Migrate the database
php artisan migrate

Run server
php artisan serve

🎯 Purpose of This Project

This project was created for learning and practicing real-world e-commerce application development using modern tools such as:

Role management

Payment API integration

OAuth login

Frontend asset bundling

Multi-panel system (Admin, Shop Owner, Users)
