# Milestone 1 Draft

## 1. Executive Summary

**NAME** will be a website that allows San Francisco State University (SFSU) students to sell items to other SFSU students. **NAME** is different from anything else on the market because it requires buyers and sellers to register with an SFSU email, and allows users to rate their interactions with each other. Both of these help build user trust for two reasons, the user already knows that the other person they are interacting with is an SFSU student, and the user can read past reviews about interactions other users have had with this person *(Mark: Run-on sentance?)*.

Our startup is uniquely qualified to create this site for a variety of reasons. It is made up entirely of SFSU students, meaning we understand the needs that are unique to SFSU students. Also our collective broad experience throughout the industry enables us to be ready for any challenge that comes our way.

*Name: Gator Swamp/Gator Swap/Students Sell Stuff/Yard Sale?*

*Special Feature: Rate Sellers/Buyers*


## 2. Use Cases *(Mark: Please proofread/check spelling)*

Unregistered buyer:
Sara is an sfsu student who wishes to browse the site and potentially buy something, she arrives to the site and is required to provided no information and is allowed to search categories and view item for sale by there student. If she sees something that she likes and decides to buy she will be directed ti the registration page. where he will be asked to provide a valid SFSU email and fill out a CAPTCHA. He will then be asked to decide on a user name and password that she will use for her login in information next time he arrives at the site.

Registered buyer:
Dillon is an SFSU student who has previously registered himself on the site. As a registered user when he visits the site he will be asked to provide his username and password as well as fill out a CAPTCHA. Once he has successfully logged in to the site he will be allowed to browse and buy items from other SFSU students. He will also have the option of ranking / giving feedback about previous transactions. *(Mark: We probably only want to use CAPTCHAs during registration.)*

Unregistered seller:
Wendy is a SFSU student who has heard about the site and has some things that she wants to sell. When she arrives at the site she finds the link to the page for selling items. Upon requesting to post an object of sale she is directed to the registration page, where she will be asked to provide a valid SFSU email and fill out a captcha. She will then be asked to decide on a user name and password that she will use for her login in information next time she arrives at the site.

Registered seller:
Anthony is a SFSU student who has been previously registered. Upon arriving to the site he finds the link to login. He will then be directed to the login page where he will be asked to provide his username and email as well as fill out a  CAPTCHA. After successfully competing the login process he will be allowed to post photos of items he wishes to sell. *(Mark: See note for registered buyer)*


##3. **Data Definitions**

  1. **Unregistered User**- This kind of user will be able to fully browse all products that are viewable on the site.  However, they will not be allowed to purchase, sell, or contact **registered users** unless they themselves become a **registered user** by using their **SFSU email** to sign up.  Sign up will be possible by both a sign in button located on the page or when the user tries to contact the **seller** in order to make a purchase.

  2. **Registered User**- After going through the process of registration this type of user will retain all of the privileges of an **unregistered user** as well as now being able to contact **sellers** in order to purchase a **product** from them and report improper use of the site to the **admin**.  Along with these privileges they will also themselves be able to post **products** to the site thus becoming a **seller**.

  3. **Seller**- A **registered user** will have the option to post **products** to the site in order to make contact with other **registered users** that may be interested in purchasing an item from them.  They will be responsible for providing at least one image, the price, as well as a short description of what the **product** is and its current state.  It will be between this **seller** and **registered user** to determine the amount for the product as well as the form of payment. This will be facilitated by the site by providing a contact email address to the **seller** when the **register user** shows interest in buying the **product**.  

  4. **Admin**- Will be in charge of making sure the site is being run correctly by having the ability to browse through all **registered user product** listings as well as a list of all **registered users**.  From these lists the **admin** will have the ability to remove any **product** postings as well as **registered users** if the need arises such as the item being sold is illegal.  The **admin** will not however have the ability to edit any listings or **registered user** information as well as not being able to place any **product** posts of their own.

  5. **San Francisco State University Email**- An **SFSU email** account is required from a user in order to register or sign in.  It is the only information that will be taken from a **registered user** that will be authenticated as it will help prove that the user is associated with SFSU as well as being the first contact point between a **seller** and potential **registered user** buyer.

  6. **???Product???**- The **products** that will be able to be sold on the site will have to be legal items.  **Product** price, description, and image will be set by the **seller** but will be able to be removed by the **admin** if the **product** does not meet the site’s **product** requirements. 

  7. **CAPTCHA**- A program that will be used to authenticate whether or not the user signing in or registering is not a bot.

## 4. Initial List of Funtional Specs
| Priority | Specifications |
| :------: | :------------: |
| 1 | All Users shall be able to browse site and products posted |
| 1 | All Users shall have categories to filter a user’s search |
| 1 | Unregistered Users shall be able to create an account |
| 1 | Registered Users shall be able to post products for sale |
| 1 | Registered Users shall be able to contact seller through sites about payment |
| 2 | Registered Users shall be able to upload photos of products they are attempting to sell |
| 2 | Registered Users shall be able to post Buyer/Seller Reviews |
| 2 | Registered Users shall be able to make a list of products they are interested in buying |
| 2 | Users shall be able to use search bar (for products, registered users, categories) |
| 3 | All Users shall be able to see trending products on homepage |
| 3 | All Users shall be able to see recently posted products on homepage |
| 3 | All Users shall be able to see recently sold products on homepage (but not who bought them) |
| 3 | Registered Users shall be able to see products tailored to their interests on homepage |
| 3 | All Users shall be able to see other products selling/sold by a certain seller |
| 3 | Registered users shall be able to use a public chat to talk about products they are willing to buy |
| 3 | All User shall be able to see whether an product is selling, pending, or is sold |

## 5. List Non-Funtional Specs

 1. Application shall be developed using class provided LAMP stack
 2. Application shall be developed using pre-approved set of SW development and collaborative tools provided in the class. Any other tools or frameworks must  be be explicitly approved by Anthony Souza on a case by case basis.
 3. Application shall be hosted and deployed on Amazon Web Services as specified in the class
 4. Application shall be optimized for standard desktop/laptop browsers, and must render correctly on the two latest versions of all major browsers: Mozilla, Safari, Chrome. 
 5. Application shall have responsive UI code so it can be adequately rendered on mobile devices but no mobile native app is to be developed
 6. Data shall be stored in the MySQL database on the class server in the team's account
 7. Application shall be served from the team's account
 8. No more than 50 concurrent users shall be accessing the application at any time
 9. Privacy of users shall be protected and all privacy policies will be appropriately communicated to the users.
 10. The language used shall be English. 
 11. Application shall be very easy to use and intuitive. No prior training shall be required to use the website. 
 12. Google analytics shall be added
 13. Messaging between users shall be done only by class approved methods to avoid issues of security with e-mail services.
 14. Pay functionality (how to pay for goods and services) shall not be implemented.
 15. Site security: basic best  practices shall be applied (as covered in the class)
 16. Modern SE processes and practices shall be used as specified in the class, including collaborative and continuous SW development
 17. The website shall prominently display the following text on all pages "SFSU Software Engineering Project, Spring 2017.  For Demonstration Only". (Important so as to not confuse this with a real application).

## 6. Competitive Analysis

| Features | Amazon | eBay | Uloop | StudentListings | Facebook Groups | ` Our Site ` |
| :-------:| :--------: | :------: | :------: | :-------: | :-------: | :-------: |
| Seller Rating | + | + | - | + | - | <b> ` + ` </b> |
| Buyer Rating | - | + | - | - | - | <b> ` + ` </b> |
| SFSU Verificatiom | - | - | + | - | + | <b> ` ++ ` </b> |
| Direct Communication | + | ++ | + | + | ++ | <b> ` ++ ` </b> |
| After Sales Support | ++ | + | + | - | - | <b> ` - ` </b> |
| Timestamped Pictures | - | - | - | - | - | <b> ` + ` </b> |
| Books Only | - | - | - | + | - | <b> ` - ` </b> |



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
  * Team lead ensured that team members read the final M1 and agree/understand it before submission: ON TRACK
