Feature: add ingredient
  In order to add ingredient to the meal
  As a user
  I need to enter the ingredient name and click the submit button

  Scenario: try adding "lettuce"
    Given I am on "Main/meal"
    When I input "lettuce" in "new_ingredient"
    And I click submit
    Then I see "lettuce"