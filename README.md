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

## PROJECT PROPOSAL

#### 1.0	Introduction 

>In this day and age, railway transportation is one of the important modes of transport in Malaysia. In our project, Borneo Rapid is a company which provides public train transportation service dedicated for East Malaysia part that is Sarawak and Sabah area. Therefore, our Train Booking System is created which meant to ease railway management process which involve the registration for new user, ticketing and transactions of available trains in certain stations. In our system, the data of registered user and passengers, available trains and stations and also booked tickets are able to be stored in this system in different relations. Our main objective in this project is to allow the user to display, create queries, add, modify and remove some data. In addition to that, new user is allowed to registered by using procedure created and also users and passengers to retrieve information regarding train schedule. Other than that, user can predict the total price for one-way journey by using the function created in this system. Furthermore, this system will help to find out whether a registered user is eligible to get discount for their ticket and the total price of the ticket after discount will be display.

#### 2.0	Objective 
   <ul>
   <li>To ease railway management process</li>
   <li>To allow the user to add personal data and booking data in the booking form</li>
   <li>To allow the system to display the train schedule</li>
   <li>To allow the user to cancel the booking</li>
   <li>To add the number of passenger for recent bought ticket</li>
   </ul>

#### 3.0	Features and functionalities 
   <ul>
   <li>Train booking management system</li>
   <li>One-way total price calculator</li>
   <li>To allow the system to display the train schedule</li>
   <li>Discount eligibility requirements and process</li>
   </ul>
   
#### 4.0	Entity Relationship Diagram (ER Diagram)

   - **Entity Relationship Diagram (ERD)**

   ![Entity Relationship Diagram](/resources/ERD.jpg)

#### 5.0	Sequence Diagram

   ![Entity Relationship Diagram](/resources/SD.jpg)

#### 6.0	Laravel Functionality
   - **VIEW:** 
   <ul>
   <li>Log in and register page</li>
   <li>Booking form page</li>
   <li>Train Schedule page</li>
   <li>Booking table displaying cancel and update page</li>
   <li>Confirmation page with total price and discount</li>
   </ul>

   - **Controller:**
   <ul>
   <li> For model to pass form data, get data and find data
   <li> For update and cancel booking
   <li> calculate ticket price and discount
   <li> update and delete booking 
   <li> check availabe ticket, time and train
   </ul>

   - **Route:**
   <ul>
   <li> route for return views for user interface (booking form, train schedule, booking table, confirmation).
   <li> route for model binding(inject the model with user Id, Train id, booking Id, match the variables)
   <li> route for return data passed by controller into view (calculated price, train scedule with available time,date and tickets, update and delete booking, confirm booking)
   </ul>
   
   - **Model:**
   <ul>
   <li> User has one-to-many relationship with tickets (One user can buy many tickets).
   <li> ticket has many to one relationship with train  (Many tickets consist of each train).
   <li> train has many to many relationship with ticket (each train of a day consist of many tickets based on seat number).
   </ul>
	   
   - **Error checking:**
   <ul> validate booking form and show error message
   <li> validate schedule table and show error message
   <li> validate register and login and show error message
   <li> validation for update booking, check available ticket and show error message
   </ul>

   - **User Athentication:**
   <ul>
   <li> User Register
   <li> User login
   <li> User password reset
   <li> User update profile
   </ul>

   
#### 7.0	References  
        
	Markdown Cheat Sheet. (n.d.). Retrieved January 01, 2021, from https://www.markdownguide.org/cheat-sheet/
	SABAH MAP. (n.d.). Retrieved January 01, 2021, from https://www.amazingborneo.com/sabah/maps
	Berhad, K. (n.d.). Take the family on an adventure... Retrieved January 01, 2021, from https://www.ktmb.com.my/
                 
     
           
