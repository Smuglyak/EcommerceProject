Feature: logout
  In order to logout from my account
  As a user
  I need to click on the logout link

  Scenario: try to logout
    Given I am on "Main"
    When I click "logout"
    Then I logout from my account