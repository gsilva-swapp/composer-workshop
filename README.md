# composer-workshop

Once the package be in swappsco packagist you have include the repository in your composer.json:

    "repositories":[
        {
            "type":"composer",
            "url":"https://repo.packagist.com/swappsco/"
        }
    ],

Then, you have to add it as a requirement:

    composer require silva/gustavo

To test the package you need to use the function :

    echo Workspace\StringUtils::reverseString('String of test');

The function would return a reversed string 

    -> tset fo gnirtS