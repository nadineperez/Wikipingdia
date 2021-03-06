# What is the application?

For our project we created a web application similar to Wikipedia and Testudo combined for the College of Information Studies at the University of Maryland, College Park. We’ve decided to call this platform the WikiPINGdia. We chose this name when we came up with the project in our INST335 class by combining the name of the platform Wikipedia with our professor Ping Wang. This website will feature information on the Information Science major. To be more specific, it will include links to textbooks and course materials needed for class, syllabi, test and quiz banks, courses provided, reviews and evaluations on courses and professors, “tweets” of updates, other social media updates, jobs and internships offered, etc. This information will be created partly by a team that uploads the information that requires department approval and partly by a collaborative wiki that will contribute to reviews, descriptions, file uploads, etc..

# Why is the application necessary (or useful)?

In the personal experience of ourselves and our friends as information science, we often find information unreliable, or simply spread over too many sources (Testudo, ratemyprofessors.com, iSchool website, etc.) to be efficient or easy to find. In addition, a lot of the information you can find is not extensive and could be a lot more in depth. Giving information science its own space to be elaborated on seemed necessary, and our app gave teachers and TAs a new voice as well, something unseen in other similair apps. The wiki portion allows for extensive input of users of all kinds.

# Who are the application users?

Our web app will serve not only the students of the information science department, but also the professors, TAs, and even prospective students considering applying to the major. Most of our data will be simple. Information about classes and the department will be sourced from Testudo, various social media departments, and the iSchool website and information such as profiles, reviews, and file uploads will be handled by user contribution to wiki pages and verified uploads to profiles (ie a teacher updating their own profile on the website). In order to contribute to the wiki aspect of our web application, or edit your profile as a teacher or TA, you will have to be verified as a UMD student, so we will also have to collect user information of those who wish to contribute.

# How does the application work?

### General structure

Our site is built with (in addition to HTML/CSS obviously) a combination of Javascript with the Bootstrap library and PHP with the Codeigniter Web Framework. Every page has a global header bar with important links, social media links, and a search function. Also, every page has a collapsible side bar that contains "trending links" and a login function.

### Homepage

Our homepage news carousel was built with the Bootstrap carousel class using href="" links to direct the user to the relevant news article associated with each piture. The Twitter widget is a Twitter-timeline class designed to incorporate the Twitter API into HTML and our "Nightmode" function is a Javascript toggle function we built over a Bootstrap button.

### Class, Teacher, and Prerequisite Pages

The class pages, prerequisite page, and teacher pages are all completely dynamic and populated with relevant data from a sql database we built using PHP so the teacher and class pages can be populated for every class or teacher object we want to create as long as the information is in our database. Our login and review functions contain forms that save the relevant user input (account info and class/teacher reviews) to our sql database.

In our general major overview (prerequisites.php), every information science class is listed, and should is linked to its corresponding classinfo.php page. On each class page, you can rate the class, see its prerequisites, view which teachers have taught it in the past, view a course description, follow a link to register on testudo, and hopefully in the near future, be able to view and download past quizzes, exams, syllabi, and required textbooks.

The teachers dropdown menu on each of the class pages links to the corresponding teacher page, where you can leave reviews of the teacher, learn a little bit about them and what kind of research they do, how to contact them, and which other classes, if any, they've taught in the iSchool at Maryland. the user is also given the option to start their browsing with teachers instead of classes if they wanted by following the Teacher information link, where just like the prerequisites.php link, has a complete list of all the teachers as well as quick links to their teacher_review.php page.
