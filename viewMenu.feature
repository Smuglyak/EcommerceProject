Feature: view menu
To check menu
As an user
I need to click on "menu" page
 	 Scenario: try to check menu
	 Given I on "/Main"
   	 When I click "Menu"
   	 Then I go to "/Menu"
   	 And I see menu page