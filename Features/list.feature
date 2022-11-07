Feature: list by price
To list by price
As an user
I need to click on "list" on "Meal" page
 	 Scenario: try to list by price
	 Given I on "/Menu"
   	 When I click "list"
   	 Then I see that meals are ordered by price