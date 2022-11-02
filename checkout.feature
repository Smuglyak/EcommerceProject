Feature: checkout my meal
To checkout my meal
As an user
I need to click on "checkout" page, enter my card information and click submit
 	 Scenario: try to checkout
	 Given I on "/Main/Meal/Checkout"
   	 When I fill my card information
   	 And click "submit"
   	 Then my order is being checkouted