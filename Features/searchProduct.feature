Feature: search product
To search a specific product
As an user
I need to enter the name of the product and click "search"
 	 Scenario: try to search a product "beef"
	 Given I on "/Menu"
   	 When I input "beef" in "product"
     And I click "search"
     Then I see meals that contain "beef"