Markdown

# Company Profile Website - TechCorp Solutions

## Introduction

### What is a Company Profile Website?
A Company Profile Website is an official, professional digital portal that presents a business's identity, history, offerings, values, and contact channels to potential clients and partners online.

### Why Businesses Need One
In the modern digital landscape, a website acts as the central hub for a company's brand identity. It establishes credibility, builds consumer trust, enables 24/7 client communication, and showcases services or products to a global target market.

### Purpose of the Project
The primary purpose of this project is to implement a multi-page enterprise website using Laravel's Model-View-Controller (MVC) architecture. It demonstrates practical knowledge of URL routing, server-side controllers, Blade layout inheritance, and reusable front-end components within a structured PHP web framework.

---

## Objectives
* Configured application routes using Laravel Routing (`routes/web.php`).
* Developed `CompanyController` to handle client request execution and return view layouts.
* Constructed reusable layout structures and component views (`app.blade.php`, `navbar`, `footer`).
* Built dynamic, styled content pages for Home, About, Services, and Contact sections.
* Managed project source code with Git version control adhering to structured commit practices.
* Formatted complete project documentation adhering to clean Markdown formatting guidelines.

---

## MVC Architecture

### What is MVC?
MVC stands for Model-View-Controller, an architectural pattern that divides application responsibilities into three distinct layers: Data Management (Model), Design & Presentation (View), and Application Logic (Controller).

### Why Laravel Uses MVC?
Laravel incorporates the MVC architectural pattern to enforce organized code bases, decouple business logic from user interfaces, and streamline request lifecycle management across modern web applications.

### Advantages of MVC in Software Development
* **Separation of Concerns:** Business logic and template presentation remain isolated from each other.
* **Maintainability & Scalability:** Updating design components does not break underlying backend routing or controllers.
* **Team Collaboration:** Front-end design updates can proceed simultaneously with backend API or controller logic development.

### Request Flow Diagram

Browser │ ▼ Route (routes/web.php) │ ▼ Controller
(CompanyController.php) │ ▼ Blade View (resources/views/pages/*) │ ▼
Response to Browser

---

## Laravel Routing

### What is Routing?
Routing is the process of defining valid URL entry points for incoming HTTP requests and mapping them to specific executable code, such as controller actions or anonymous functions.

### Key Concepts
* **GET Requests:** HTTP request methods utilized specifically to fetch and render data or web pages from the web server.
* **Route Definitions:** Declarations inside `routes/web.php` that map explicit URI paths (e.g., `/about`) to target controllers and methods.
* **Named Routes:** Programmatic identifiers assigned to routes using the `->name()` method, allowing flexible URL generation within Blade templates.

### Route Definitions Code Snippet (`routes/web.php`)
```php
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');

Controllers

Purpose & Benefits of Controllers

Controllers serve as the core request handlers. Instead of writing
inline logic directly inside route files, controllers centralize
application workflow, process user input, interact with data services,
and determine which view response to return.

Controller Methods

Inside app/Http/Controllers/CompanyController.php:

home(): Renders and returns the primary homepage view
(pages.home).

about(): Renders the company history, mission, and vision view
(pages.about).

services(): Processes and renders the company service matrix view
(pages.services).

contact(): Returns the interactive contact form view
(pages.contact).

Blade Templating Engine

Key Features

Blade Layouts: Core template structures that establish shared
HTML structures (<!DOCTYPE html>, <head>, script links) across
multiple views.

Blade Components: Modular, reusable UI fragments such as
navigation bars and footers included across different pages.

Directives Used:

@extends('layouts.app'): Specifies the master parent template
to inherit.

@section('content') ... @endsection: Defines page-specific
content blocks.

@yield('content'): Acts as a placeholder inside master layouts
to inject child section views.

@include('components.navbar'): Embeds a modular component view
inline.

Sample Code Snippet (resources/views/layouts/app.blade.php)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 flex flex-col min-h-screen">
    @include('components.navbar')
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>

Laravel Folder Structure

app/: Contains core code logic, including Controllers
(CompanyController.php), Middleware, and Models.

routes/: Holds all route definitions (such as web.php for
HTTP browser routes).

resources/: Houses raw front-end components, including Blade
templates (views/pages/, views/components/, views/layouts/),
CSS, and JavaScript.

public/: Stores accessible server assets like compiled CSS,
JavaScript scripts, uploaded media, and index.php.

bootstrap/: Contains execution bootstrapper scripts and
framework performance optimization caches.

config/: Holds configuration settings for database
connections, application services, and mailers.

Screenshots

1. Home Page

Features the primary hero header, value propositions, and key
highlights.

2. About Page

Displays company history, mission, and vision values.

3. Services Page

Grid interface highlighting core service solutions offered.

4. Contact Page

Interactive form layout along with corporate address details.

5. Navigation Bar

Reusable navigation component supporting internal route links.

6. Footer Component

Global footer component containing dynamic copyright, contact channels,
and developer social links.

7. Route Definitions

routes/web.php configuration mapping paths to controller methods.

8. Controller Implementation

CompanyController.php logic returning Blade view instances.

9. Blade Layout & Views Structure

File hierarchy showing organized views inside resources/views/pages/.

Problems Encountered

Database Session Exception
(SQLSTATE[HY000]: General error: 1 no such table: sessions)

Issue: Upon launching php artisan serve, requests failed
because database session drivers required SQLite tables that had
not been generated yet.

Unstyled HTML Output Rendering Outside Main Layout

Issue: Pasting section content outside @section('content')
and @endsection directives caused content to render as
unstyled raw text above the layout.

Missing PHP Extensions (pdo_sqlite)

Issue: Local PHP environments initially blocked execution
due to disabled SQLite drivers inside the global php.ini setup
file.

Solutions

Database Migration Execution: Executed php artisan migrate in
the terminal to initialize missing session tables inside
database.sqlite.

Directive Correction: Wrapped all page view code strictly
between @section('content') and @endsection tags to enforce
inheritance from app.blade.php.

PHP Configuration Update: Un-commented extension=pdo_sqlite
and extension=sqlite3 directives inside C:\php\php.ini to
activate database extensions.

Reflection

Building a multi-page web application using Laravel's MVC architecture
provided valuable hands-on experience with modern client-server
workflows. Prior to this project, rendering individual pages often
involved redundant HTML code, embedded PHP tags, and scattered script
files. Through Laravel, I experienced how separation of concerns
establishes clean, maintainable software architectures.

Dividing the application into Models, Views, and Controllers clarified
the client-server request lifecycle. When a user requests a URL,
Laravel's routing system interceptively maps the request to
CompanyController. The controller processes the action and retrieves
the appropriate Blade template. The Blade templating engine then renders
the final HTML layout sent to the user's browser. This flow keeps
backend routing rules, controller processing, and HTML UI presentation
completely separated, making the code clean and structured.

The principle of separation of concerns became clearer when implementing
Blade layout inheritance. By creating app.blade.php with modular
components like navbar.blade.php and footer.blade.php, common
navigation elements no longer had to be duplicated across every
individual page. Modifying navigation links or footer social links in a
single component file instantly updates the entire website. This modular
structure significantly speeds up development while reducing duplicate
code.

This architecture scales smoothly to enterprise systems handling high
transaction volumes. In larger applications, controllers remain
lightweight by delegating database operations to Eloquent ORM models and
offloading background workflows to dedicated service layers.
Understanding Laravel routing, controller design, and Blade views
establishes a solid foundation for building maintainable web
applications using industry-standard practices.

References

Laravel Documentation. (2026). Laravel - The PHP Framework for Web
Artisans. https://laravel.com/docs

PHP Documentation. (2026). PHP Manual: PHP Data Objects (PDO).
https://www.php.net/manual/en/book.pdo.php

Tailwind CSS Documentation. (2026). Tailwind CSS - Rapidly build
modern websites without ever leaving your HTML.
https://tailwindcss.com/docs

MDN Web Docs. (2026). An overview of HTTP requests and responses.
https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview