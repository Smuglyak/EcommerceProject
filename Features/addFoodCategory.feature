Feature: Adding a category
To add a category
As an admin
I need to be on menu add category page, and I need to input all information needed for the new food category, then I will have category added
 	 Scenario: try to add a meal category
	 Given I am “admin”
   	 And I am on "/Category/Add"
   	 When I type in “Sushi” in “name”
	 And I click on “add”
   	 Then I see “pizza sushi”
	 And I see “16.55”