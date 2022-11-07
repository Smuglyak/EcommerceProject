Feature: rate meal
To rate meal
As an user
I need to select score (from one to five) the meal deserves
 	 Scenario: try to rate "fried fish"
	 Given I on "/Menu/Meal/FriedFish"
   	 When I select the score
   	 And press submit
   	 Then I see my score to the "fried fish"