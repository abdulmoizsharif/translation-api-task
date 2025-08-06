
# 🧩 Translation Management Service

A Laravel based API service to manage translations across multiple locales with tagging, high performance, and scalability in mind.

---

## 🚀 Features

* ✅ **JWT Authentication**
* 📚 **Create / Update / Filter Translations**
* 🔍 **Search by Key / Content / Tags**
* 🌐 **JSON Export for Frontend (Vue.js, etc.)**
* ⚡ **High-Performance Endpoints (<200ms)**
* 🧱 **Flat Schema + Pivot Table for Tags**
* 🐳 **Dockerized Setup**
* 📘 **Swagger/OpenAPI Documentation**
* 🧪 **Test Coverage > 95%**

---

## ⚙️ Setup Instructions

### 🔁 Clone and Setup

```bash
git clone https://github.com/abdulmoizsharif/translation-api.git
cd translation-api
composer install
cp .env.example .env
php artisan key:generate
php artisan jwt:secret
```

### 🐳 Run with Docker

```bash
docker-compose up --build
```

> This spins up Laravel, MySQL, and phpMyAdmin.

### 🧩 Migrate and Seed

```bash
php artisan migrate --seed
```

This seeds:

* A default user:
  `test@example.com / password`

* 100,000+ translation records with tags

---

## 🛠️ .env Configuration (Docker)

Ensure your `.env` has:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=translation
DB_USERNAME=root
DB_PASSWORD=root
```

---

## 📬 API Endpoints

| Method | Endpoint                 | Description                                                   |
| ------ | ------------------------ | ------------------------------------------------------------- |
| POST   | `/api/login`             | Login and get JWT token                                       |
| GET    | `/api/translations`      | List & search translations (filters: `tag`, `key`, `content`) |
| POST   | `/api/translations`      | Create new translation                                        |
| PUT    | `/api/translations/{id}` | Update existing translation                                   |
| GET    | `/api/export`            | Export all translations as JSON (grouped by locale)           |

---

## 🔐 Authentication

Use the token from `/login` in the header:

```
Authorization: Bearer {token}
```

---

## 🧪 Running Tests

```bash
php artisan test
```

Includes:

* Unit tests for models
* Feature tests for endpoints
* Performance tests

---

## 📘 API Docs (Swagger)

Swagger UI available at:

```
http://localhost:8000/api/documentation
```

---

## 🧠 Design Choices

* **Flat translations table** for speed
* **Pivot table for tags** (many-to-many relationship)
* **No external packages** used for CRUD or translation
* **Optimized queries** with indexing and eager loading

---

## ✅ Default User

| Email                                       | Password |
| ------------------------------------------- | -------- |
| [test@example.com](mailto:test@example.com) | password |

---
