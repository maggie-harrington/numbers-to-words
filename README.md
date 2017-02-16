# Numbers to Words

#### _Epicodus PHP BDD Practice, 2/16/2017_

#### By Maggie Harrington

## Description

_A website written in PHP that takes a user input number and converts it into written words. For example, 322 would translate into "three hundred twenty two"._

## Setup/Installation Requirements
* _Download at my GitHub repository: https://github.com/maggie-harrington/numbers-to-words ._
* _First open Git Bash, type "cd Desktop" and hit enter. Copy the link above, then type "git clone " and paste the link and hit enter. You will now have a copy of this project on your desktop. In Git Bash, type "cd numbers-to-words/" and hit enter, then "composer install" and enter. Once the installation has finished, type "cd web" and enter, then "php -S localhost:8000" and enter. In your web browser, navigate to "localhost:8000", which will open the home page._

## Known Bugs

_No known bugs at this time._

## Support and contact details

_If you run into any issues or have questions, ideas or concerns, please feel free to contact me at maggie.harrington@gmail.com_

## Technologies Used

_Written using Git Bash, Atom, Composer, Silex, Twig, PHPUnit, and Bootstrap._

### MIT License

Copyright (c) 2017 Maggie Harrington

## Specifications

| Test cases for convertToWords()  | Input    | Output  |
|----------------------------------|----------|---------|
| 1: Number has 1 digit  | 2       | two |
| 2: Number has 2 digits | 22      | twenty two |
| 3: Number has 3 digits | 222     | two hundred twenty two |
| 4: Number has 4 digits | 2222    | two thousand two hundred twenty two |
| 5: Number has 5 digits | 22222   | twenty two thousand two hundred twenty two |
| 6: Number has 6 digits | 222222  | two hundred twenty two thousand two hundred twenty two |
| 7: Number has 7 digits | 2222222 | two million two hundred twenty two thousand two hundred twenty two |
