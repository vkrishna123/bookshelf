[centos@ip-172-31-5-99 Development]$ sudo yum -y install wget unzip
Failed to set locale, defaulting to C
Loaded plugins: fastestmirror
Loading mirror speeds from cached hostfile
 * base: d36uatko69830t.cloudfront.net
 * extras: d36uatko69830t.cloudfront.net
 * updates: d36uatko69830t.cloudfront.net
Package wget-1.14-18.el7_6.1.x86_64 already installed and latest version
Package unzip-6.0-21.el7.x86_64 already installed and latest version
Nothing to do
[centos@ip-172-31-5-99 Development]$ wget https://github.com/ravi2krishna/php-lamp/archive/master.zip
--2020-11-15 04:52:26--  https://github.com/ravi2krishna/php-lamp/archive/master.zip
Resolving github.com (github.com)... 192.30.255.112
Connecting to github.com (github.com)|192.30.255.112|:443... connected.
HTTP request sent, awaiting response... 302 Found
Location: https://codeload.github.com/ravi2krishna/php-lamp/zip/master [following]
--2020-11-15 04:52:26--  https://codeload.github.com/ravi2krishna/php-lamp/zip/master
Resolving codeload.github.com (codeload.github.com)... 192.30.255.120
Connecting to codeload.github.com (codeload.github.com)|192.30.255.120|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: unspecified [application/zip]
Saving to: 'master.zip'

    [ <=>                                                                       ] 9,428       --.-K/s   in 0.006s  

2020-11-15 04:52:26 (1.42 MB/s) - 'master.zip' saved [9428]

[centos@ip-172-31-5-99 Development]$ ls
Service.html  contact.html  index.html  master.zip
[centos@ip-172-31-5-99 Development]$ unzip master.zip 
Archive:  master.zip
29b57d70c8adc69f718bcda72d5f2be7721d3f5d
   creating: php-lamp-master/
  inflating: php-lamp-master/LICENSE  
  inflating: php-lamp-master/README.md  
  inflating: php-lamp-master/index.php  
   creating: php-lamp-master/php/
  inflating: php-lamp-master/php/component.php  
  inflating: php-lamp-master/php/db.php  
  inflating: php-lamp-master/php/main.js  
  inflating: php-lamp-master/php/operation.php  
  inflating: php-lamp-master/style.css  
[centos@ip-172-31-5-99 Development]$ ls
Service.html  contact.html  index.html  master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ cd php-lamp-master/
[centos@ip-172-31-5-99 php-lamp-master]$ ls
LICENSE  README.md  index.php  php  style.css
[centos@ip-172-31-5-99 php-lamp-master]$ cd 
[centos@ip-172-31-5-99 ~]$ ls
Development  Project  project  test
[centos@ip-172-31-5-99 ~]$ cd Development/
[centos@ip-172-31-5-99 Development]$ ls
Service.html  contact.html  index.html  master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ rm Service.html 
[centos@ip-172-31-5-99 Development]$ ls
contact.html  index.html  master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ rm contact.html 
[centos@ip-172-31-5-99 Development]$ rm index.html 
[centos@ip-172-31-5-99 Development]$ ls
master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ git branch 
* bookshelf
  develop
  master
  test
[centos@ip-172-31-5-99 Development]$ git remote add origin https://github.com/vkrishna123/bookshelf.git
[centos@ip-172-31-5-99 Development]$ git push -all
error: did you mean `--all` (with two dashes ?)
[centos@ip-172-31-5-99 Development]$ git push --all
Username for 'https://github.com': vkrishna123
Password for 'https://vkrishna123@github.com': 
Counting objects: 18, done.
Compressing objects: 100% (14/14), done.
Writing objects: 100% (18/18), 1.48 KiB | 0 bytes/s, done.
Total 18 (delta 5), reused 0 (delta 0)
remote: Resolving deltas: 100% (5/5), done.
To https://github.com/vkrishna123/bookshelf.git
 * [new branch]      bookshelf -> bookshelf
 * [new branch]      develop -> develop
 * [new branch]      master -> master
 * [new branch]      test -> test
[centos@ip-172-31-5-99 Development]$ ls
master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ cp php-lamp-master/ .
cp: omitting directory 'php-lamp-master/'
[centos@ip-172-31-5-99 Development]$ cp php-lamp-master/ Development 
cp: omitting directory 'php-lamp-master/'
[centos@ip-172-31-5-99 Development]$ ls
master.zip  php-lamp-master
[centos@ip-172-31-5-99 Development]$ rm master.zip 
[centos@ip-172-31-5-99 Development]$ ls
php-lamp-master
[centos@ip-172-31-5-99 Development]$ cd php-lamp-master/
[centos@ip-172-31-5-99 php-lamp-master]$ ls
LICENSE  README.md  index.php  php  style.css
[centos@ip-172-31-5-99 php-lamp-master]$ vi index.php 
[centos@ip-172-31-5-99 php-lamp-master]$ vi style.css 
[centos@ip-172-31-5-99 php-lamp-master]$ vi README.md 
[centos@ip-172-31-5-99 php-lamp-master]$ cd php/
[centos@ip-172-31-5-99 php]$ ls
component.php  db.php  main.js  operation.php
[centos@ip-172-31-5-99 php]$ vi component.php

<?php

function inputElement($icon, $placeholder, $name, $value){
    $ele = "
        
        <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text bg-warning\">$icon</div>
                        </div>
                        <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
                    </div>
    
    ";
    echo $ele;
}

function buttonElement($btnid, $styleclass, $text, $name, $attr){
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}
"component.php" [noeol] 22L, 744C                                                                 1,1           All

