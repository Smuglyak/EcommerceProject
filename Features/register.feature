Feature: register
  In order to register a new account
  As a user
  I need to click on the register link

  Scenario: try to register user "user"
    Given I am on "Main/register"
    When I fill in username and password
    And click "register"
    Then I register a new account