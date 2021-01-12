
# <div align="center"> :truck: Package Management System </div>

## Group Members:

:sparkles: Mufida Zuhrah Binti Zulhendri (1723396) <br/>
:sparkles: Hafiz Pangteh (1528007) <br/>
:sparkles: Nada Halabee (1622086) 

---

## Introduction

This web application is built to track shipped packages and shipping trucks in a delivery service center. The system will be used by the admin of the service. 

---

## Objectives

With simple and easy to understand UI, Parcel Management System will help system admin to do CRUD operation (Create, Read, Update, Delete) on every main element of the system which are Trucks data, Packages data and Postmen Data.

---

## Features and Functionalities

:pushpin: Admin first logged into the system. There will be authentication involved. If Admin has not register yet, Admin can click on the 'register' button to register first. <br />

:pushpin: Once logged in, Admin is greeted by the home page where there are three options to choose: Truck, Package, Postmen. Admin can click one of the option to see details about each option <br />

:pushpin: Truck Page :truck: <br />
Truck Page contains details about the truck data.

- :man: Admin can: <br/>
  * Perform CRUD operation on truck table
  * Add new Truck/ Edit some item on the truck/ Update it/ Delete item from the truck table

- Features:
  * Truck display table on index page will display the following columns: truck number, quantity (how many items are load into the truck), postman in charge (which postman is going to drive the truck and deliver packages on that particular date), date of operation, and status.   

- Functionalities:
  * One truck can load a maximum of 50 items in a day delivery.
  * A message prompt "FULL" will be displayed if a truck has reached maximum limit (when truck's quantity had reached 50 items).
  * A message prompt "AVAILABLE" will be displayed if a truck can load more items (when truck's quantity is less than 50 items).
  * In the edit page, there will be a message displayed indicating how many more packages can be load into the truck
  
<br />

:pushpin: Package Page :package:

- :man: Admin can:
  * Perform CRUD operation on package table
  * Add new Package/ Edit some item on the Package/ Update it/ Delete item from the Package table
  
- Features:

- Functionalities:
  * If an item is assigned to specific truck on the item table, it will be updated automatically on the truck table as well
  
<br />
  
:pushpin: Postman Page :postman:

- :man: Admin can:
  * Perform CRUD operation on Postman table
  * Add new Postman/ Edit some item on the Postman/ Update it/ Delete item from the Postman table

---

## Views, Controllers, Routes, Models

#### :scroll: Views
- :file_folder: auth
    * :file_folder: passwords
        * confirm.blade.php
        * email.blade.php
        * reset.blade.php
  * login.blade.php
  * register.blade.php
  * verify.blade.php
- :file_folder: layouts
  * app.blade.php
- :file_folder: posts
- :file_folder: truck
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: package
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- :file_folder: postman
  * create.blade.php
  * edit.blade.php
  * index.blade.php
  * show.blade.php
- home.blade.php

#### :hammer: Controllers
- :file_folder: Auth
- HomeController
- TruckController
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()
- PackageController
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()
- PostmanController
  * index()
  * store ()
  * show ()
  * update ()
  * destroy ()

#### :mailbox_closed: Routes

- Main Routes
- Resources Routes

#### :books: Models
- User
- Table
- Package
- Postman

---

## ERD

---

## Sequence Diagram

---

## References
