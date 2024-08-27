Auto enrolment plugin for TotaraLMS 
=====================================================

Note: If you have come here looking for a plugin for Moodle - we reccommend the alternative plugin:
https://moodle.org/plugins/enrol_autoenrol

Ever wanted to simplify the enrolment process for some of your courses by just auto enrolling users, based on actions they take within the system? This plugin helps you out with this, as you're able to configure which user actions should trigger a course enrolment for a user :)

Auto enrolment can be configured for the following scenarios:

* Auto enrolment upon course view

* Auto enrolment on login (new in 2.8)

* Auto enrolment upon activity/activities view

The plugin also allows you to configure a welcome message to be sent to the user upon enrolment.

You can now control self-enrolment using capabilities, so that you can allow auto enrolment
for a specific group of users within a course category. By default the 'enrol/auto:enrolself' capability
is given to all users, however you can remove this from the authenticated user role, and just give it to
certain roles assigned at the course category level.

Supported Branches
--------

| Totara verion     | Branch      |
| ----------------- | ----------- |
| Totara 13 and higher | TOTARA_13 |
