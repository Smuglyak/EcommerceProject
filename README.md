# Ecommerce Project 2022

## Team Name: Beavers

### Team Members:
- Alihan Djamankulov
- Alexandra Vovc
- Craig Justin Balibalos

![](https://github.com/Smuglyak/EcommerceProject/blob/main/images/pochitadancing-pochita.gif)

### The general goal of the project:
#### Foodie Marketplace
We will build a marketplace Web Application where a customer can order food online.

Our project will support the following stories:
1. As a customer, I can Register, Login, Logout and 2-Factor Authentication (these are not new features - they are given in class)

2. As a customer, I can Look through Menu (catalog of the foods)(a feature?)
3. As a customer, I can List the menu by price, categories, etc.
5. As a customer, I can View the meal description and ingredients
8. As a customer, I can Add, Delete or Modify the quantity of the order (3 features)
9. As a customer, I can Change my password if I forget 
11. As a customer, I can Checkout my order
12. As a customer, I can Favorite a specific food on the menu, and it will be Added or Deleted to my favorite meal section in my profile (2 features)
13. As a customer, I can Check my account and/or Change my information (first name and last name)
14. As a customer, I can Check my purchase history
15. As a customer, I can Check offers on food
16. As a customer, I can Search for a specific product
20. As a customer, I can Rate a food and Leave a comment
21. As an admin, I can Add, Delete or Update a combo (3 features)
22. As an admin, I can Add, Delete or Update food (3 features)
23. As an admin, I can Add, Delete or Update food categories (3 features)
- Not the final features. We might add more and update the proposal.
- (* - features that might changed due to difficulty of implementation)

Our web application will be slightly similar to the Mcdonalds mobile application. 
We will be spending approximately 180 hours or more building this product.

#### Teacher's comments:
16. As a customer, I can Order a delivery **(How does this differ from #11 Checking out an order?)**

### User guide
1) Once you land in first page, you will need to press button in the center of the page to either login or register.
2) If you go to register page, you will need to fill up all the fields for the account information.
3) Once you fill up everything, you will need to give an answer to the security question to authenticate in case you forget your password.
4) Once you give security question, you will need to login.
5) Once you login, you will need to setup 2-fa authentication in order to make sure, you are not a robot and to make sure that it is you who is accessing the application.(Double verification of a user).
6) Once you authenticate through 2fa, you will be in the dashboard page.
7) On the dashboard you will have three sections: upper section(the header), main article(the body), and the lower section(footer).

###### In the header you have:
- Application logo which will bring you to dashboard.
- Account logo which will bring you to account page.
- Cart logo which will bring you to the cart of foods.
###### In the body you have:
- all type of menus, and combos which you can click on head to that specific menu.
- There is also an option to see all foods uncategorized.
- Also a button to add a menu but it will not work if you do not have admin role(to sign in as admin, we have user with admin username and root password)
###### In the footer you have:
- The copyright text.
- Logout button to logout of the application.
###### Starting from header:
8) If you click on account logo, you will go to account page, you will see all your account information. You will have 6 red buttons:
- Edit button which will let you to edit your account information and save it.
- Check purchase history
- Check favorite foods where you can see all your favorite foods.
- 3 other buttons which are for design.

9) By clicking on cart logo, you will go to cart where you will have either empty cart or cart of foods depending if you already put some foods or not. If it is empty, you will have cart logo, and button saying to continue shopping which heads you to the dashboard

###### Now in the body:
10) You click on all foods page. You go there and you will see all foods uncategorized. You will have options such as adding a food to favorite, adding to cart, and viewing details for specific food.
- There is also search form which will let you find food based on a food keyword.
- Add food button which you can access only if you are admin.
- Assign a food to menu if you are admin.
- If you add some food to favorites, you will head to your account favorites and see that it is added.
- If you add some food to cart, you will head to cart and have it in there. The price will also be calculated. If you press at button pay at checkout, you will pay for your food and will be headed to the dashboard with the message saying you paid for the foods.
- If you view details of food, you will see all the information about the food. You will also be able to leave a review if needed.
- Nearly on every page you will have navigation line on the top of the page. Say you are in Food/viewFood/id page, you will have following navigation line: Menu/All Products/someFood. Clicking on any red text, will head you to that page.
11) If you click on any menu, you head to the all foods similar page. The only difference here, will be instead of search button, you will have sorting buttons which will sort the foods based on their price: descending or ascending.
- You see desrciption of the menu. 
- You see all the same options for food such as adding to favorites etc.
###### That is it for the body and for the whole user guide as a user.

###### Some other features that are for the admin.
- On the dashboard, you can now add a menu. On the add menu page, you can put all information for menu and the type of it such as menu or combo. If you add a menu, you can see it on the dashboard later.
- Now on any food you find, instead of seeing only its details, you can now also delete the food or edit it. Also for the menus/combos, you can either edit them or delete them as well.
- On all the foods page, you can now add a new  food, and also assign a food to a menu if needed.

##### That is it for the user guide! Buy all the delicious foods and order them to your house! Thank you!
