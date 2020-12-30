# Interview Questions
## Fundamentals
### 1. What is the difference between $a == $b and $a === $b
Both operators are equal operators. But for the first one PHP will make a type juggling before comparison and will return true for 1 == ’1’, and the second one will return false with the same example because of type difference.

### 2. What is the difference between <?php and <?=
Both are PHP script opening tags. But the first one is to tell the interpreter to recognize text next to it as a PHP code, and the second one is equal to "<?php echo" and will send the result of expression next to it into a standard output

### 3. Explain the difference between classes and interfaces.
Interfaces are just the way to specify which methods should be implemented in a class and are extremely useful to create loosely coupled code. Against classes, they can only contain definitions of public methods without a realization.

### 4. What are PHP Traits?
PHP Traits are a technic to reuse multiple functions in classes designed because of PHP's single inheritance nature. But if the inheritance is a complex OOP technic, traits are just the way to avoid a copy-paste of code.

### 5. What are Constructors and Destructors?
Constructor and Destructor are special methods in most of OOP languages. If class have a constructor it will be called on each newly created object and this is a best place to initiate what ever you need for each instance, or maybe allocate some resources etc. Opposite to constructor, destructor calls at the end of instance’s life circle and it suitable to free all resources allocated by the instance.
### 6. Explain the visibility of the property or method.
Visibility modifiers are made to protect class behavior and realization from unexpected modifications. If a method or property is private, you can access them only within the class.
The good practice is to declare all properties and methods as private and then share, with a public keyword, only whatever is necessary to use this class.

### 7. What are the differences between GET and POST methods?
The GET method of HTTP is used to request data identified by URI and the POST method – to send data to a server. Accordingly, HTTP assumes that GET doesn’t have a body, and POST does. Additionally, GET should be an idempotent request. That’s mean it doesn’t matter how many requests you’ll make to the same system; the response will be the same. POST request opposite to GET can repeatedly mutate the state of a system. For example, if you call POST /entity/ (and this is an endpoint to create an entity) with the same body, you should expect that you’ll create two same entities.
### 8. What is PHP-FPM?
PHP-FPM is a popular implementation of a FastCGI. That’s mean that this is a kind of a manager that’s managing a pool of pre-started processes. When a request comes to a web-server, it sends some information about this request to FPM and asks it to perform the PHP script with parameters from the request. The script will be performed in one of the pre-started processes, and the result will go back to the webserver, and so on. Additionally, to FastCGI possibilities, PHP-FPM has some cool features like continuous work after response had sent, graceful-stop, etc.


