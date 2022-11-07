Feature: Deleting a meal
To delete a meal
As an admin
I need to be on menu delete food page, and I need to click on the delete button for the meal and then I will have meal deleted
 	 Scenario: try to delete a meal
	 Given I am “admin”
   	 And I am on "/Menu/Delete"
   	 When I choose the combo meal by “name”
	 And I click on “delete”
   	 Then I see message saying “name” was deleted
	 And I get redirected to /Menu/Index
	 And I see “name” is not on the menu