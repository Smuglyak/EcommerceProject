Feature: change my password
To change my password
As an user
I need to enter my old password and then fill the new one
 	 Scenario: try to change my password
	 Given I on "/Main/Profile"
   	 When I click "My Password"
   	 And I click "change password"
   	 And I enter my old password
   	 And I cofirm new password
   	 Then my password is changed