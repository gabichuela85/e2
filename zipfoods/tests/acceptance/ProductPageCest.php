<?php

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '.product-price');
    }
    public function reviewAProductTest(AcceptanceTester $I)
    {
        #navigate to the product page
        $I->amOnPage('/product?sku=driscolls-strawberries');
        #fills in the name input
        $name = 'Bob';
        $I->fillField('[test=reviewer-name-input]', $name);
        #fills in the text area
        $review = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        $I->fillField('[test=review-textarea]', $review);
        #submits the form
        $I->click('[test=review-submit-button]');
        #confirms the confirmation of submission
        $I->seeElement('[test=review-confirmation]');
        
        #Confirm we see the review on the page
        $I->see($name, '[test=review-name]');
        
        $I->see($review, '[test=review-content]');
    }
    public function homeWelcomeTest(AcceptanceTester $I)
    {
        #navigate to the Welcome page of ZipFoods
        $I->amOnPage('/');
        #Check to see if the welcome message is there
        $I->see('Welcome');
    }
    public function productCount(AcceptanceTester $I)
    {
        #navigate to the Products page of ZipFoods
        $I->amOnPage('/products');
        #count the number of products on the page
        $productCount = count($I->grabMultiple('.product-link'));
        #check if the count is greater than 10
        $I->assertGreaterOrEquals(10, $productCount);
    }
    public function newProductCheck(AcceptanceTester $I)
    {
        #navigate to new Product page
        $I->amOnPage('/products/new');
        #Fill in the sections on the new product page
        #submit with these dummy responses
        #confirm the submission is valid and produces a confirmation message
        #check to see it appear on products page
        #check validation for one field on the form
    }
}