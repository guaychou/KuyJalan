# Kuyjalan
KuyJalan is web based application to inform the user about travelling place.

## Fungsionalitas : 
1. Register (nama, username, email,password)
2. Log in (username, password)
3. Home (konten-konen orang yang ngepost article , dan search)
4. Cek profil
5. Poin(Setiap kali user ngepost article)
6. Log out 
7. Like, comment , share

## Minimum Requirements
1. PHP >= 7.1.3
2. Composer

## How to run Project
Clone project
```
git clone https://github.com/guaychou/KuyJalan.git
```

Install package dependency
```
composer install
```

Configuration database
* Copy the `.env.example` file and create a `.env` 
* Fill database information `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD`

Generate key
```
php artisan key:generate
```

Run project
```
php artisan serve
```
