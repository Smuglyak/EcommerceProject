Feature: view meal
To check meal
As an user
I need to click on meal link
 	 Scenario: try to check "burger" description
	 Given I on "/Menu"
   	 When I click "view meal"
   	 Then I see meal description