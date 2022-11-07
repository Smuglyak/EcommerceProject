Feature: add quantity
  In order to order more meals
  As a user
  I need to enter the preffered quantity of meal and click submit

  Scenario: try to order three "burger"
    Given I am on "Main/foods"
    When I click "add more" near "burger"
    And I enter the preffered amount
    And I click submit
    Then I see quantity of "burger" increases