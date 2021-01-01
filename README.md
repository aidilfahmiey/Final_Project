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

1. Introduction :

In this day and age, railway transportation is one of the important modes of transport in Malaysia. In our project, Borneo Rapid is a company which provides public train transportation service dedicated for East Malaysia part that is Sarawak and Sabah area. Therefore, our Railway Management System is created which meant to ease railway management process which involve the registration for new user, ticketing and transactions of available trains in certain stations. In our system, the data of registered user and passengers, available trains and stations and also booked tickets are able to be stored in this system in different relations. Our main objective in this project is to allow the user to display, create queries, add, modify and remove some data. In addition to that, new user is allowed to registered by using procedure created and also users and passengers to retrieve information regarding train schedule. Other than that, user can predict the total price for one-way journey by using the function created in this system. Furthermore, this system will help to find out whether a registered user is eligible to get discount for their ticket and the total price of the ticket after discount will be display.

2. Objective :
   <ul>
   <li>To ease railway management process</li>
   <li>To allow the user to add personal data and booking data in the booking form</li>
   <li>To allow the system to display the train schedule</li>
   <li>To allow the user to cancel the booking</li>
   <li>To add the number of passenger for recent bought ticket</li>
   </ul>
   • To ease railway management process
   • To allow the user to add personal data and booking data in the booking form
   • To allow the system to display the train schedule
   • To allow the user to cancel the booking
   • To add the number of passenger for recent bought ticket

3. Features and functionalities :
   • Train booking management system
   • One-way total price calculator
   • Discount eligibility requirements and process

4. Diagram:

   - **Entity Relationship Diagram (ERD)**

   ![Entity Relationship Diagram](/resources/ERD.jpg)

   - **Sequence Diagram**

   ![Entity Relationship Diagram](/resources/SD.jpg)
   
   5. view: 
           Login and register page
           booking form page
           Schedule page
           booking table displaying cancel and update booking
           confirmation page with toal price and discount
           
   Model:  
          User has one to many relationship with tickets. One user can buy many tickets
          ticket has many to one relationship with train
          train has one to many relationship with ticket
          
   Route:  
           route for return views.
           route for models.
           route for return data passed by controller into view
           
  Controller: 
           For model to pass data
           for update and cancel booking
           
 User Athentication:
           user registration
           user login
           reset password
 
 Error checking: 
          validate booking form and show error message
          validate schedule table and show error message
          validate register and login and show error message
          
          
                 
     
           
