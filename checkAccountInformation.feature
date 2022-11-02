Feature: check account information
To check my account information
As an user
I need to click on "profile" page
 	 Scenario: try to check account information
	 Given I on "/Main"
   	 When I click "My Profile"
   	 Then I go to "/Main/Profile"
   	 And I see my account information