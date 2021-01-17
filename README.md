# Final_Project

Proposal - Task Delegation

1. SABRINA

- Introduction
- Objective
- Features and functionalities
- References

2. AZLINA

- Define views, controllers, routes and models
- References

3. AIDIL

- ERD
- Sequence diagram
- References

---

Project Development - Task Delegation

1. SABRINA

- Navigation Bar
- Title and App Name
- Database and Models
- Edit and update ticket
- Delete ticket and train schedule
- Routing
- Controller

2. AZLINA

- Create ticket price calculator function
- Database and Models
- Routing
- Controller

3. AIDIL

- Database and Models
- Display ticket and train schedule
- Add new ticket and train schedule
- User authentication
- Routing
- Controller

---

Final Report - Task Delegation

1. SABRINA

- Introduction
- Objective
- Features and functionalities
- Define views, controllers, routes and models
- References

2. AZLINA

- Define views, controllers, routes and models
- References

3. AIDIL

- ERD
- Sequence diagram
- References

## PROJECT PROPOSAL

#### 1.0 Introduction

> In this day and age, railway transportation is one of the important modes of transport in Malaysia. In our project, Borneo Rapid is a company which provides public train transportation service dedicated for East Malaysia part that is Sarawak and Sabah area. Therefore, our Borneo Rapid System is created which meant to ease railway management process which involve the registration for new user, ticketing and transactions of available trains in certain stations. In our system, the data of registered user, available trains and stations as well as booked tickets are able to be stored in this system in different relations. Our main objective in this project is to allow the user to display, create queries, add, modify and remove some data. In addition to that, new user is allowed to register by using form created as well as allowing users to retrieve information regarding train schedule. Other than that, user can predict the total price for one-way journey by using the function created in this system.

#### 2.0 Objective

   <ul>
   <li>To ease railway management process</li>
   <li>To allow the user to add personal data and booking data in the booking form</li>
   <li>To allow the system to display the train schedule</li>
   <li>To allow the user to cancel the booking</li>
   <li>To add the number of passenger for recent bought ticket</li>
   </ul>

#### 3.0 Features and functionalities

   <ul>
   <li>Train booking management system</li>
   <li>One-way total price calculator</li>
   <li>To allow the system to display the train schedule</li>
   <li>Discount eligibility requirements and process</li>
   </ul>
   
#### 4.0 Entity Relationship Diagram (ER Diagram)

**Views :**

   <ul>
   <li>home.blade.php : Displays dashboard as a Home page once user successfully register and login</li>
   <li>login.blade.php : Displays User Log in page</li>
   <li>register.blade.php : Displays User Registeration page</li>
   <li>show.blade.php : Displays Ticket page with edit and delete button</li>
   <li>create.blade.php : Displays New Ticket Booking Form page</li>
   <li>showSchedule.blade.php : Displays Train Schedule page with delete button</li>
   <li>createSchedule.blade.php : Displays New Train Schedule Form page</li>
   </ul>

**Controllers :**

   <ul>
   <li> HomeController.php :</li>
   <ul>
   <li> Allows user data from registeration form to be passed to the database</li>
   <li> Allows user data to be retrieved from database to proceed user login to Home page
   </ul>
   </li>
	
   <br>
   
   <ul>
   <li> ScheduleController.php : </li>
   <ul> 
   <li> Allows train schedule data from new train schedule form to be passed to the database</li>
   <li> Allows train schedule data to be removed from database
   </ul>
   </li>

   <br>
   
   <ul>
   <li> TrainController.php :
   <ul>
   <li> Allows ticket booking data from new ticket booking form to be passed to the database</li>
   <li> Allows ticket booking data to be updated</li>
   <li> Allows ticket booking data to be removed from database
   </ul>
   </li>

**Routes :**

   <ul>
   <li>Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'): Route for return views for Home page which corresponds with HomeController.php</li>
   <li>Route::resource('tickets', 'App\Http\Controllers\TrainController'): Route for return data passed by TrainController.php into view</li>
   <li>Route::resource('trains', 'App\Http\Controllers\ScheduleController') : Route for return data passed by ScheduleController.php into view</li>
   </ul>
   
**Models :**

   <ul>
   <li> User.php : User has one-to-many relationship with tickets (One user can buy many tickets)</li>
   <li> Ticket.php : Ticket has one to one relationship with train (One ticket consist of only one train)</li>
   <li> Train.php : Train has many to many relationship with ticket (Each train of a day consist of many tickets based on seat number).
   </ul>
	   
**Error checking:**
   <ul>
   <li> Validate booking form and show error message</li>
   <li> Validate schedule table and show error message</li>
   <li> Validate register and login and show error message</li>
   <li> Validation for update booking details, check available ticket and show error message</li>
   </ul>

**User Athentication:**

   <ul>
   <li> User registeration
   <li> User login
   <li> User password reset
   <li> User update profile
   </ul>
   
![Entity Relationship Diagram](/resources/ERD.png)

#### 5.0 Sequence Diagram

![Entity Relationship Diagram](/resources/SD.jpg)

#### 6.0 References

    Markdown Cheat Sheet. (n.d.). Retrieved January 01, 2021, from https://www.markdownguide.org/cheat-sheet/
    SABAH MAP. (n.d.). Retrieved January 01, 2021, from https://www.amazingborneo.com/sabah/maps
    Berhad, K. (n.d.). Take the family on an adventure... Retrieved January 01, 2021, from https://www.ktmb.com.my/
