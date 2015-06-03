###################
Phone Directory
###################

Database structure dump is the 'bak.sql', contains only one table named 'phonedir'

To access the app, showing lists of available phone directory, go to localhost/[foldername]/phonedir

Paging default will limit 10 items per page. To costumize it, use [skip] and [limit] as parameter in query string. 
E.g. localhost/phonedir?skip=15&limit=5 (this will show data 16 - 20)

Entry form can be found in localhost/[foldername]/phonedir/form, or by clicking the "Add new directory" button in phone directory list page.

API can be accessed at localhost/[foldername]/phonedir/api?skip=[offset]&limit=[limit].
E.g. localhost/phonedir/api?limit=10&skip=0

