Feature: leave a comment
To leave a comment
As an user
I need to click on prefered meal, write a comment and click submit
 	 Scenario: try to leave a comment
	 Given I on "/Menu/Meal"
   	 When I click on meal I want to leave a comment to
   	 And I click "comment"
   	 And I write a comment
   	 And I click "submit"
   	 Then I can see my comment under the meal