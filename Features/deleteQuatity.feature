Feature: delete quantity
  In order to delete the quantity of meals
  As a user
  I need to click delete quantity near the meal

  Scenario: try to delete three "burger"
    Given I am on "Main/foods"
    When I click "delete" near "burger"
    Then I can no longer see "burger"