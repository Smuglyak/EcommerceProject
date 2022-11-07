Feature: check offers
To check offers
As an user
I need to click on "offers" page
 	 Scenario: try to check offers
	 Given I on "/Main"
   	 When I click "Offers"
   	 Then I go to "/Main/Offers"
   	 And I see new offers