# College Management
College, Student, Staff, Exam Management Solutions


				,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
				|+	COLLEGE MANAGEMENT SYSTEM	+|
				''''''''''''''''''''''''''''''''''''''''''

## INTRODUTION:

COLLEGE MANAGEMENT SYSTEM is the closed network project. In earlier days, there was a more complex to maintain the staff details, student details, subject details, mark details, and department details. There is a problem on create, edit, delete, view and searching on the details. Inorder to maintain all the details its very complexity to achieve the details in secure mannar.

To overcome all the demerits in existing system, My project "COLLEGE MANAGEMENT SYSTEM" provide the user interface to achieve the solutions for some of the drawbacks in existing system of college. In our proposed system, admin/principal/high authority people can manage the details of staff and student. i also provide the individual login form according to the user types of user inorder to achive the authentication.

## SOFTWARE REQUIREMENTS:
	  OPERATING SYSTEM  :	WINDOWS FAMILY AND LINUX.
	  WEB BROWERS       :	IE7+, MOZILA FIREFOX, SAFARI, OPERA,..
	  WEB SERVER        :	APACHE2.0
	  FRONTEND CODING   :	HTML, CSS, JS, SMARTY.
	  BACKEND CODING    :	PHP5.3+
	  DATABASE          :	MYSQL

## HARDWARE REQUIREMENTS:
	  PROCESSOR         :	INTEL DUALCORE AND HIGHER
	  RAM               :	512 MB
	  SERVER            :	LEMP, LAMP, WAMP, XXAMP

## INSTALLATION:

******************************COLLEGE MANAGEMENT SYSTEM**************************************************
*													*
*		  STEPS TO INSTALL THE COLLEGE MANAGEMENT SYSTEM.					*
*													*
*********************************************************************************************************
*	->INSTALL PHP,APACHE,MYSQL,INTERNET BROWSER..							*
*	->CLONE THE COLLEGE.ZIP FILE,							 		*
*	->PLACE THE COLLEGE FOLDER IN "ROOT" DIRECTORY,					 		*
*	->CREATE THE DATABASE, NAMED IT AS "COLLEGE",					 		*
*	->UNDUMP 'COLLEGE.SQL' FILE IN COLLEGE DATABASE(SQL FILE PATH:COLLEGE/SQL/COLLEGE.SQL)		*
*	->CHANGE THE ABSOLUTE PATH("Eg:http://localhost/") AND BASE PATH("Eg:/VAR/WWW/") ACCORDING TO	*
*WHERE THE USER STORED THE COLLEGE FOLDER(FILE PATH: COLLEGE/CONFIG/CONFIG.PHP)				*
*	->RUN THE COLLEGE MANAGEMENT SYSTEM USING INTERNET BROWSERS.(Eg URL:http://localhost/..)	*
*	->LOGIN FORM IS STRATED.THERE ARE THERE TYPE OF USERS.THEY ARE,					*
*		# ADMIN: USERNAME:'admin' PASSWORD:'123456789'					*
*		# STAFF: USERNAME:'staff' PASSWORD:'123456789'						*
*		# STUDENT: USERNAME:'123456789' PASSWORD:'123456789'					*
*	->IF U WANT TO CHANGE MYSQL DATABASE PASSWORD,GOTO:COLLEGE/CONFIG/DATABASECONNECTION.PHP	*
*													*
*********************************************************************************************************

## FORM DESCRIPTION:

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
