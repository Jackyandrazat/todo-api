<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📝 Todo API (Laravel 11 + JWT)

## 📘 Dokumentasi Setup Proyek

### 🧱 Requirements
- PHP ≥ 8.2
- Composer
- MySQL / SQLite / PostgreSQL
- Laravel 11
- [Postman](https://www.postman.com/) (untuk uji API)
- Node.js (opsional, untuk frontend atau jika pakai Vite)

---

## 🚀 Setup Lokal

### 1. Clone Project
```bash
git clone https://github.com/[username]/todo-api.git
cd todo-api
composer install
cp .env.example .env
```
## 2. Edit ENV
## 3. Generate Key & JWT Secret
```bash
php artisan key:generate
php artisan jwt:secret
```
## 4. Migrate DB
```bash
php artisan migrate
```
## 5. read Doc API in this file

## 6. Struktur API
| Endpoint               | Method | Keterangan                  |
| ---------------------- | ------ | --------------------------- |
| `/api/register`        | POST   | Registrasi user             |
| `/api/login`           | POST   | Login user dan dapatkan JWT |
| `/api/checklists`      | GET    | List checklist (protected)  |
| `/api/checklists`      | POST   | Buat checklist baru         |
| `/api/checklists/{id}` | GET    | Lihat 1 checklist           |
| `/api/checklists/{id}` | PUT    | Update checklist            |
| `/api/checklists/{id}` | DELETE | Hapus checklist             |
| `/api/items`           | CRUD   | Endpoint item checklist     |

## 7. testing Via Postman
 Testing API via Postman
Register → Buat akun
Login → Ambil token
Simpan token di Header Authorization: Bearer <token>
Akses endpoint checklist dan checklist_item


Selamat Mencobaa
