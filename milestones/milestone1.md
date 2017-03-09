# Milestone 1 Draft

## 1. Executive Summary

Gator Swap will be a website that allows San Francisco State University (SFSU) students to sell items to other SFSU students. Gator Swap is different from anything else on the market because it requires buyers and sellers to register with an SFSU email, and allows users to rate their interactions with each other. Both of these help build user trust for two reasons, the user already knows that the other person they are interacting with is an SFSU student, and the user can read past reviews about interactions other users have had with this person.

Our startup is uniquely qualified to create this site for a variety of reasons. It is made up entirely of SFSU students, meaning we understand the needs that are unique to SFSU students. Also our collective broad experience throughout the industry enables us to be ready for any challenge that comes our way.

## 2. Use Cases
**1-  Unregistered User:**
	Sara is a freshman at San Francisco State University living in her own for the first time she quickly realizes that she does not have all that she needs to create a comfortable living space for herself. She hears about an amazing site for San Francisco State University students where she can buy all the furnishings and appliances needed to create an amazing and productive home. Upon visiting site she finds a series of categories including but not exclusive to home furnishings and appliances, finally a place where she can buy a toaster and a couch at an affordable price. As an unregistered user she will have the ability only to browse items. She will not be allowed to contact registered users, purchase or sell items  until she herself becomes a **registered user**. She will have the opportunity to become a  **registered user** when she tries to post an item for sale or contact a registered in order to make a purchase. Once at the registration page she will be asked to provide a valid SFSU email and fill out a **CAPTCHA**. She will then be asked to decide on a username and password that she will use for her login in information next time she arrives at the site.

**2- Registered User:**
	Dillon is a sophomore at San Francisco State University and a **registered user** of the site. He has found himself in need of somewhere to sit in his apartment. After logging into the site using his **SFSU email** and a password he finds the link to view the different **categories** of items for sale. Once on the **categories** page he finds the link to “ furniture” after clicking on  the furniture link he is brought to a page containing photos of all the furniture for sale by other SFSU students. He uses the information provided by the **seller** and the visual information form the photos to inspect each piece for quality as well as compatibility for his specific seating needs. After finding a chair that meets his needs he contacts the **seller** to arrange a meeting. He is in luck because the person he wants to buy a chair from lives very close to him and is available to meet later that afternoon. After meeting the seller and fulfilling the financial obligations that were arranged between he and the seller, brings his new ( new to him ) chair home and reflects on the ease of the transaction, the low cost of the item, and the politeness and promptness of the **seller**. With all this in mind he returns to the site and with ease he finds the link to rate the **seller** and gives her the highest **rating** available, improving her overall rating and making her day. 

**3- Seller:**
	Jenny is a senior at San Francisco State University and has used the site many times to buy an apartment full of furniture, a bicycle, and many semesters worth of textbooks all squirrels at a reasonable price with the greatest of ease. Jenny like many students, is in need of money for a plethora of living expenses. Jenny being smart decides to use the same amazing site that she used to purchase these items to sell them back to another SFSU student that may have need them.After logging into the site she finds the link to sell items. Now that she has arrived at the page to sell items. One by one she uploads a photo of the item and gives a brief description of the item as well as any information she finds important about the item for sale, and a fair price. She can hardly contain her excitement as she eagerly awaits to be contacted by another **registered user** and hopefully receive a high rating like she has given to many other sellers. She is in luck within moments she is contacted by another SFSU student who is interested in buying her toaster. Jenny and the buyer arrange a time and place to carry out the transaction as well as any specifics about payment . After selling her toaster Jenny could not be happier with the transaction and rushes immediately back to the site to give the highest **rating** possible to the **buyer**.

**4- Administrator:**
	Sophia is a junior at San Francisco State University and is the **administrator** of a website that offers a platform for other students at her school to buy and sell goods. As the **admin** she has some concerns about whether or not everyone on the site is using it for its intended purpose. As the administrator she has the ability to browse through all **registered user** product listings as well as a list of all **registered users**. One afternoon she is looking through the items for sale in the furniture category and notices that some one has posted something illegal  for sale. Although she does not have the ability to edit any listings or **registered user** information she does have the ability to remove the item and ban the user from the site. Sophia does not have the ability to sell items of her own on the site but as we have seen her does have the ability to fight crime. 
  
##3. **Data Definitions**

  1. **Unregistered User**- This kind of user will be able to fully browse all products that are viewable on the site.  However, they will not be allowed to purchase, sell, or contact **registered users** unless they themselves become a **registered user** by using their **SFSU email** to sign up.  Sign up will be possible by both a sign in button located on the page or when the user tries to contact the **seller** in order to make a purchase.

  2. **Registered User**- After going through the process of registration this type of user will retain all of the privileges of an **unregistered user** as well as now being able to contact **sellers** in order to purchase a **listing** from them and report improper use of the site to the **admin**.  Along with these privileges they will also themselves be able to post **listings** to the site thus becoming a **seller**.
  
  3. **Buyer**- A **registered user** will be able to use the site to connect with the **seller** of a **listing** that they are interested in.  It will then be between the **buyer** and **seller** to determine the form of payment and the exchange of the **listed** item. 
  
  4. **Seller**- A **registered user** will have the option to post **listings** to the site in order to make contact with other **registered users** that may be interested in purchasing an item from them.  They will be responsible for providing at least one image, the price, as well as a short description of what the **listing** is and its current state.  It will be between this **seller** and **registered user** to determine the amount for the product as well as the form of payment. This will be facilitated by the site by contecting the **seller** with the **registered user** showing interest in buying the **listing**.  

  5. **Admin**- Will be in charge of making sure the site is being used correctly by having the ability to browse through all **registered user product** listings as well as a list of all **registered users**.  From these lists the **admin** will have the ability to remove any **listing** postings as well as **registered users** if the need arises.  The **admin** will not however have the ability to edit any listings or **registered user** information as well as not being able to place any **listing** posts of their own.

  6. **San Francisco State University Email**- An **SFSU email** account is required from a user in order to register or sign in.  It is the only personal information that will be taken from a **registered user** that will be authenticated as it will be used to prove that the user is associated with SFSU.

  7. **Listing**- The **listings** that will be able to be sold on the site will have to be legal items.  **Listing** price, description, and image will be set by the **seller**.  Along with this the **seller** will also will be presented with category names to choose from which will determine which category the **listing** will be under.  As another optional choice the **seller** will be able to choose a pick up location where once the deal is concluded the **buyer** will be able to pick up the **listing**.  These **listings**  will be monitored and be able to be removed by the **admin** if the **listing** does not meet the site’s **listing** requirements. 

  8. **CAPTCHA**- A program that will be used to authenticate whether or not the user signing in or registering is not a bot.
  
  9. **Ranking**- Each **registered user** will have a rating associated with their account that is based on a one to five star rating system.  With a one being the lowest rating and a five being the highest.  All **registered users** will be given a five star rating to begin with and with each transaction they perform both **registered users** in the transaction will rate the other once the deal has been completed by their satisfaction level with the deal.  This will allow the users to get a better sense of whom they are conducting business with.

## 4. Initial List of Funtional Specs

 1. Unregistered Users shall be able to create an account.
 2. Registered Users shall be able to post products for sale.
 3. Registered Users shall be able to contact seller through sites about payment.
 4. Registered Users shall be able to upload photos of products they are attempting to sell.
 5. Registered Users shall be able to post Buyer/Seller Reviews.
 6. Registered Users shall be able to add pick up location between Registered buyer and Registered seller.
 7. Registered Users shall be able to make a list of products they are interested in buying.
 8. Registered Users shall be able to use a public chat to talk about products they are willing to buy.
 9. Registered Users shall be able to see products tailored to their interests on homepage.
 10. Registered and Unregistered Users shall be able to browse site and products posted.
 11. Registered and Unregistered Users shall have categories to filter a user’s search.
 12. Registered and Unregistered Users shall be able to use search bar (for products, registered users, categories).
 13. Registered and Unregistered Users shall be able to see trending products on homepage.
 14. Registered and Unregistered Users shall be able to see recently posted products on homepage.
 15. Registered and Unregistered Users shall be able to see recently sold products on homepage (but not who bought them).
 16. Registered and Unregistered Users shall be able to see other products selling/sold by a certain seller.
 17. Registered and Unregistered Users shall be able to see whether an product is selling, pending, or is sold.

## 5. List Non-Funtional Specs

1. Application shall be developed using class provided LAMP stack.
2. Application shall be developed using pre-approved set of SW development and collaborative tools provided in the class. Any other tools or frameworks must  be be explicitly approved by Anthony Souza on a case by case basis.
3. Application shall be hosted and deployed on Amazon Web Services as specified in the class.
4. Application shall be optimized for standard desktop/laptop browsers, and must render correctly on the two latest versions of all major browsers: Mozilla, Safari, Chrome.
5. Application shall have responsive UI code so it can be adequately rendered on mobile devices but no mobile native app is to be developed.
6. Data shall be stored in the MySQL database on the class server in the team's account.
7. Application shall be served from the team's account.
8. No more than 50 concurrent users shall be accessing the application at any time.
9. Privacy of users shall be protected and all privacy policies will be appropriately communicated to the users.
10. The language used shall be English.
11. Application shall be very easy to use and intuitive. No prior training shall be required to use the website.
12. Google analytics shall be added.
13. Messaging between users shall be done only by class approved methods to avoid issues of security with e-mail services.
14. Pay functionality (how to pay for goods and services) shall not be implemented.
15. Site security: basic best  practices shall be applied (as covered in the class).
16. Modern SE processes and practices shall be used as specified in the class, including collaborative and continuous SW development.
17. The website shall prominently display the following text on all pages "SFSU Software Engineering Project, Spring 2017.  For Demonstration Only". (Important so as to not confuse this with a real application).

## 6. Competitive Analysis

| Features | Amazon | eBay | Uloop | StudentListings | Facebook Groups | ` Gator Swap ` |
| :-------:| :--------: | :------: | :------: | :-------: | :-------: | :-------: |
| Seller Rating | + | + | - | + | - | <b> ` + ` </b> |
| Buyer Rating | - | + | - | - | - | <b> ` + ` </b> |
| SFSU Verification | - | - | + | - | + | <b> ` ++ ` </b> |
| Direct Communication | + | ++ | + | + | ++ | <b> ` ++ ` </b> |
| After Sales Support | ++ | + | + | - | - | <b> ` - ` </b> |
| Product Discussion | + | - | - | - | + | <b> ` + ` </b> |

Our site is aimed at serving only SFSU users, using email verification. None of our competitors utilize email verification to ensure both the buyer and seller are from SFSU. Facebook Groups is the only competitor that provides an intuitive way for the buyer and seller to communicate directly, and we aim to provide an equally intuitive way. Majority of our competitors, such as Amazon & eBay charge fees to the seller, whereas we will not charge any fees. This helps the seller in two ways: they either get more money, or they can charge a lower price which benefits the buyer. The payment is done in person, which reduces chances of payment fraud, and also means our site will have less steps to complete a transaction. We will help buyers and sellers meet in person by suggesting ideal pick up locations, utilising our experience as SFSU students.

## 7. High Level Architecture


1. CakePHP: We will be using CakePHP, which is the most pleasant framework with 
respect to MVC pattern. Also, the great principle of convention over configuration (COC) is by far the separator from other PHP frameworks. The great thing about COC is if you create a file called “login” in a model folder, you will have a corresponding table in the database called “login”. Cake PHP was built from the ground up. This makes it unique and enjoyable to work with. CakePHP is handy because it has a CRUD (create, read, update, and delete) for database implementation; making development much more efficient. 
2. MySQL: Is the relational database management system which, will work well with CakePHP. We will be able to have a database table populated whenever we create a file in model. MySQL server will be connected with our database. So each individual will be able to contribute their assigned task and use the team’s database to accept user input or static files.
3. Foundation (HTML, CSS): This is the best front end framework. This provides a responsive grid, HTML, and CSS UI components. We will be implementing templates, forms, buttons, navigation and other interface components. We plan to create a navbar that is displayed on page 1. When the user decides to scroll down he/she will notice the navbar becomes tucked in. 
4. IDE (Webstorm PhpStorm and vim and test remotely): We plan to use PhpStorm because it provides seamless integration with PHPCake. 
5. PHPStorm is a full featured IDE for PHP and it is developed and marketed by Jet Brains. We plan to use the student account which is free, and we get the same features as a regular account. The best feature about PHPStorm is the live editing. For example, say I want to edit a code that I already compiled and want to adjust placement of some content on the website. I can rewrite the code on my IDE and check out my browser. Simply press refresh and I will be able to see the difference
Integration with version control systems, databases/SQL, composer, remote deployment, vagrant, rest client, and command line tools are just a few developer tools that my team will be using. Xdebug is a debugging tools that will be implemented and it can be used both locally and remotely.
6. Apache: Is the open source web server my team plans to use. It is part of LAMP stack 
discuses briefly during lecture. It will enable us to serve contents of our project. 
7. Web grind: Is an Xdebug profiling web frontend in PHP 7. It implements a 
subset of the features of kcachegrind. This simple tool will help track time spent in functions. The process of doing this will be by self-cost or inclusive cost. Inclusive cost is time inside function + calls to other functions. This tool will let us keep track of all function time cost. Which is very important for making a feasible UX design model. Our goal is to make the website simple and easy access and navigate content for users. Just to simply our usage of Xdebug is to receive stack and function traces in error messages with the following messages: 1) Full parameter display for user defined functions 2) function name, file name and line indications and finally 3) support for member functions. Also, memory allocation and protection for infinite recursions.
8. reCaptcha: We plan to use this google based tools to exclude robots from accessing our website. The captcha can be solved by clicking on a box/button, making solving the captcha easier than reading blurred and smeared text from other captcha services. 



## 8. Team

  * Mark Reynolds - Team Lead/Backend Developer
  * Ahmed Salem - Chief Technology Officer/Frontend Developer
  * Rushabh Vora - GitHub Administrator/Backend Developer
  * Skylar Miles - Quality Assurance/Frontend Developer
  * Shayn Hoy - Backend Developer
  * Lowell Castillo - Frontend Developer

## 9. Checklist

  * Team decided on basic means of communication: DONE
  * Team found a time slot to meet outside of the class: DONE
  * CTO chose and working out well so far: DONE
  * GitHub master chosen: DONE
  * Team ready and able to use chosen framework: DONE
  * Skills of each team member defined and known to all: DONE
  * Team lead ensured that team members read the final M1 and agree/understand it before submission: DONE
