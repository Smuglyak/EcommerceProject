Feature: Adding a meal
To add a meal
As an admin
I need to be on menu add food page, and I need to input all information needed for the new food, then I will have meal added
 	 Scenario: try to add a meal
	 Given I am “admin”
   	 And I am on "/Menu/Add"
   	 When I type in “pizza sushi” in “name”
	 And I type in “16.55” 
	 And I select “pizza” in category
	 And I click on “add”
   	 Then I see “pizza sushi”
	 And I see “16.55”