

## Explanation

I have copied the orders.json to my storage folder and then I create a separate controller (Orders Controller) to complete the actions point from the test. 
I have point the controller and the method to the home route. 

The method in the controller doing the action and sending the data to the front-end is orders() 

1. I'm getting the data from the JSON file
2. with json_decode im converting the data from json object to a php object we have 2 parameters the first one is the variable with the json object and second parameter is TRUE which means JSON objects will be returned as associative arrays.
3.I'm wrapping the data into a collection each and every time which is giving me option to apply lots of methods to manipulate with the data inside.


## Answers


<b>Count the total number of orders?</b>
- I create variable which is holding the $items variable as a collection and then I create another variable $allcount which is holding $all variable with applied count() method on it to count the returned data.


<b>Count the number of orders that were FREE?</b>
-  In the $free variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'price' array element equal on '0' and I am applying count() method to count the returned data.

<b>Count the number of orders that were placed in GBP?</b>
-  In the $gbp variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'currency' array element equal on 'GBP' and I am applying count() method  to count the returned data.


<b>Count the number of orders that were shipped to Essex?</b>
-  In the $essex variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'county' array element equal on 'Essex' and I am applying count() method  to count the returned data.


<b>Sum the cost of orders that were placed in GBP and were £100 or more?</b>
-  In the $gbp100sum variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'currency' array element equal on 'GBP'  AND array element 'price' equal or bigger than '100' and I am applying sum() method to sum the returned data.

<b>Sum the cost of orders that were placed in GBP?</b>
 - In the $gbpsum variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'currency' array element equal on 'GBP'  AND array element 'price' and I am applying sum() method to sum the returned data.


<b>Sum the cost of orders that were placed in GBP and were shipped to Essex?</b>
 - In the $gbpsumessex variable im having the $items varibale which is already collection and Im applying the fillter method to the collection and then I am returning the 'currency' array element equal on 'GBP'  AND array element 'county' and I am applying sum() method to sum the returned data.



## Installation

1. git clone https://github.com/donchoborisov/tillo-orders.git
2. cd tillo-orders
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. run php artisan serve


