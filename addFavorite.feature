Feature: add favorite
  In order to add favorite meal to the database
  As a user
  I need to enter the meal item and click the add favorite button

  Scenario: try adding "burger"
    Given I am on "Main/meal/burger"
    When I input "burger" in "new_food"
    And I click the food submit
    Then I see "burger" in "Main/favorite"