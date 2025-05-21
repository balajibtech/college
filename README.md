# College Management
College, Student, Staff, Exam Management Solutions


				,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
				|+	COLLEGE MANAGEMENT SYSTEM	+|
				''''''''''''''''''''''''''''''''''''''''''

## Table of Contents
* [INTRODUCTION](#introduction)
* [TECHNOLOGIES USED](#technologies-used)
* [HOW TO CONTRIBUTE](#how-to-contribute)
* [LICENSE](#license)
* [HARDWARE REQUIREMENTS](#hardware-requirements)
* [INSTALLATION](#installation)
* [PROJECT STRUCTURE](#project-structure)
* [USER ROLES OVERVIEW](#user-roles-overview)
* [FORM DESCRIPTION](#form-description)

## INTRODUCTION

The COLLEGE MANAGEMENT SYSTEM is a web-based application designed to manage various aspects of a college, including student information, staff details, and academic records. It aims to simplify administrative tasks and provide a centralized platform for accessing college-related data. This project was developed to overcome complexities in manually maintaining records for staff, students, subjects, marks, and departments, offering functionalities for creating, editing, deleting, viewing, and searching data securely.

The system features role-based access control, providing distinct interfaces and capabilities for administrators, staff, and students, ensuring authenticated access to relevant information and functions.

## TECHNOLOGIES USED

This project utilizes the following core technologies:

*   **Operating System**: The application is designed to be compatible with common server operating systems, including Windows and Linux-based distributions.
*   **Web Server**: Apache 2.0 (or a newer compatible version like Apache 2.4) is recommended for serving the application. Other web servers (like Nginx) capable of running PHP applications might also be configurable.
*   **Backend Scripting**: PHP 5.3+. This server-side scripting language is used to handle the core application logic, database interactions, and request processing.
    *   *Note: PHP 5.3 is significantly outdated and has known security vulnerabilities. Upgrading to a modern, supported PHP version (e.g., PHP 7.4 or newer) is strongly recommended for any production deployment.*
*   **Frontend Development**:
    *   **HTML (HyperText Markup Language)**: Used for structuring the content and layout of the web pages.
    *   **CSS (Cascading Style Sheets)**: Used for styling the visual presentation of the user interface.
    *   **JavaScript (JS)**: Used for client-side scripting to enhance user interactivity, perform form validations, and manage dynamic content updates without full page reloads.
    *   **Smarty**: A PHP templating engine used to separate the application logic (PHP code) from the presentation layer (HTML). This helps in organizing the code and makes it easier to manage the user interface.
*   **Database**: MySQL. A relational database management system used to store all application data, including user accounts, student records, staff details, and course information.
*   **Web Browsers**: The application is intended to be compatible with modern web browsers such as Google Chrome, Mozilla Firefox, Safari, and Microsoft Edge. (The original mention of IE7+ is outdated).

## HOW TO CONTRIBUTE

We welcome contributions to the College Management System! If you'd like to contribute, please consider the following:

*   **Reporting Bugs:** If you find a bug, please open an issue on the GitHub repository, providing as much detail as possible.
*   **Suggesting Enhancements:** If you have ideas for new features or improvements, feel free to open an issue to discuss them.
*   **Pull Requests:** For direct code contributions:
    1.  Fork the repository.
    2.  Create a new branch for your feature or bug fix (`git checkout -b feature/your-feature-name` or `bugfix/your-fix-name`).
    3.  Make your changes and commit them with clear messages.
    4.  Push your changes to your fork.
    5.  Submit a pull request to the main repository for review.

Please ensure your code adheres to the existing style and that any new features are well-tested (though testing infrastructure may need to be set up/improved).

## LICENSE

This project is licensed under the Apache License, Version 2.0. See the [LICENSE](LICENSE) file for full details.

## HARDWARE REQUIREMENTS
*   **PROCESSOR**: INTEL DUAL CORE or higher
*   **RAM**: 512 MB or more
*   **SERVER STACK**: LEMP, LAMP, WAMP, XAMPP

## INSTALLATION

Follow these steps to install the College Management System:

1.  **Prerequisites**: Ensure you have PHP, Apache (or another web server), MySQL, and a web browser installed.
2.  **Clone/Download**: Obtain the project files (e.g., `COLLEGE.ZIP`) and extract them.
3.  **Directory Placement**: Place the `COLLEGE` folder into your web server's document root directory (e.g., `/var/www/html/`, `htdocs/`).
4.  **Database Creation**: Create a new MySQL database named `COLLEGE`.
5.  **Database Import**: Import the `COLLEGE.SQL` file (located at `COLLEGE/SQL/COLLEGE.SQL`) into your `COLLEGE` database.
    ```bash
    # Example command using mysql client:
    # mysql -u your_mysql_user -p COLLEGE < PATH_TO_YOUR_APP/COLLEGE/SQL/COLLEGE.SQL
    ```
6.  **Configuration**:
    *   Open the configuration file at `COLLEGE/CONFIG/CONFIG.PHP`.
    *   Update the `BASE_URL` to match your application's web address (e.g., `http://localhost/COLLEGE/` or `http://yourdomain.com/COLLEGE/`).
    *   Update the `BASE_PATH` to the absolute file system path where you placed the `COLLEGE` folder (e.g., `/var/www/html/COLLEGE/` or `C:/xampp/htdocs/COLLEGE/`).
7.  **Database Connection**: If you need to change the MySQL database connection details (e.g., password), edit the file `COLLEGE/CONFIG/DATABASECONNECTION.PHP`.
8.  **Run Application**: Open your web browser and navigate to the URL you configured (e.g., `http://localhost/COLLEGE/`).

> **IMPORTANT SECURITY NOTICE:**
>
> The system comes with default credentials:
> *   **ADMIN**: Username: `admin`, Password: `123456789`
> *   **STAFF**: Username: `staff`, Password: `123456789`
> *   **STUDENT**: Username: `123456789`, Password: `123456789` (The username is typically a student ID)
>
> **You MUST change these default passwords immediately after installation for all user types. Also, ensure your MySQL database password, configured in `COLLEGE/CONFIG/DATABASECONNECTION.PHP`, is strong and secure.**

## PROJECT STRUCTURE

The project is organized into the following main directories:

*   ``.github/``: Contains GitHub-specific files, such as issue templates for bug reports and feature requests.
*   `class/`: Holds PHP class definitions used across the application, like `commonClass.php` for general utilities and `loginFormClass.php` for login logic.
*   `config/`: Stores configuration files, including `config.php` for main settings and `dataBaseConnection.php` for database connectivity.
*   `css/`: Contains Cascading Style Sheets (CSS) files, like `default.css`, used for styling the web interface.
*   `dhtmlgoodies_calendar/`: Includes files for the DHTMLGoodies Calendar widget, used for date selection.
*   `documentation/`: Contains project documentation files, such as feedback documents.
*   `images/`: Stores image assets (e.g., GIFs, JPGs) used in the application's UI.
*   `js/`: Includes JavaScript files that provide client-side interactivity and validation (e.g., `admin.js`, `validation.js`).
*   `libs/`: Contains third-party libraries, most notably the Smarty templating engine (`Smarty.class.php` and related plugins).
*   `php/`: This directory is central to the application, holding PHP scripts that manage backend logic, process forms, interact with the database, and handle user requests (e.g., `loginValidation.php`, `createStudentAccount.php`).
*   `sql/`: Stores SQL-related files, primarily the database schema and initial data dump (`college.sql.zip`).
*   `templates_c/`: Contains compiled Smarty templates. These are temporary files generated by Smarty for faster template processing and are typically not manually edited or version-controlled.
*   `tpl/`: Holds the Smarty template files (`.tpl`) which define the HTML structure and presentation layer of the application (e.g., `loginForm.tpl`, `adminMainMenu.tpl`).

## USER ROLES OVERVIEW

The College Management System provides different interfaces and functionalities tailored to three main user roles:

*   **Administrator**: Has full control over the system. Responsibilities include managing departments, staff accounts, student accounts, and overall system configuration.
*   **Staff**: Can manage their profiles, view student details relevant to their role (e.g., subjects taught, advisees), and potentially manage marks or attendance.
*   **Student**: Can view their profile, academic progress, exam schedules, marks, and other relevant personal or academic information.

Detailed descriptions of each form and feature are beyond the scope of this README but are typically found within the application's user interface or specific user guides.
## FORM DESCRIPTION

  ### LOGIN FORM:
	
   IN this Form, there are there type of users. They are 
				* ADMINISTRATOR, 
				* STAFF and 
				* STUDENT. 
   They all have seperate menu's and individual options are provided.
    
  > Step1: Here user can select the which type of user, and then
  > Step2: the user must enter their user name and password. 

Note: Server can validate the user information and they redirect to their main menus.

  ### ADMIN MAIN MENU:
  
   After Admin login into the login form. They will redirect to the Admin Main Menu in that form there are major menu's like,
  > Create account to staff, student and department. 
  > Edit the account to staff, student and department.
  > Delete the account to staff, student and department, and
  > View the account to staff, student and department.

  ### EDIT ADMIN PROFILE:
	
   Admin can edit the their user profile using this interface. They have to edit their personal information likes first name, user name, user password, designation, security question, security answer, gender, dob date, mobile_number, email_id , address. If they click Submit button server change their requests.

   ### CREATE DEPARTMENT DETAILS:
  
   Admin can store their currently having Departments details. They must store their department details such as,
	
  > Step1: Select the Qualification,(UG,PG)
  > Step2: Enter the Degree (BE, BTECH,..)
  > Step3: Enter the Department Code like(ECE, EEE, IT,..)
  > Step4: Enter the Full department Name(Information Technology)
  > Step5: Enter the Course Fees per semester.

   ### CREATE STAFF DETAILS:
   
   Admin create the account for the staff to login into their own account. Admin/Staff enter the details such as first name, user name, user password, designation, security question, security answer, gender, dob date, mobile_number, email_id , address
