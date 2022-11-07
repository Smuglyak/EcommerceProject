Feature: delete favorite
  In order to delete favorite meal from the database
  As a user
  I need to enter the meal item and click the delete favorite button

  Scenario: try deleting "burger"
    Given I am on "Main/favorite"
    When I click the delete button near the burger
    Then I can no longer see "burger" in "Main/favorite"