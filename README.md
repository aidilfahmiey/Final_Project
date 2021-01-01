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

#### 1. Introduction 

	In this day and age, railway transportation is one of the important modes of transport in Malaysia. In our project, Borneo Rapid is a company which provides public train transportation service dedicated for East Malaysia part that is Sarawak and Sabah area. Therefore, our Railway Management System is created which meant to ease railway management process which involve the registration for new user, ticketing and transactions of available trains in certain stations. In our system, the data of registered user and passengers, available trains and stations and also booked tickets are able to be stored in this system in different relations. Our main objective in this project is to allow the user to display, create queries, add, modify and remove some data. In addition to that, new user is allowed to registered by using procedure created and also users and passengers to retrieve information regarding train schedule. Other than that, user can predict the total price for one-way journey by using the function created in this system. Furthermore, this system will help to find out whether a registered user is eligible to get discount for their ticket and the total price of the ticket after discount will be display.

#### 2. Objective 
   <ul>
   <li>To ease railway management process</li>
   <li>To allow the user to add personal data and booking data in the booking form</li>
   <li>To allow the system to display the train schedule</li>
   <li>To allow the user to cancel the booking</li>
   <li>To add the number of passenger for recent bought ticket</li>
   </ul>

#### 3. Features and functionalities 
   <ul>
   <li>Train booking management system</li>
   <li>One-way total price calculator</li>
   <li>To allow the system to display the train schedule</li>
   <li>Discount eligibility requirements and process</li>
   </ul>
   
#### 4. Entity Relationship Diagram (ER Diagram)
   
   - Views :
   	- Login and register page
   	- Booking form page
	- Schedule page
	- Booking table displaying cancel and update booking
	- Confirmation page with toal price and discount
	
   - Controllers :
   	- For model to pass data
	- For update and cancel booking
   
   - Routes :
    	- route for return views.
        - route for models.
        - route for return data passed by controller into view
	   
   - Models :
     User has one-to-many relationship with tickets. One user can buy many tickets
     ticket has many to one relationship with train
     train has one to many relationship with ticket
    
   - Error checking : 
          - validate booking form and show error message
          - validate schedule table and show error message
          - validate register and login and show error message


   - **Entity Relationship Diagram (ERD)**

   ![Entity Relationship Diagram](/resources/ERD.jpg)

#### 5. Sequence Diagram

   ![Entity Relationship Diagram](/resources/SD.jpg)
   
#### 6. References  
                 
     
           
