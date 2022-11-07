Feature: Deleting a combo meal
To delete a combo meal
As an admin
I need to be on menu delete food page, and I need to click delete button for the combo meal then I will have combo meal deleted
 	 Scenario: try to delete a combo meal
	 Given I am “admin”
   	 And I am on "/Menu/Delete"
   	 When I choose the combo meal by “name”
	 And I click on “delete”
   	 Then I see message saying “name” was deleted
	 And I get redirected to /Menu/Index
	 And I see “name” is not on the menu