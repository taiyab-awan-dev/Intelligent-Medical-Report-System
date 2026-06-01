# Intelligent Medical Report System

A full-stack healthcare web application developed using Laravel, PHP, MySQL, JavaScript, and Python-based recommendation algorithms. The system helps manage patient records securely while providing disease and medical test recommendations through integrated predictive functionality.

## Architecture

The application follows the MVC (Model-View-Controller) architecture using the Laravel framework. MySQL is used for relational database management, while Python algorithms are integrated for disease and test recommendation functionality.

## Features

- Patient record management
- Secure authentication system
- Disease recommendation functionality
- Test recommendation system
- Database integration
- MVC architecture implementation
- Responsive web interface

## How to run:

1: Install xamp

2: Add xamp/php in enviornment variables

3: Install vs code

4: Unzip and open folder in vs code

-- move to the laravel project / Main folder

5: In xamp run apache and mySQL service

6: Open phpmyadmin through xamp

7: Create database of name "lvfyp"

8: In termianl of vs code run commmand: php artisan migrate

9: Open php my admin in web and go to users table in lvfyp table.. and create a user manually with type == 0

which represents the admin as thr can only be one admin and admin controls the rest of staff.

10: Run commmand: php artisan serve

Open the link in browser 

## Screenshots

### Login Screen
![Login Sceen](Intelligent-Medical-Report-System/Screenshots/Login-Screen.png)

### Account Creating Screen
![Account Creating Screen](Screenshots/Account-Creating-Screen.png)

### Add Staff Details
![Add Staff Details](screenshots/add-staff-details.png)

### Add Receptionist In System
![Add Resceptionist in System](screenshots/add-receptionist-in-system.png)

### Updating Receptionist Details
![Updating Receptionist Details](screenshots/updating-receptionist-details.png)

### Adding Patient in The System
![Adding Patient in The System](screenshots/adding-patient-in-the-system.png)

### Appointment Screem
![Appointment Screem](screenshots/appointment-screen.png)

### Test Recommendation Screen
![Test Recommendation Screen](screenshots/test-recommendation-screen.png)

### Prescription Adding Screen
![Prescription Adding Screen](screenshots/prescrition-adding--screen.png)

