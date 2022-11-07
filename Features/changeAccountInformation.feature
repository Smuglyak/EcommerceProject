Feature: change account information
To change my name
As an user
I need to enter new name and click submit
 	 Scenario: try to change name
	 Given I on "/Main/Profile"
   	 When I click "modify name"
	 And I enter new name
	 And I click on submit
   	 Then I see my account information changed