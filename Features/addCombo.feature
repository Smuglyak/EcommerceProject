Feature: Adding a combo meal
To add a combo meal
As an admin
I need to be on menu add food page, and I need to input all information needed for the new food, then I will have combo meal added
 	 Scenario: try to add a combo meal
	 Given I am “admin”
   	 And I am on "/Menu/Add"
   	 When I type in “chicken trio” in “name”
	 And I type in “12.55” 
	 And I select “combo” in category
	 And I click on “add”
   	 Then I see “chicken trio”
	 And I see “12.55”