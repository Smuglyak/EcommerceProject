Feature: Updating a category
To update a category
As an admin
I need to be on menu update category page, I change all information needed for the category, and I click on update button, then I will have category updated
 	 Scenario: try to update a meal category
	 Given I am “admin”
   	 And I am on "/Category/Update"
   	 When I choose the category by “name”
	 And I change “category_description”
   	 Then I see message saying “name” was updated
	 And I get redirected to /Menu/Index
	 And I see “name” is changed on the menu