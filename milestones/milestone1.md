# Milestone 1 Draft

## 1. Executive Summary

  

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


##3. **Data Definitions**

  1. **Unregistered User**- This kind of user will be able to fully browse all products that are viewable on the site.  However, they will not be allowed to purchase, sell, or contact **registered users** unless they themselves become a **registered user** by using their **SFSU email** to sign up.  Sign up will be possible by both a sign in button located on the page or when the user tries to contact the **seller** in order to make a purchase.

  2. **Registered User**- After going through the process of registration this type of user will retain all of the privileges of an **unregistered user** as well as now being able to contact **sellers** in order to purchase a **product** from them and report improper use of the site to the **admin**.  Along with these privileges they will also themselves be able to post **products** to the site thus becoming a **seller**.

  3. **Seller**- A **registered user** will have the option to post **products** to the site in order to make contact with other **registered users** that may be interested in purchasing an item from them.  They will be responsible for providing at least one image, the price, as well as a short description of what the **product** is and its current state.  It will be between this **seller** and **registered user** to determine the amount for the product as well as the form of payment. This will be facilitated by the site by providing a contact email address to the **seller** when the **register user** shows interest in buying the **product**.  

  4. **Admin**- Will be in charge of making sure the site is being run correctly by having the ability to browse through all **registered user product** listings as well as a list of all **registered users**.  From these lists the **admin** will have the ability to remove any **product** postings as well as **registered users** if the need arises such as the item being sold is illegal.  The **admin** will not however have the ability to edit any listings or **registered user** information as well as not being able to place any **product** posts of their own.

  5. **San Francisco State University Email**- An **SFSU email** account is required from a user in order to register or sign in.  It is the only information that will be taken from a **registered user** that will be authenticated as it will help prove that the user is associated with SFSU as well as being the first contact point between a **seller** and potential **registered user** buyer.

  6. **???Product???**- The **products** that will be able to be sold on the site will have to be legal items.  **Product** price, description, and image will be set by the **seller** but will be able to be removed by the **admin** if the **product** does not meet the site’s **product** requirements. 

  7. **CAPTCHA**- A program that will be used to authenticate whether or not the user signing in or registering is not a bot.
USE CASES--

Unregistered buyer:
Sara is an sfsu student who wishes to browse the site and potentially buy something, she arrives to the site and is required to provided no information and is allowed to search categories and view item for sale by there student. If she sees something that she likes and decides to buy she will be directed ti the registration page. where he will be asked to provide a valid SFSU email and fill out a CAPTCHA. He will then be asked to decide on a user name and password that she will use for her login in information next time he arrives at the site.

Registered buyer:
Dillon is an SFSU student who has previously registered himself on the site. As a registered user when he visits the site he will be asked to provide his username and password as well as fill out a CAPTCHA. Once he has successfully logged in to the sit ehe will be allowed to browse and buy items from other SFSU students. He will also have the option of ranking / giving feedback about previous transactions.

Unregistered seller:
Wendy is a SFSU student who has heard about the site and has some things that sh wants to sell. When she arrives at the site she finds the link to the page for selling items. Upon requesting to post an object of sale she is directed to the registration page, where she will be asked to provide a valid SFSU email and fill out a captcha. She will then be asked to decide on a user name and password that she will use for her login in information next time she arrives at the site.

Registered seller:
Anthony is a SFSU student who has been previously registered. Upon arriving to the site he finds the link to login. He will then be directed to the login page where he will be asked to provide his username and email as well as fill out a  CAPTCHA. After successfully competing the login process he will be allowed to post photos of items he wishes to sell.

 
