Auto enrolment plugin for Moodle (http://moodle.org/)
=====================================================

[![Build Status](https://travis-ci.org/catalyst/moodle-enrol_auto.svg?branch=main)](https://travis-ci.org/catalyst/moodle-enrol_auto)

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

| Moodle verion     | Branch      | PHP  |
| ----------------- | ----------- | ---- |
| Moodle 3.2 and higher| main | 5.6+ |
| Totara 12 | main |  7.1+ |
| Totara 13+ | TOTARA_13 | 7.2+ |
