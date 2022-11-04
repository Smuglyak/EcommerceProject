Feature: login
  In order to login in my account
  As a user
  I need to click on the login link

  Scenario: try to login
    Given I am on "Main/login"
    When I fill in username and password
    And click "login"
    Then I login in my account