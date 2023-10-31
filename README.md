## Project Documentation

It has been a pleasure to have the opportunity to conduct this test. I will explain its functionality in this file.

An administrator user (the driving class instructor) has already been registered with a Gmail email address. The username and password can be found in the `.env.example` file on the first 3 lines. This administrator user has the power to create schedules associated with the date of the class. Once a date and schedule have been created, the administrator can advertise or provide the link to their system to all users in order to get them to register as students of the subject. This means that any user who registers in the application through the login screen will be registered as a student.

Once all students have registered on the platform, the administrator can view the registered students on their dashboard and associate them with a schedule. When registering a student for a schedule, an email notification will be sent to the student, informing them that they must log into their account and confirm their attendance for the assigned schedule. The student must then log into their account with their credentials and select one of the two options shown on the screen to download their PDF.

# EMAIL = "ddrivingapplaravel@gmail.com";
# EMAIL_PASS = "drivingapplaravel123";
