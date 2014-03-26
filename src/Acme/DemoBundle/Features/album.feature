Feature: Album
  In order to
  As authorized user
  I need to be able manage albums and photos

@insulated @javascript @api
Scenario: Enter album view page as user which has access to it
  Given I am on homepage
  When I go to "/demo"
  Then I should see "Available demos"
  When I follow "Go to the login pag"
  Then I should see "Login"
  When I fill in "Username" with "admin"
  And I fill in "Password" with "adminpass"
  And I press "Login"
  Then I should see "Welcome"

@insulated @javascript
Scenario: Enter album view page as user which has access to it
  Given I am on homepage
  When I go to "/demo"
  Then I should see "Available demos"
  When I follow "Go to the login pag"
  Then I should see "Login"
  When I fill in "Username" with "admin"
  And I fill in "Password" with "adminpass"
  And I press "Login"
  Then I should see "Welcome"

