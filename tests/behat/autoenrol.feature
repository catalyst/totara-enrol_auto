@enrol @enrol_auto
Feature: Auto enrol setup and use
  In order to participate in courses
  As a user
  I need to be enrolled automatically

  Background:
    Given the following "users" exist:
      | username | firstname    | lastname | email             |
      | student1 | Eugene1      | Student1 | eugene@venter.com |
      | teacher1 | Elmaret1     | Teacher1 | teacher1@asd.com  |
    And the following "courses" exist:
      | fullname  | shortname |
      | Course 1   | c1        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | c1     | editingteacher |
    And I log in as "admin"
    And I navigate to "Manage enrol plugins" node in "Site administration > Plugins > Enrolments"
    And I click on "Enable" "link" in the "Auto enrolment" "table_row"
    And I log out

  Scenario: Auto enrolment but no guest access
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I add "Auto enrolment" enrolment method with:
      | Custom instance name | Eugene auto enrolment |
      | Enrol on             | Course view |
    And I log out
    And I am on "Course 1" course homepage
    When I press "Log in as a guest"
    Then I should see "Log in"

  Scenario: Auto enrolment upon course view
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    When I add "Auto enrolment" enrolment method with:
      | Custom instance name | Eugene auto enrolment |
      | Enrol on             | Course view |
    And I log out
    And I log in as "student1"
    And I am on "Course 1" course homepage
    Then I should see "Topic 1"

  Scenario: Auto enrolment upon login
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    When I add "Auto enrolment" enrolment method with:
      | Custom instance name | Eugene auto enrolment |
      | Enrol on             | User login |
    And I log out
    And I log in as "student1"
    And I log out
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Enrolled users" node in "Course administration > Users"
    Then I should see "eugene@venter.com"
    And I should see "Eugene auto enrolment"
    And I log out
    Given I log in as "student1"
    And I am on "Course 1" course homepage
    Then I should see "Topic 1"

  Scenario: Auto enrolment enabled upon activity view
    Given I log in as "teacher1"
    And I am on "Course 1" course homepage
    When I add "Auto enrolment" enrolment method with:
      | Custom instance name | Eugene auto enrolment |
      | Enrol on             | Course activity/resource view |
    And I click on "Edit" "link" in the "Eugene auto enrolment" "table_row"
    # Select the book activity
    And I set the field with xpath "//*[@id='id_customtext2_book']" to "1"
    And I press "Save changes"
    And I click on "Enable" "link" in the "Guest access" "table_row"
    And I am on "Course 1" course homepage
    And I turn editing mode on
    And I add a "Book" to section "1" and I fill the form with:
      | Name | Test book |
      | Description | A beautiful book for Maia! |
    And I follow "Test book"
    And I set the following fields to these values:
      | Chapter title | Chapter one |
      | Content | A long time ago, in a place far far away... |
    And I press "Save changes"
    And I log out

    When I log in as "student1"
    And I am on "Course 1" course homepage
    # We should be able to access the course via guest access at this point
    Then I should see "Topic 1"
    And I follow "Test book"
    Then I should see "far far away..."
    And I log out

    When I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Enrolled users" node in "Course administration > Users"
    Then I should see "eugene@venter.com"
    And I should see "Eugene auto enrolment"
