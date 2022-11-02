Feature: Deleting a category
To delete a category
As an admin
I need to be on menu delete category page, and I need to click on the delete button for the category and then I will have category deleted
 	 Scenario: try to delete a meal category
	 Given I am “admin”
   	 And I am on "/Category/Delete"
   	 When I choose the category by “name”
	 And I click on “delete”
   	 Then I see message saying “name” was deleted
	 And I get redirected to /Menu/Index
	 And I see “name” is not on the menu