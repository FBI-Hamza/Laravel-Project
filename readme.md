# Laravel Order Management System

## About this application

This application is created by Hamza Safdar. This is a simple order management system. 

## Install
- Type this line:
```
composer update
```

- To change Database go to "config/database.php" and then change database. Default Database is SQLite.

- Migrate Database by typing this:
```
php artisan migrate
```

- To Add new user go to "app\Http\Controllers\Auth\RegisterController.php" comment this line 
```
public function showRegistrationForm()
    {
        return redirect('login');
    }

    public function register()
    {

    }
```
in bottom of the page. Then go to /register by web browser. Fill the form. 
- Again uncomment that line to hide registration page.


## Features
- Add order
- Add products
- Export Order (pdf, excel, csv and etc)
- Edit / Delete Order
- Search Order
- Print Invoice
- Easy interface
- Mobile view


### Contact me 
Email: hamzasafdar125@gmail.com   
