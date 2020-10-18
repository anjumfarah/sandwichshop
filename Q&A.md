# Q&A

## 1.How might you make sandwich recommendations to the user based on their past orders,
without using a server-side database?
Ther are two ways that I can choose to make recommendations to users without using a server-side database.These two methods store data on the client's machine which can be accessed in future.
- Cookies - JavaScript can be used to create cookies to store order information and setting a really high expiry date.
- APIs - Several Client-storage API's can be used to store order informations for a user and can be pulled at a later time to make recommendations

## 2.How would you create a receipt for the order? 
	By using server-side database . Create a receipt table with ID, USER, TIMESTAMP, MEAT, TOPPINGS, TOTAL PRICE(optional). 

### a.How would you save the sandwich price?
By creating an receipt_table within the server side database. The receipt table can use foreign keys to reference user table , toppings_table/meat_table(Prices of toppings can be subjected to change as well new toppings could be added). Each time a customer makes an order, a new entry is made in the receipt table that mentions what toppings/meat were chosen. The respective price for each topping can be pulled from the toppings_table and the sandwich price could be re-calculated(however, it can cause delays).
Its easier to create a new column that stores the total value of the sandwich order placed.

### b.How would you attach a timestamp to the receipt?
There are several ways, one interesting method is using Carbon(PHP API). It gives several options to store date time. The timestamp can be attached to receipt at the time of creation of receipt when a new receipt entry is made in the database.

### c.How would you make the receipt accessible by an URL for a customer later?
Since the order_table will store information of all past orders of the user. For a given user all their past orders can be pulled from the receipt_table and rendered as a view. The page can then display a table all the receipt. A link can href'ed using receipt IDs. 
