Feature: two factor authentication
To further protect my account
As an user
I need to complete two factor authentication
 	 Scenario: complete two factor authentication
	 Given I on "/Main"
   	 When I click "Login"
   	 And enter my login information
   	 And I receive the one time code to my e-mail
   	 And I enter my one time code in "code"
   	 Then I can enter into my account