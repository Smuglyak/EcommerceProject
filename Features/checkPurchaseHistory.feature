Feature: check purchase history
To check my purchase history
As an user
I need to click on "profile" page and click on "purchase history"
 	 Scenario: try to check purchase history
	 Given I on "/Main/Profile"
   	 When I click "purchase history"
   	 Then I go to "/Main/Profile/PurchaseHistory""
   	 And I see my purchase history