Feature: modify quantity
  In order to change the quantity of meals
  As a user
  I need to click the modify button, enter the preffered quantity of meal and click submit

  Scenario: try to order two "burger" instead of three "burger"
    Given I am on "Main/foods"
    When I click "change quantity" near "burger"
    And I enter the preffered amount
    And I click submit
    Then I see quantity of "burger" changes