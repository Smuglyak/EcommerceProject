Feature: Updating a combo meal
To update a combo meal
As an admin
I need to be on menu update food page, I change all information needed for the combo meal, and I click on update button, then I will have combo meal updated
 	 Scenario: try to update a combo meal
	 Given I am “admin”
   	 And I am on "/Menu/Update"
   	 When I choose the combo meal by “name”
	 And I change “price”
	 And I change “food_description”
   	 Then I see message saying “name” was updated
	 And I get redirected to /Menu/Index
	 And I see “name” is changed on the menu